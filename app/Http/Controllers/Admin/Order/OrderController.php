<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        return view("backend/orders/order");
    }
    public function detail(){
        return view("backend/orders/detailorder");
    }
    public function delete(){
        return "del";
    }
}
