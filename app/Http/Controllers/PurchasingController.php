<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Requests;

class PurchasingController extends Controller
{
    public function index(Request $request){
        $page_title="Show Request";
        $requests=Requests::all();

        return view('purchasing.index',compact('page_title','requests'));
    }

}
