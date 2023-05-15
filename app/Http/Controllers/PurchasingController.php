<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;

class PurchasingController extends Controller
{
    public function todo(Request $request){
        $page_title = 'You are in the purchasing department';       
         $requests=Requests::all();

        return view('purchasing.index',compact('page_title','requests'));
    }


    public function editt()
    {
        $page_title = 'Edit Status';
        $requests = Requests::all();
    
        return view('purchasing.edit', compact('page_title', 'requests'));
    }

    public function actualizarEstado(Request $request)
    {
        $id = $request->input('id');
        $order = Requests::find($id);

        $order->status = $request->input('status');

        $order->save();

        return redirect()->back()->with('success', 'Pedido actualizado exitosamente');
    }

}