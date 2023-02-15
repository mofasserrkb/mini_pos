<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products= Product::all();
      // dd($products);
        return view('admin.allproduct',compact('products'));
    }

    public function addProduct()
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


    // return redirect()->back()->with('message', 'Product added successfully!');
    return redirect()->route('allproduct')
    ->with('success','Product added successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product )
    {
        //
       // dd($product);
       return view('admin.showproduct',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        dd($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      //  dd($product);
        //
        $newImageName='';
        $request->validate(
            [
                'name'=>'required',
                'description'=>'required',
                'quantity'=>'required',
                'purchase_price'=>'required',
                'sales_price'=>'required',

            ]
    );
    if ($request->hasFile('image')) {
          //Get Image Path from Folder

      $path=    'images/'.$product->image;
           // dd($path);
          //  dd(File::exists($path));
            if(File::exists($path))
            {
                File::delete($path);
            }

        $newImageName= time().'-'. $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'),$newImageName);

      } else {
        $newImageName = $product->image;
      }
      $product->update(
        [
                       'name'=>$request->name,
                       'description'=>$request->description,
                       'quantity'=>$request->quantity,
                       'purchase_price'=>$request->purchase_price,
                       'sales_price'=>$request->sales_price,
                       'image'=>$newImageName
        ]
          );

          return redirect()->route('allproduct')
                        ->with('success','Product updated successfully');

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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        //dd($product);
        $path=    'images/'.$product->image;
        // dd($path);
       //  dd(File::exists($path));
         if(File::exists($path))
         {
             File::delete($path);
         }
         $product->delete();
         return redirect()->route('allproduct')
         ->with('success','Product deleted successfully');
    }
    public function getReport()
    {
        $productData = Product::with(['sales'])->get();
       // dd($productData);
    $price=   Sale::sum('total_amount');
       return view('admin.report',compact('productData','price'));
    }
    public function admin()
    {
        $productData = Product::with(['sales'])->get();
        $price=   Sale::sum('total_amount');
        return view('admin.dashboard',compact('productData','price'));
    }

}
