<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use App\Models\User;
use App\Models\UserAddress;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return auth()->user()->orders;
    }


    public function store(StoreOrderRequest $request)
    {
        $product = Product::query()->limit(2)->get();
        $address = UserAddress::find($request->address_id);
//        dd($product);
        $sum = 0;
        auth()->user()->orders()->create([
            'comment'=>$request->comment,
            'delivery_method_id'=>$request->delivery_method_id,
            'payment_type_id'=>$request->payment_type_id,
            'address'=>$address,
            'sum'=>$sum,
            'product'=>$product,
        ]);
        return 'success';
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return new OrderResource($order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
