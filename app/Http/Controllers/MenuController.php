<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return Inertia::render('Admin/Menu/Index', ['menus' => $menus]);
    }

    public function create(Request $req)
    {
        $validated = $req->validate([
            'name' => 'string|max:40',
            'image' => 'mimes:jpeg,png|max:2048'
        ]);
        $extension = $req->image->extension();
        $req->image->storeAs('/public', $validated['name'] . "." . $extension);
        $url = Storage::url($validated['name'] . "." . $extension);

        $menu = Menu::create([
            'cake_type' => $req->category,
            'cake_price' => $req->price,
            'cake_name' => $req->name,
            'cake_description' => $req->description,
            'image_url' => $url,
        ]);

        return back();
    }

    public function show(Menu $menu)
    {
        $menus = Menu::paginate(4);
        return Inertia::render('Product', ['menu' => $menu, 'menus' => $menus]);
    }

    public function purchase(Menu $menu)
    {
        return Inertia::render('Customer/Checkout', ['menu' => $menu]);
    }

    public function checkout(Request $req, Menu $menu)
    {
        $menu = Menu::findOrFail($req->menu);
        $data = [
            'name' => $req->name,
            'address' => $req->address,
            'phone_number' => $req->phone_number,
            'payment_method' => $req->payment_method,
            'menu' => $req->menu
        ];
        return Inertia::render('Customer/ConfirmCheckout', ['data' => $data, 'menu' => $menu]);
    }

    public function confirmed(Request $req)
    {
        $menu = Menu::findOrFail($req->menu);
        $order = Order::create([
            'name' => $req->name,
            'address' => $req->address,
            'payment_method' => $req->payment_method,
            'status' => 0,
            'total_cost' => $menu->cake_price,
            'customer_id' => auth()->user()->id,
            'cake_name' => $menu->cake_name
        ]);
        return redirect('/user/history');
    }

    public function history() {
        $orders = Order::where('customer_id', auth()->user()->id)->get();
        return Inertia::render('Customer/History', ['orders' => $orders]);
    }

    public function destroy(Request $req) {
        $id = (int)$req->menuid;
        $order = Menu::findOrFail($id);
        $order->delete();
        return redirect('/admin/menus');
    }
}
