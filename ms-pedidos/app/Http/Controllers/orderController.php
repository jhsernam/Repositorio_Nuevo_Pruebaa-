<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->email = $request->email;
        $order->address = $request->address;
        $order->save();
        return $order;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);
        if ($order == null) {
            return response(['message' => 'Order not found'], 404);
        }
        return Order::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        if ($order == null) {
            return response(['message' => 'Order not found'], 404);
        }
        //print_r($request);
        $order->email = $request->email;
        $order->address = $request->address;
        $order->save();
        return $order;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        if ($order == null) {
            return response(['message' => 'Order not found'], 404);
        }
        $order->delete();
        return response(['message' => 'Order deleted'], 200);
    }
}
