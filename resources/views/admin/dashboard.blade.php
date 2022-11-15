
@extends('admin.master')
@section('content')
<div class="content-page">
    <div class="container-fluid">
       <div class="row">
           <div class="col-lg-4">
               <div class="card card-transparent card-block card-stretch card-height border-none">
                   <div class="card-body p-0 mt-lg-2 mt-0">
                       <h3 class="mb-3">Mini sales System</h3>
                       <p class="mb-0 mr-4">Your dashboard gives you views of key performance or business process.</p>
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
                                       <img src="../assets/images/product/1.png" class="img-fluid" alt="image">
                                   </div>
                                   <div>

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
                                       <img src="../assets/images/product/2.png" class="img-fluid" alt="image">
                                   </div>
                                   <div>

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
           </di
@endsection
