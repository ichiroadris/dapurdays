<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::where('role', 1)->get();
        return Inertia::render('Admin/Customer/Index', ['customers' => $customers]);
    }

    public function landingIndex()
    {
        $menus = Menu::paginate(7);
        return Inertia::render('Landing', ['menus' => $menus]);
    }
}
