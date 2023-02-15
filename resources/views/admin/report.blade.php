@extends('admin.master')
@section('content')
<!----- report blade ------>
<div class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="card card-block card-stretch card-height print rounded">
                <div class="card-header d-flex justify-content-between bg-primary header-invoice">
                      <div class="iq-header-title">
                         <h4 class="card-title mb-0">Report</h4>
                      </div>
                      <div class="invoice-btn">
                         <button type="button" onclick="window.print()" class="btn btn-primary-dark mr-2"><i class="las la-print"></i> Print
                            </button>

                      </div>
                </div>
                <div class="card-body">
                      <div class="row">

                      </div>
                      <div class="row">
                         <div class="col-sm-12">
                            <h5 class="mb-3">Date:{{date('d/m/y')}} </h5>
                            <h5 class="mb-3">Report Summary</h5>
                            <div class="table-responsive-sm">
                                  <table class="table">
                                     <thead>
                                        <tr>
                                              <th class="text-center" scope="col">#</th>
                                              <th scope="col">Product Name</th>
                                              <th scope="col">Stock Quantity(pc)</th>
                                              <th scope="col">Unit Price(tk)</th>
                                              <th scope="col">Total Sale Quantity(pc)</th>
                                              <th class="text-center" scope="col">Total Sale Price(tk)</th>
                                              <th scope="col"> Stock Price(tk)</th>


                                        </tr>
                                     </thead>
                                     <tbody>
                                                @php

                                                    $no =1;
                                                    $totalsale=0;
                                                @endphp
                                                @foreach ($productData as $value )


                                        <tr>
                                              <th class="text-center" scope="row">{{$no++}}</th>
                                              <th class="text-center" scope="row">{{$value->name}}</th>
                                              <td>
                                                 <h6 class="mb-0">{{$value->quantity}}</h6>

                                              </td>
                                              <td class="text-center">{{$value->sales_price}}</td>
                                               @php
                                                 $sum=0;
                                                 $totalsale +=($value->sales_price * $value->quantity);
                                                // $trarray= array();

                                               foreach ($value->sales as $sale )
                                                   {
                                                      $sum += $sale->pquantity;
                                                      //array_push($trarray,$sale->tran_id);
                                                   }

                                               @endphp
                                              <td class="text-center">{{$sum}}</td>
                                              <td class="text-center">{{$sum*$value->sales_price}}</td>
                                              <td class="text-center">
                                                {{$value->sales_price * $value->quantity}}
                                              </td>



                                        </tr>
                                        @endforeach


                                     </tbody>
                                  </table>
                            </div>
                         </div>
                      </div>
                      <div class="row">

                      </div>
                      <div class="row mt-4 mb-3">
                         <div class="offset-lg-8 col-lg-4">
                            <div class="or-detail rounded">

                                  <div class="ttl-amt py-2 px-3 d-flex justify-content-between align-items-center">
                                     <h6>Total Sale Price</h6>
                                     <h3 class="text-primary font-weight-700">{{$price}}</h3>
                                  </div>
                                  <div class="ttl-amt py-2 px-3 d-flex justify-content-between align-items-center">
                                    <h6>Total Stock Price</h6>
                                    <h3 class="text-primary font-weight-700">{{$totalsale}}</h3>
                                 </div>
                            </div>
                         </div>
                      </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
<!--- report blade -->
 @endsection
