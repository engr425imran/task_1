<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return $orders;
        // return response()->json($orders);
        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "dsd";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $order = new Order();
       
        $order->user_id = $request->input('user_id');
        $order->order_name = $request->input('order_name');
        $order->user_name = $request->input('user_name');
        $order->price = $request->input('price');
        $order->address = $request->input('address');
        $order->save();
        return response($signal = 'order created sucssefully');
        
    }
        
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Order::find($id);

        return $edit;
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order_updated = Order::find($id);

        $order_updated->user_id = $request->input('user_id');
       
        // $order_updated->user_id = 1;
       

        $order_updated->price = $request->input('price');

        $order_updated->user_name = $request->input('user_name'); 
        $order_updated->address = $request->input('address'); 
        $order_updated->order_name = $request->input('order_name');
        
        $order_updated->save();

        return response()->json('order updated sucssesfully');


        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order_delete = Order::find($id);

        $order_delete->delete();
        return "you have sucssefully deleted user";
    }
}
