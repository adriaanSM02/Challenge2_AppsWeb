<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientsResult;

class ClientsResultController extends Controller
{
    function clientsDB(){

        $page_title = 'Clients';
        $db = Clients::all();

        return view ('/clients', compact('page_title','db'));
    }
}
