<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return City::latest()->paginate(20);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'slug' => ['required', 'string', 'max:150', 'unique:cities,slug'],
            'title' => ['required', 'string', 'max:200'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'content' => ['nullable', 'string'],
            'is_active' => ['boolean'],
        ]);

        return City::create($data);
    }

    public function show(City $city)
    {
        return $city;
    }

    public function update(Request $request, City $city)
    {
        $data = $request->validate([
            'name' => ['sometimes', 'string', 'max:120'],
            'slug' => ['sometimes', 'string', 'max:150', 'unique:cities,slug,' . $city->id],
            'title' => ['sometimes', 'string', 'max:200'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'content' => ['nullable', 'string'],
            'is_active' => ['boolean'],
        ]);

        $city->update($data);

        return $city;
    }

    public function destroy(City $city)
    {
        $city->delete();

        return response()->noContent();
    }

    public function showBySlug(string $slug)
    {
        return City::where('slug', $slug)->where('is_active', true)->firstOrFail();
    }
}
