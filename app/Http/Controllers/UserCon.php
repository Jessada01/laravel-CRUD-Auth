<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use DB;

class UserCon extends Controller
{
    public function bill(Request $requst)
    {
       
         $bill = $requst->billno;
        $counts = DB::table('order_details')->count('id') ;
        $orders =  DB::table('order_details')->where('id', $bill)->get();
        
         return view('bill',['order_details' => $orders] , compact ('counts'));


    }
}
