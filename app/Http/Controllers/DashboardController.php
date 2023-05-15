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
                return redirect()->route('sales.index');
                break;
            case 1:
                return redirect()->route('sales.index');
                break;
            case 2:
                return redirect()->route('warehouse.index');
                break;
            case 3:
                return redirect()->route('purchasing.index');
                break;
            case 4:
                return redirect()->route('route.index');
                break;

                default:
                abort(403, 'Unauthorized action.');
                
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
