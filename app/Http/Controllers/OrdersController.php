<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrdersController extends Controller
{
    function ordersDB(){

        $page_title = 'Orders';
        $db = Orders::all();

        return view ('/orders', compact('page_title','db'));
    }
}
