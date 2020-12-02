<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class MenuController extends Controller
{
    public function index() {
        $menus = Menu::all();
        return Inertia::render('Admin/Menu/Index', ['menus' => $menus]);
    }

    public function create(Request $req) {
        $validated = $req->validate([
            'name' => 'string|max:40',
            'image' => 'mimes:jpeg,png|max:2048'
        ]);
        $extension = $req->image->extension();
        $req->image->storeAs('/public', $validated['name'].".".$extension);
        $url = Storage::url($validated['name'].".".$extension);

        $menu = Menu::create([
            'cake_type' => $req->category,
            'cake_price' => $req->price,
            'cake_name' => $req->name,
            'cake_description' => $req->description,
            'image_url' => $url,
        ]);

        return back();
    }

    public function show(Menu $menu) {
        $menus = Menu::paginate(4);
        return Inertia::render('Product', ['menu' => $menu, 'menus' => $menus] );
    }
}
