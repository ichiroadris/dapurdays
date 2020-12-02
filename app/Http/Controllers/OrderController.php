<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return Inertia::render('Admin/Order/Index', ['orders' => $orders]);
    }

    public function completeDelivering(Request $req) {

        $order = Order::findOrfail($req->id);
        $order->status = 2;
        $order->save();
        return back();
    }

    public function completeCake(Request $req) {
        $order = Order::findOrfail($req->id);
        $order->status = 1;
        $order->save();
        return back();
    }
}
