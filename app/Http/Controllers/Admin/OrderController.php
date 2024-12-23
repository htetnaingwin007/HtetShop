<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orders(){
        $orders = Order::all();// order အားလုံးယူ
        // var_dump($orders);
        $voucher_group = $orders->groupBy('voucher_no')->toArray(); //voucher no တူတာတွေကို Group ဖွဲ့ပြီး Array ပြောင်း
        // var_dump($voucher_group);

        foreach($voucher_group as $voucher){
            $orders_id = array_column($voucher, 'id');
            //array ထဲမှာရှိတဲ့ order id တွေကိုယူ
            // var_dump($orders_id);

            $order_data[] = Order::whereIn('id',$orders_id)->where('status','Pending')->first();//voucher no တူတဲ့ item တွေထဲက ပထမဆုံး id တစ်ခုရဲ့ data တွေဆွဲထုတ်ပြီး array ထဲထည့်
        }
        // dd($order_data);
        return view('admin.orders.index',compact('order_data'));

    }

    public function orderAccept(){
        // $orders = Order::all();
        
        // $voucher_group = $orders->groupBy('voucher_no')->toArray();
        // foreach($voucher_group as $voucher){
        //     $orders_id = array_column($voucher, 'id');

        //     $order_data[] = Order::whereIn('id',$orders_id)->where('status','')->first();
        // }
        // return view('admin.orders.index',compact('order_data'));
    }

    public function orderComplete(){

    }
}
