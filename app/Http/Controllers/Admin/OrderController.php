<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index(){
        $orders = DB::select('select * from orders');
        //  return view('admin/orders',['orders'=>$orders]);
        $user_type = auth()->user()->type;
        if($user_type == 1 || $user_type == 2){
            return view('admin/orders',['orders'=>$orders]);
        }else
        $user_order = DB::select('select * from orders where user_name = "user" ');
        return view('admin/orders',['orders'=>$user_order]);

        
}
}
