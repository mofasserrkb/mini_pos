<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate(
                [
                    'name'=>'required',
                    'description'=>'required',
                    'quantity'=>'required',
                    'purchase_price'=>'required',
                    'sales_price'=>'required',
                    'image'=>'required|mimes:jpg,png,jpeg'
                ]
        );
       $newImageName= time().'-'. $request->name . '.' . $request->image->extension();
       //dd($newImageName);
       $request->image->move(public_path('images'),$newImageName);

       $product= Product::create(
     [
                    'name'=>$request->input('name'),
                    'description'=>$request->input('description'),
                    'quantity'=>$request->input('quantity'),
                    'purchase_price'=>$request->input('purchase_price'),
                    'sales_price'=>$request->input('sales_price'),
                    'image'=>$newImageName
     ]
       );

    //    return redirect('/dashboard')->with('message','Product added successfully');
    return redirect()->back()->with('message', 'Product added successfully!');
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
        //
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
        //
    }

    public function getProductCustomer()
    {
    $data=    Product::all();
    $customer= Customer::all();
   // dd($customer);
   //dd($data[0]['name']);
    return view('admin.sale',compact('data','customer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function cashier()
    {
        return view('cashier.dashboard');
    }
}
