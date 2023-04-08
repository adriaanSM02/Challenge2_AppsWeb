<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    function staffDB(){

        $page_title = 'Staff';
        $db = Staff::all();

        return view ('/staff', compact('page_title','db'));
    }
}
