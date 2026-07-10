<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->query('tab', 'd');

        if ($tab == 'categories') {
            $data = Category::all();
        } elseif ($tab == 'product') {
            $data = Product::all();
        } else {
            $data = User::all();
        }

        return view('admin.dashboard', compact('data', 'tab'));
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->route('dashboard.index');
    }

    public function edit($id)
    {
        $d = User::findOrFail($id);
        return view('admin.edit', compact('d'));
    }

    public function update(Request $request, $id)
    {
        $d = User::findOrFail($id);
        $d->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('dashboard.index');

    }
}
