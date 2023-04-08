<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    function productsDB(){

        $page_title = 'Products';
        $db = Products::all();

        return view ('/products', compact('page_title','db'));
    }
}
