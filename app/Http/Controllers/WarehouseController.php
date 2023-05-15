<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrderDetails;
use App\Models\Clients;
use App\Models\Products;
use App\Models\Requests;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page_title = 'Warehouse Department';
        $orders = Orders::all();

        return view('warehouse.index', compact('orders','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */

     
    public function CreateAll()
    {
        $page_title = 'Create Request';
        $orders = Orders::all();

        return view('warehouse.create', compact('orders','page_title'));
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'status' => 'required',
        ]);
    
        try {
            // Crear una nueva instancia del modelo Requests
            $order = new Requests;
    
            // Asignar los valores de los campos
            $order->product_id = $request->input('product_id');
            $order->quantity = $request->input('quantity');
            $order->status = $request->input('status');
            $order->created_at = null;
            $order->updated_at = now();
    
            // Guardar el modelo en la base de datos
            $order->save();
    
            return redirect()->route('warehouse.index')->with('success', 'Pedido creado exitosamente');
        } catch (\Exception $e) {
            // Capturar la excepción y mostrar un mensaje de error
            return redirect()->back()->with('error', 'Error al crear el pedido: ' . $e->getMessage());
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
