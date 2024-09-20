<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Http\Requests\StoreTourRequest;
use App\Http\Requests\UpdateTourRequest;
use App\Models\Place;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    const PATH_VIEW = 'admin.tours.';

    public function index()
    {
        $tours = Tour::with('place')->latest('id')->get();
        return view(self::PATH_VIEW . 'index', compact('tours'));
    }

    public function create()
    {
        $places = Place::pluck('name', 'id')->all();
        return view(self::PATH_VIEW . 'create', compact('places'));
    }

    public function store(StoreTourRequest $request)
    {
        $data = $this->prepareTourData($request);

        DB::transaction(function () use ($data, $request) {
            $tour = Tour::create($data);

            if ($request->has('extra_features') && !empty($request->extra_features)) {
                $this->storeExtraFeatures($tour, $request->extra_features);
            }

            if ($request->has('galleries') && !empty($request->galleries)) {
                $this->storeGalleries($tour, $request->galleries);
            }
        });

        return redirect()->route('admin.tours.index')->with('success', 'Thêm tour thành công.');
    }

    public function show(Tour $tour) 
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('tour'));
    }

    public function edit(Tour $tour)
    {
        $places = Place::pluck('name', 'id')->all();
        
        return view(self::PATH_VIEW . 'edit', compact('tour', 'places'));
    }

    public function update(UpdateTourRequest $request, Tour $tour)
    {
        $this->updateTourData($tour, $request);

        if ($request->has('extra_features') && !empty($request->extra_features)) {
            $this->updateExtraFeatures($tour, $request->extra_features);
        }

        if ($request->has('galleries') && !empty($request->galleries)) {
            $this->updateGalleries($tour, $request->galleries);
        }

        return redirect()->route('admin.tours.index')->with('success', 'Cập nhật tour thành công.');
    }

    public function destroy(Tour $tour)
    {
        $this->deleteTourRelations($tour);
        $tour->delete();
        return back()->with("success", "Xóa tour thành công.");
    }

    private function prepareTourData($request)
    {
        $data = $request->except(['extra_features', 'img_thumb', 'galleries']);
        $data['slug'] = Str::slug($data['name']);

        if ($request->hasFile('img_thumb')) {
            $data['img_thumb'] = $request->file('img_thumb')->store('tours', 'public');
        }

        return $data;
    }

    private function updateTourData(Tour $tour, $request)
    {
        $tour->fill($request->except(['img_thumb', 'extra_features', 'galleries']));
        $tour->slug = Str::slug($request->name);

        if ($request->hasFile('img_thumb')) {
            if ($tour->img_thumb) {
                Storage::disk('public')->delete($tour->img_thumb);
            }
            $tour->img_thumb = $request->file('img_thumb')->store('tours', 'public');
        }

        $tour->save();
    }

    private function storeExtraFeatures(Tour $tour, array $features = [])
    {
        foreach ($features as $feature) {
            $tour->extraFeatures()->create([
                'name' => $feature['name'],
                'price' => $feature['price']
            ]);
        }
    }

    private function storeGalleries(Tour $tour, array $galleries)
    {
        foreach ($galleries as $gallery) {
            $tour->galleries()->create([
                'image' => Storage::put('tour_galleries', $gallery)
            ]);
        }
    }

    private function updateExtraFeatures(Tour $tour, array $features = [])
    {
        $tour->extraFeatures()->delete();
        $this->storeExtraFeatures($tour, $features);
    }

    private function updateGalleries(Tour $tour, array $galleries)
    {
        $tour->galleries()->each(function ($gallery) {
            Storage::disk('public')->delete($gallery->image);
            $gallery->delete();
        });

        $this->storeGalleries($tour, $galleries);
    }

    private function deleteTourRelations(Tour $tour)
    {
        $tour->extraFeatures()->delete();
        $tour->galleries()->delete();

        if ($tour->img_thumb) {
            Storage::disk('public')->delete($tour->img_thumb);
        }
    }
}