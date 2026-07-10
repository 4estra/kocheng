<?php

namespace App\Http\Controllers;

use App\Models\Category;
// use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function edit($id)
    {
        $d = Category::findOrFail($id);
        return view('admin.category_edit', compact('d'));
    }
}
