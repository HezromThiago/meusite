<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::latest()->paginate(20);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'slug' => ['required', 'string', 'max:180', 'unique:products,slug'],
            'title' => ['required', 'string', 'max:200'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'short_description' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['nullable', 'numeric'],
            'image_url' => ['nullable', 'string', 'max:255'],
            'is_active' => ['boolean'],
        ]);

        return Product::create($data);
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => ['sometimes', 'string', 'max:150'],
            'slug' => ['sometimes', 'string', 'max:180', 'unique:products,slug,' . $product->id],
            'title' => ['sometimes', 'string', 'max:200'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'short_description' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['nullable', 'numeric'],
            'image_url' => ['nullable', 'string', 'max:255'],
            'is_active' => ['boolean'],
        ]);

        $product->update($data);

        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->noContent();
    }

    public function showBySlug(string $slug)
    {
        return Product::where('slug', $slug)->where('is_active', true)->firstOrFail();
    }
}
