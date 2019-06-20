<?php

namespace App\Http\Controllers;
use Braintree\ClientToken
use App\Http\Requests; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class OrdersController extends HomeController
{
    //
    var $order;

    public function complete(Request $request){
    	

      
        $order->user_id = $request->user_id;
        $order->save();
            
    	return view('/complete',array('order'=$this->order));
    }

    
}
