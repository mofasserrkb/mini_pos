
@extends('admin.master')
@section('content')
<div class="content-page">
    <div class="container-fluid">
       <div class="row">
           <div class="col-lg-4">
               <div class="card card-transparent card-block card-stretch card-height border-none">
                   <div class="card-body p-0 mt-lg-2 mt-0">
                       <h3 class="mb-3">Mini POS System</h3>
                       <p class="mb-0 mr-4">Your dashboard gives you views of products stock and sales information</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-8">
               <div class="row">
                   <div class="col-lg-4 col-md-4">
                       <div class="card card-block card-stretch card-height">
                           <div class="card-body">
                               <div class="d-flex align-items-center mb-4 card-total-sale">
                                   <div class="icon iq-icon-box-2 bg-info-light">
                                       <img src="{{asset('assets/images/product/1.png')}}" class="img-fluid" alt="image">
                                   </div>

                                   <div>
                                    <strong>Total Sale Price(TK):</strong>
                                    <h5>{{$price}}</h5>
                                   </div>
                               </div>
                               <div class="iq-progress-bar mt-2">
                                   <span class="bg-info iq-progress progress-1" data-percent="85">

                                   </span>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4">
                       <div class="card card-block card-stretch card-height">
                           <div class="card-body">
                               <div class="d-flex align-items-center mb-4 card-total-sale">
                                   <div class="icon iq-icon-box-2 bg-danger-light">
                                       <img src="{{asset('assets/images/product/2.png')}}" class="img-fluid" alt="image">
                                   </div>
                                   <div>
                                    @php
                                    $totalsale=0;


                                 foreach ($productData as $value )
                                 {
                                 $totalsale +=($value->sales_price * $value->quantity);
                                 }
                                 @endphp

                                 <strong>Total Stock Price(TK):</strong>
                                    <h5>{{$totalsale}}</h5>
                                   </div>
                               </div>
                               <div class="iq-progress-bar mt-2">
                                   <span class="bg-danger iq-progress progress-1" data-percent="70">
                                   </span>
                               </div>
                           </div>
                       </div>
                    </div>
               </div>
            </div>
@endsection
