
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Mini Sales</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/backend.css?v=1.0.0')}}">
      <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/vendor/remixicon/fonts/remixicon.css')}}">  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
       <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="../backend/index.html" class="header-logo">
                    <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"><h5 class="logo-title light-logo ml-3">POSDash</h5>
                </a>
                <div class="iq-menu-bt-sidebar ml-0">
                    <i class="las la-bars wrapper-menu"></i>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="">
                            <a href="#" class="svg-icon">
                                <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span class="ml-4">Dashboards</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span class="ml-4">Products</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                                <li class="">
                                    <a href="{{route('addproduct')}}">
                                        <i class="las la-minus"></i><span>Add Product</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=" ">
                            <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash4" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                </svg>
                                <span class="ml-4">Sale</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="sale" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                    <li class="">
                                            <a href="{{route('saleproducts')}}">
                                                <i class="las la-minus"></i><span>Product Sale</span>
                                            </a>
                                    </li>

                            </ul>
                        </li>




                    </ul>
                </nav>
                <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                    <div class="card border-none">
                        <div class="card-body p-0">
                            <div class="sidebarbottom-content">
                                <div class="image"><img src="../assets/images/layouts/side-bkg.png" class="img-fluid" alt="side-bkg"></div>
                                <h6 class="mt-4 px-4 body-title">Get More Feature by Upgrading</h6>
                                <button type="button" class="btn sidebar-bottom-btn mt-4">Go Premium</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3"></div>
            </div>
            </div>
    @include('admin.navbar');

         <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Product</h4>
                            @if(session()->has('message'))
                             <div class="alert alert-success">
                             {{ session()->get('message') }}
                                 </div>
                             @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            {{-- <form action="page-list-product.html" data-toggle="validator"> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name *</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" >

                                    </div>
                                    @error('name')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Purchase Price *</label>
                                        <input type="text" name="purchase_price" class="form-control" placeholder="Enter Cost" >

                                    </div>
                                    @error('purchase_price')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sales Price *</label>
                                        <input type="text" name="sales_price" class="form-control" placeholder="Enter Price">

                                    </div>
                                    @error('sales_price')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Quantity *</label>
                                        <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity">

                                    </div>
                                    @error('quantity')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control image-file" name="pic" accept="image/*">
                                    </div>
                                    @error('image')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description / Product Details</label>
                                        <textarea name="description" class="form-control" rows="4"></textarea>
                                    </div>
                                    @error('description')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            {{-- <button type="submit" class="btn btn-primary mr-2">Add Product</button> --}}
                            <button type="submit" class="btn btn-primary">Add Product</button>
                            {{-- <button type="reset" class="btn btn-danger">Reset</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">POS Dash</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('assets/js/backend-bundle.min.js')}}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{asset('assets/js/table-treeview.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{asset('assets/js/customizer.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{asset('assets/js/chart-custom.js')}}"></script>

    <!-- app JavaScript -->
    <script src="{{asset('assets/js/app.js')}}"></script>
  </body>
</html>
