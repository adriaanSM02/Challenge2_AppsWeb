<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Clients;
use App\Models\Orders;
use app\Models\Requests;

class DashboardController extends Controller
{
    public function index(){
        switch (Auth::user()->role){
            case 0:
                $page_title = 'Admin Department';
                return view('dashboard', compact('page_title'));
                break;
            case 1:
                return redirect()->route('sales.index');
                break;
            case 2:
                $page_title = 'Warehouse Department';
                $orders = Orders::all();
                return view('warehouse.index', compact('page_title', 'orders'));
                break;
            case 3:
                return redirect()->route('purchasing.index');
                break;
            case 4:
                return redirect()->route('route.index');
                break;
                
        }
    }

    public function list(Request $request){
        // dd($request);
        $page_title = "Orders";
        $client = Clients::where('uuid', $request->uuid)->firstOrFail();
        $orders = Orders::where('client_id', $client->id)->get();

        // dd($orders);

        return view('clientsresult', compact('orders', 'page_title'));
    }

}
