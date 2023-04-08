<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orderdetails;

class OrderdetailsController extends Controller
{
    function orderdetailsDB(){

        $page_title = 'Order Details';
        $db = Orderdetails::all();

        return view ('/orderdetails', compact('page_title','db'));
    }
}
