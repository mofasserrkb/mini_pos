<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function store(Request $request)
    {
        //
    //    dd($request);
        $request->validate(
                [
                    'customer_name'=>'required',
                    'address'=>'required',
                    'phone_number'=>'required',

                ]
        );


       $customer= Customer::create(
     [
                    'customer_name'=>$request->input('customer_name'),
                    'address'=>$request->input('address'),
                    'phone_number'=>$request->input('phone_number'),

     ]
       );

    return redirect()->back();

    }

}
