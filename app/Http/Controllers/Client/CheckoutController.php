<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function viewCheckout()
    {
        $tour = session('tour');
        $booking = session('booking'); 
        return view('client.triptopia.checkout', compact('tour', 'booking'));
    }

    public function saveBooking(Request $request)
    {
        $data = $request->all();

        session()->put('booking', [
            'checkIn' => $data['checkIn'],
            'checkOut' => $data['checkOut'],
            'quantity' => $data['quantity'],
            'extraFeatures' => $data['extraFeatures'],
            'totalPayment' => $data['totalPayment']
        ]);

        if (isset($data['tour'])) {
            session()->put('tour', $data['tour']); 
        }

        return response()->json(['success' => true]);
    }

    public function processCheckout(Request $request)
    {
        $tour = session()->get('tour', []);
        $booking = session('booking', []);

    $paymentMethod = $request->input('paymentMethod'); 

    $totalPayment = $booking['totalPayment'] + 1; 

    $invoice = Invoice::create([
        'user_id' => Auth::id(),
        'sku' => 'INV-' . strtoupper(Str::random(8)),
        'user_name' => $request->input('name'),
        'user_email' => $request->input('email'),
        'user_address' => $request->input('address'),
        'user_phone' => $request->input('phone'),
        'note' => $request->input('note'),
        'payment_method' => $paymentMethod,
        'status' => '1', 
    ]);
    
    // Tạo một bản ghi hóa đơn
    Bill::create([
        'invoice_id' => $invoice->id,
        'payment_method' => $request->paymentMethod,
        'total_amount' => $booking['totalPayment'],
        'transaction_id' => strtoupper(bin2hex(random_bytes(16))), // ID giao dịch ngẫu nhiên
    ]);

    // Kiểm tra xem $booking có phải là một mảng không
    foreach ($booking['extraFeatures'] as $feature) {
        InvoiceDetail::create([
            'invoice_id' => $invoice->id,
            'tour_id' => $tour['id'],
            'tour_name' => $tour['name'],
            'tour_sku' => $tour['sku'],
            'checkin' => $booking['checkIn'],
            'checkout' => $booking['checkOut'],
            'extra_feature' => $feature['name'], 
            'quantity' => $booking['quantity'] ?? 1,
            'price' => $tour['price'] ?? 0,
        ]);
    }


    session()->forget(['tour', 'booking', 'cart']);

    return view('client.triptopia.thanks', compact('tour', 'booking', 'totalPayment'));
    }
}