<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Clients;
use App\Models\Orders;

class DashboardController extends Controller
{
    public function index(){
        switch (Auth::user()->role){
            case 0:
                $page_title = 'You are an admin';
                return view('dashboard', compact('page_title'));
                break;
            case 1:
                $page_title = 'You are in the sales department';
                return view('sales.index', compact('page_title'));
                break;
            case 2:
                $page_title = 'You are in the warehouse department';
                return view('warehouse.index', compact('page_title'));
                break;
            case 3:
                $page_title = 'You are in the purchasing department';
                return view('purchasing.index', compact('page_title'));
                break;
            case 4:
                $page_title = 'You are in the route department';
                return view('route.index', compact('page_title'));
                break;
        }
    }

    public function list(Request $request){
        // dd($request);
        $page_title = "Orders";
        $client = Clients::where('uuid', $request->uuid)->firstOrFail();
        $orders = Orders::where('client_id', $client->id)->get();

        // dd($orders);

        return view('clientorders', compact('orders', 'page_title'));
    }
}
