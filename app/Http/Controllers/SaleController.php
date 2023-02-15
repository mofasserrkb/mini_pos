<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    //

    public function  getOrder(Request $request){

         //  dd($request);
         // dd($request->total_purchaseAmount);

        $request->validate(
            [
                'customer_id'=>'required',
            ],
            [
                'customer_id.required'=>'Select A Customer First!',
            ]
    );
        $allproduct= Product::all();
      $va=  Product::select("id")->latest()->get();

           //     dd($va);
      // dd(count($allproduct));
      //  dd($allproduct[0]->id);
        $products = Product::join('sales', 'products.id', '=', 'sales.product_id')
        ->get(['products.id','products.quantity', 'sales.pquantity','sales.current_stock','sales.stock','sales.product_id']);


         // dd(count($request->product_id));
        // dd($products[1]->current_stock);
        $count=count($products);




        for ($i = 0; $i < count($request->product_id); $i++) {



            Sale::create(
                [
                    'tran_id'=>$request->tranid,
                    'product_id'=>$request->product_id[$i],
                    'pquantity'=>$request->pquantity[$i],
                    'current_stock'=>$request->stock[$i] - $request->pquantity[$i],

                    'price'=>$request->price[$i],
                    'stock'=>$request->stock[$i],
                    'total_amount'=>$request->total_amount[$i],
                    'customer_id'=>$request->customer_id,

                ]);

               $results = DB::Table('sales')->select('current_stock')->where('product_id',$request->product_id[$i])->get();
            //    dd(count($results));
                  $sid=count($results);
                  for($j=0;$j<$sid;$j++)
                  {
                     //  $results[$j]->current_stock;
                    Product::where('id', $request->product_id[$i])->update(array('quantity' => $results[$j]->current_stock));
                  }

            //   $finalvalue=    $results[$sid]->current_stock;
            //   dd($finalvalue);



        }
        //syntax: $data = \App\Models\Product::select("name")->where("id", "=", 2)->get();
        // dd($data);

        $customerRecord = Customer::where('id', '=', $request->customer_id)->get();
         $name=$customerRecord[0]->customer_name;
         $address=$customerRecord[0]->address;
         $phone=$customerRecord[0]->phone_number;
       // dd($customerRecord[0]->customer_name);

       $total_purchaseAmount =$request->total_purchaseAmount;
       $trans = Sale::where('tran_id',$request->tranid )->get();
      // dd($trans);
        $latest = Sale::where('customer_id',$request->customer_id )->latest()->get();
        $countno= count($latest );
        $trancount= count($trans);
         //  dd($latest);
        // dd($latest[0]->price);
        return view('admin.invoice',compact('latest','total_purchaseAmount','address','phone','name','trans'));
    }

}
