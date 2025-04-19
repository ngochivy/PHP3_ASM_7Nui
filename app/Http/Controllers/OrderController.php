<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::all();
        // dd($order);
        // if($order->isEmpty()){
        //     return view('client.home');
        // }
        return view('client.order.index',['order' => $order]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // echo $id
        $order_detail = OrderDetail::orderDetailInnerJoinProductAndOrder($id);
        // dd($order_detail);
        return view('client.order.detail',['order_detail'=>$order_detail]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        // dd($order);
            if(($order) && ($order->status == "Tạm giữ" || $order->status == "Chờ duyệt")){
                $order->orderDetail()->delete();

                $order->delete();

                return redirect()->route('order.index')->with('success','Xóa đơn hàng thành công');
            }

            return redirect()->route('order.index')->with('error', 'Xóa đơn hàng thất bại');

        // $order_detail->delete();

        
    }
}
