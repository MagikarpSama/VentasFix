<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $usersCount = \App\Models\User::count();
        $productsCount = \App\Models\Product::count();
        $clientsCount = \App\Models\Client::count();
        return view('dashboard', compact('usersCount', 'productsCount', 'clientsCount'));
    }
}
