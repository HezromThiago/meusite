<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        return Testimonial::latest()->paginate(20);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'author_name' => ['required', 'string', 'max:120'],
            'author_city' => ['nullable', 'string', 'max:120'],
            'content' => ['required', 'string'],
            'rating' => ['nullable', 'integer', 'min:1', 'max:5'],
            'is_active' => ['boolean'],
        ]);

        return Testimonial::create($data);
    }

    public function show(Testimonial $testimonial)
    {
        return $testimonial;
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'author_name' => ['sometimes', 'string', 'max:120'],
            'author_city' => ['nullable', 'string', 'max:120'],
            'content' => ['sometimes', 'string'],
            'rating' => ['nullable', 'integer', 'min:1', 'max:5'],
            'is_active' => ['boolean'],
        ]);

        $testimonial->update($data);

        return $testimonial;
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return response()->noContent();
    }
}
