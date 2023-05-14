<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class RouteController extends Controller
{
    public function mostrar()
    {
        $page_title = 'You are in the Route department';
        $orders = Orders::all();

        return view('route.edit', compact('page_title', 'orders'));
    }

    public function updateStatus(Request $request)
    {
        $orderId = $request->input('orderId');
        $status = $request->input('status');
        
        $orderId2 = $request->input('orderId2');
         $status2 = $request->input('status2');

        $order = Orders::find($orderId);
        $order->status = $status;
        $order->save();

        return response()->json(['success' => true]);
    }
    public function all()
    {
        $page_title = 'You are in the Route department';
        $orders = Orders::all();

        return view('route.index', compact('page_title', 'orders'));
    }

}