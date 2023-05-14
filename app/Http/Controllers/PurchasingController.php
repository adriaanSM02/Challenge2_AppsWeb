<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;

class PurchasingController extends Controller
{
    public function todo(Request $request){
        $page_title = 'You are in the purchasing department';       
         $requests=Requests::all();

        return view('purchasing.index',compact('page_title','requests'));
    }
}
