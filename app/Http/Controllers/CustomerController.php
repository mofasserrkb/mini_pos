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
      //  dd($request->all());
     // dd($request);

     $validatedData= $request->validate([
        'customer_name' => 'required|max:255',
        'address' => 'required',
        'phone_number' => 'required|numeric',
    ]);


     //  $customers= Customer::create(
    // [
    //                'customer_name'=>$request->input('customer_name'),
    //                'address'=>$request->input('address'),
    //                'phone_number'=>$request->input('phone_number'),

   //  ]
   //    );
   $customers= Customer::create($validatedData);

       return response()->json($customers);
    //   return redirect()->back();
    // return redirect()->back()->with('success', 'Customer Created Successfully')->with('customer', $customers);
    // if($customers)
    // {
    //     return response()->json(['code'=>200,'msgs'=>'Customer Created Successfully']);
    // }

    }

}
