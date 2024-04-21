<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        // Logic for dashboard management
        return view('admin.dashboard');
    }
    public function cashier()
    {
        // Logic for cashier management
        return view('admin.cashier');
    }

    public function product()
    {
        $data = array(
            'title' => 'Products'
        );
        // Logic for product management
        return view('admin.product')->with($data);
    }

    public function sales()
    {
        // Logic for sales report
        return view('admin.sales');
    }

    public function settings()
    {
        // Logic for settings
        return view('admin.settings');
    }
}
