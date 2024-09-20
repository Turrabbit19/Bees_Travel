<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlaceRequest; 
use App\Http\Requests\UpdatePlaceRequest; 
use App\Models\Place; 
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PlaceController extends Controller
{
    const PATH_VIEW = "admin.places."; 

    public function index()
    {
        $data = Place::latest('id')->get(); 
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function store(StorePlaceRequest $request) 
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $url = $request->file('image')->store('places', 'public'); 
        } else {
            $url = "";
        }
        $data['image'] = $url;
        
        Place::create($data); 
        return redirect('/admin/places')->with("success", "Thêm mới thành công.");
    }

    public function show(Place $place) 
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('place'));
    }

    public function edit(Place $place) 
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('place'));
    }

    public function update(UpdatePlaceRequest $request, Place $place) 
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($place->image) {
                Storage::disk('public')->delete($place->image); 
            }
            $url = $request->file('image')->store('places', 'public'); 
            $data['image'] = $url;
        }
        $data['updated_at'] = Carbon::now();
        
        $place->update($data); 
        return redirect('/admin/places')->with("success", "Cập nhật thành công.");
    }

    public function destroy(Place $place) 
    {
        Storage::disk('public')->delete($place->image); 
        $place->delete(); 
        return back()->with("success", "Xóa thành công.");
    }
}