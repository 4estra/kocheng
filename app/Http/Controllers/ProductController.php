<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('category');

        if ($request->has('categories')) {
            $query->whereIn('category_id', $request->categories);
        }

        $products = $query->get();
        $categories = Category::all();

        return view('users.product', compact('products', 'categories'));
    }
}
