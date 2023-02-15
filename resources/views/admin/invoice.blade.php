@extends('admin.master')
@section('content')
<!----- invoice blade ------>
<div class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="card card-block card-stretch card-height print rounded">
                <div class="card-header d-flex justify-content-between bg-primary header-invoice">
                      <div class="iq-header-title">
                         <h4 class="card-title mb-0">Invoice</h4>
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
                         <div class="col-lg-12">
                            <div class="table-responsive-sm">
                                  <table class="table">
                                     <thead>
                                        <tr>
                                              <th scope="col">Order Date</th>
                                              <th scope="col">Order Status</th>
                                              <th scope="col">Customer Name</th>
                                              <th scope="col">Phone Number</th>
                                              <th scope="col">Address</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        <tr>
                                              <td>{{date('d/m/y')}}</td>
                                              <td><span class="badge badge-danger">paid</span></td>
                                              <td>{{$name}}</td>
                                              <td>
                                                 <p class="mb-0">

                                                    {{$phone}}
                                                 </p>
                                              </td>
                                              <td>
                                                 <p class="mb-0">
                                                    {{$address}}
                                                 </p>
                                              </td>
                                        </tr>
                                     </tbody>
                                  </table>
                            </div>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-sm-12">
                            <h5 class="mb-3">Order Summary</h5>
                            <div class="table-responsive-sm">
                                  <table class="table">
                                     <thead>
                                        <tr>
                                              <th class="text-center" scope="col">#</th>
                                              <th scope="col">Transaction Id</th>
                                              <th scope="col">Item ID</th>
                                              <th scope="col">Product Name</th>
                                              <th scope="col">Product Quantity</th>
                                              <th class="text-center" scope="col">Unit Price</th>
                                              <th class="text-center" scope="col">Price</th>

                                        </tr>
                                     </thead>
                                     <tbody>

                                                @foreach ($trans as $key=>$value )


                                        <tr>
                                              <th class="text-center" scope="row">{{++$key}}</th>
                                              <th class="text-center" scope="row">{{$value->tran_id}}</th>
                                              <td>
                                                 <h6 class="mb-0">{{$value->product_id}}</h6>
                                            @php
                                               $data = \App\Models\Product::select("name")->where("id", "=", $value->product_id)->get();


                                            @endphp
                                              </td>
                                              <td class="text-center">{{ $data[0]->name }}</td>
                                              <td class="text-center">{{$value->pquantity}}</td>
                                              <td class="text-center">{{$value->price}}</td>
                                              <td class="text-center">{{$value->total_amount}}</td>

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
                                     <h6>Total</h6>
                                     <h3 class="text-primary font-weight-700">{{$total_purchaseAmount}}</h3>
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
<!--- invoice blade -->
 @endsection
