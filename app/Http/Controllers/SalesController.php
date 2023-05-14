<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrderDetails;
use App\Models\Clients;
use App\Models\Products;

class SalesController extends Controller
{
    public function create()
    {
        $page_title = "Create Order";
        $clients = Clients::all();
        $products = Products::all();

        return view('sales.create', compact('page_title', 'clients', 'products'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'client_id' => 'required',
            'status' => 'required',
            'subtotal' => 'required',
            'tax' => 'required',
            'total' => 'required',
            'notes' => 'nullable',
            'dateNtime' => 'required',
            'photo1' => 'nullable',
            'active' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        // Crear una nueva instancia del modelo Orders
        $order = new Orders;

        // Asignar los valores de los campos
        $order->client_id = $request->input('client_id');
        $order->status = $request->input('status');
        $order->subtotal = $request->input('subtotal');
        $order->tax = $request->input('tax');
        $order->total = $request->input('total');
        $order->notes = $request->input('notes');
        $order->dateNtime = $request->input('dateNtime');
        $order->photo1 = $request->input('photo1');
        $order->active = $request->input('active');
        $order->created_at = $request->input('created_at');
        $order->updated_at = $request->input('updated_at');

        try {
            // Guardar el modelo en la base de datos
            $order->save();
        
            // Redireccionar a una ruta o vista específica
            return redirect()->route('sales.create')->with('success', 'Order created successfully');
        } catch (\Exception $e) {
            // Capturar la excepción y mostrar un mensaje de error
            return redirect()->back()->with('error', 'Error creating order: ' . $e->getMessage());
        }
        
    }

    public function mostrar()
    {
        $page_title = 'You are in the Sales department';
        $orders = Orders::all();
    
        return view('sales.index', compact('page_title', 'orders'));
    }

}