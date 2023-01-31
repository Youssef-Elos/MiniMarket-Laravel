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
    return view('admin/orders',['orders'=>$orders]);
        
}
}
