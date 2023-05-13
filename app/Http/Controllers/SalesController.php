<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrderDetails;
use App\Models\Clients;
use App\Models\Products;

class SalesController extends Controller
{
    public function create(){
        $page_title = "Create Order";
        $clients = Clients::all();
        $products = Products::all();

        return view('sales.create', compact('page_title', 'clients', 'products'));
    }


    public function store(Request $request){
        $order = Orders::create([
            'status' => 0,
            'client_id' => $request->client_id,
            'tax' => 0,
            'total' => 0,
            'subtotal' => 0,
        ]);

        $quantities = $request->quantities;
        $products = $request->products;
        $order_subtotal = 0;

        for($x=0; $x < count($products); $x++){
            $product = Products::where('id', $products[$x])->first();
            $subtotal = $product->price * $quantities[$x];

            OrderDetails::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $quantities[$x],
                'subtotal' => $subtotal
            ]);

            $order_subtotal = $order_subtotal + $subtotal;
        }

        $order_tax = $order_subtotal * .16;
        $order_total = $order_subtotal + $order_tax;

        $order->update([
            'subtotal'  => $order_subtotal,
            'tax' => $order_tax,
            'total' => $order_total
        ]);

        return redirect()->route('dashboard')->with('page_title', 'Orders');
    }
}
