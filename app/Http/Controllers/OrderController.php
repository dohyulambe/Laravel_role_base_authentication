<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // $order = order::all();
        return view('order.list');
    }

    public function orderindex()
    {
        // $order = order::all();
        return view('order.order');
    }
}
