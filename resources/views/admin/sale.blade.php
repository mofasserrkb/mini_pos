

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>POS </title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/backend.css?v=1.0.0')}}">
      <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/vendor/remixicon/fonts/remixicon.css')}}">  </head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                            <a href="../backend/index.html" class="svg-icon">
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
            </div>      <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="../backend/index.html" class="header-logo">
                            <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                            <h5 class="logo-title ml-3">POSDash</h5>

                        </a>
                    </div>
                    <div class="iq-search-bar device-search">
                        <form action="#" class="searchbox">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            <input type="text" class="text search-input" placeholder="Search here...">
                        </form>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle btn border add-btn"
                                        id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <img src="../assets/images/small/flag-01.png" alt="img-flag"
                                            class="img-fluid image-flag mr-2">En
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-3">
                                                <a class="iq-sub-card" href="#"><img
                                                        src="../assets/images/small/flag-02.png" alt="img-flag"
                                                        class="img-fluid mr-2">French</a>
                                                <a class="iq-sub-card" href="#"><img
                                                        src="../assets/images/small/flag-03.png" alt="img-flag"
                                                        class="img-fluid mr-2">Spanish</a>
                                                <a class="iq-sub-card" href="#"><img
                                                        src="../assets/images/small/flag-04.png" alt="img-flag"
                                                        class="img-fluid mr-2">Italian</a>
                                                <a class="iq-sub-card" href="#"><img
                                                        src="../assets/images/small/flag-05.png" alt="img-flag"
                                                        class="img-fluid mr-2">German</a>
                                                <a class="iq-sub-card" href="#"><img
                                                        src="../assets/images/small/flag-06.png" alt="img-flag"
                                                        class="img-fluid mr-2">Japanese</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="btn border add-btn shadow-none mx-2 d-none d-md-block"
                                        data-toggle="modal" data-target="#new-order"><i class="las la-plus mr-2"></i>New
                                        Order</a>
                                </li>
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="text search-input font-size-12"
                                                    placeholder="type here to search...">
                                                <a href="#" class="search-link"><i class="las la-search"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-mail">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="bg-primary"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="cust-title p-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5 class="mb-0">All Messages</h5>
                                                        <a class="badge badge-primary badge-card" href="#">3</a>
                                                    </div>
                                                </div>
                                                <div class="px-3 pt-0 pb-0 sub-card">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/01.jpg" alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Emma Watson</h6>
                                                                    <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/02.jpg" alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Ashlynn Franci</h6>
                                                                    <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/03.jpg" alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Kianna Carder</h6>
                                                                    <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#"
                                                    role="button">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-bell">
                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                        </svg>
                                        <span class="bg-primary "></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="cust-title p-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5 class="mb-0">Notifications</h5>
                                                        <a class="badge badge-primary badge-card" href="#">3</a>
                                                    </div>
                                                </div>
                                                <div class="px-3 pt-0 pb-0 sub-card">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/01.jpg" alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Emma Watson</h6>
                                                                    <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/02.jpg" alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Ashlynn Franci</h6>
                                                                    <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/03.jpg" alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Kianna Carder</h6>
                                                                    <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#"
                                                    role="button">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown caption-content">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../assets/images/user/1.png" class="img-fluid rounded" alt="user">
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 text-center">
                                                <div class="media-body profile-detail text-center">
                                                    <img src="../assets/images/page-img/profile-bg.jpg" alt="profile-bg"
                                                        class="rounded-top img-fluid mb-4">
                                                    <img src="../assets/images/user/1.png" alt="profile-img"
                                                        class="rounded profile-img img-fluid avatar-70">
                                                </div>
                                                <div class="p-3">

                                                    <div class="d-flex align-items-center justify-content-center mt-3">

                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn border">Sign Out</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                          @csrf
                                                      </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
          <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <form action="{{route('orders.store')}}" method="POST">
                @csrf
            <div class="col-sm-12 col-lg-12">

                    <h4>Point of Sale</h4>
                     <table class="table">
                        <thead>
                           <tr class="ligth">
                              <th scope="col">#</th>
                              <th scope="col">Product Name</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Product Price</th>
                              <th scope="col">Stock Quantity</th>
                              <th scope="col">Total Price</th>
                              <th scope="col"> <a href="#" class="btn btn-sm btn-success add_more"><i class="fa fa-plus"></i></a> </th>
                           </tr>
                        </thead>

                        <tbody class="addMoreProduct">
                           <tr>
                              <th scope="row">1</th>
                              <td>

                             <select name="product_id[]" id="product_id" class="form-control product_id">
                               <option value="">Select Item</option>
                                @foreach ($data as $key=>$product )
                                    <option stock="{{ $product->quantity}}" data-price="{{ $product->sales_price }}" value="{{$product->id}}"> {{$product->name}} {{ $product->sales_price }}  </option>
                                @endforeach
                            </select>

                              </td>
                              <td>
                                    <input type="number" name="pquantity[]" id="pquantity" class="form-control quantity" >

                              </td>
                              <td>
                                <input type="text" name="price[]" id="price" class="form-control price" >
                              </td>
                              <td>
                                <input type="text" name="stock[]" id="stock" class="form-control stock"  >
                              </td>
                              <td>
                                <input type="number" name="total_amount[]" id="total_amount" class="form-control total_amount">
                              </td>
                              <td>
                                <a href="#" class="btn btn-sm btn-danger "><i class="fa fa-times"></i></a>
                              </td>
                           </tr>

                        </tbody>
                     </table>
                <!--  </div> -->
                <div class="card-body">
                    <ul class="row align-items-center list-inline p-0 mb-0">
                       <li class="col-lg-12 col-md-12 col-sm-12">
                          <div class="p-3 border text-center rounded">
                             <h3>Total Amount: </h3>
                             <h3 class="mb-4 display-6  total ">BDT:0.00</h3>
                             <input type="hidden" id="totals" name="total_purchaseAmount" value="">
                             <ul class="list-unstyled mb-0">

                               <h4>Customer <a href="#" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target=".bd-example-modal-lg">Add new</a>
                               </h4>
                               @error('customer_id')
                                     <p style="color: red">{{$message}}</p>
                                @enderror
                               <select name="customer_id" class="form-control " id="myselect">
                                <option disabled="" selected="">Select Customer</option>

                                @foreach ($customer as $value)
                                <option value="{{$value->id}}" datavalue="{{$value->customer_name}}" datavalue1="{{$value->address}}" datavalue2="{{$value->phone_number}}" >{{$value->customer_name}}</option>
                                @endforeach

                               </select>
                             </ul>

                        </div>
                        </li>
              </div>
               </div>
               <button type="submit" class="btn btn-primary pull-right">Get Invoice</button>



            </div>
         <!--   <div class="col-sm-12 col-lg-8 "> -->



            </form>

        <!--    </div> -->
         </div>
      </div>
      </div>
    </div>
    <!--modal -->
    <form action="{{route('customer.store')}}" method="POST">
        @csrf
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title">Add Customer</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
              </div>
              <div class="modal-body">
                <label>Customer Name</label>
                 <input type="text" name="customer_name"  class="form-control">
                 <label>Customer  Address</label>
                 <input type="text" name="address" class="form-control">
                 <label>Customer Phone Number</label>
                 <input type="number" name="phone_number" class="form-control">
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Add</button>
              </div>
           </div>
        </div>
     </div>
    </form>
    <!--modal end -->
    <!-- select -->
      <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Customer Info</h4>
        </div>
        <div class="modal-body">
            <div>
                <h4>Customer Name:</h4>
                <p id="id1"> </p>
                <h4>Customer Address:</h4>
                <p id="id2"> </p>
                <h4>Customer Phone:</h4>
                <p id="id3"> </p>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
    <!-- select end -->
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
    <script>

$('.add_more').on('click',function(){
    var product = $('.product_id').html();
    var numberofrow = ($('.addMoreProduct tr').length -0)+1;
    var tr = '<tr> <td class="no">'+ numberofrow + '</td>'+
        '<td> <select class="form-control product_id" name="product_id[]" > '
            + product + '</select> </td>'+
        '<td> <input type="number" name="pquantity[]" class="form-control quantity"> </td> '+
        '<td> <input type="text" name="price[]" class="form-control price"> </td> '+
        '<td>  <input type="text" name="stock[]" id="stock" class="form-control stock" > </td>'+
        '<td> <input type="number" name="total_amount[]" class="form-control total_amount"> </td> '+
        '<td> <a class="btn btn-sm btn-danger delete"> <i class="fa fa-times"></i>   </a> </td>';
        $('.addMoreProduct').append(tr);
       });
$('.addMoreProduct').delegate('.delete','click',function(){
    $(this).parent().parent().remove();
});

  function TotalAmount(){
    var total = 0;
    $('.total_amount').each(function(i,e){
        var amount = $(this).val() - 0;
        total += amount;
    });
    $('.total').html(total);
    $('#totals').val(total);
  }

   $('.addMoreProduct').delegate('.product_id','change',function(){
     var tr = $(this).parent().parent();
     var price = tr.find('.product_id option:selected').attr('data-price');
     var stock = tr.find('.product_id option:selected').attr('stock');
     var stockinfo= tr.find('.stock').val(stock);
     tr.find('.price').val(price);
     var qty = tr.find('.quantity').val() -0;
     var price = tr.find('.price').val() -0;
     var total_amount = (qty * price);
     tr.find('.total_amount').val(total_amount);

     TotalAmount();


   });

   $('.addMoreProduct').delegate('.quantity','keyup',function(){
     var tr = $(this).parent().parent();
     var stock = tr.find('.product_id option:selected').attr('stock');
     var qty = tr.find('.quantity').val() -0;
     var price = tr.find('.price').val() -0;
     var total_amount = (qty * price);
     tr.find('.total_amount').val(total_amount);

     TotalAmount();

   });
   $(document).ready(function(){
    $('#myselect').change(function() {
        var opval = $(this).val();
     //   var opvalattr=$(this).attr("datavalue");
      //  $('#id1').val(opvalattr );
      var option = $('option:selected', this).attr('datavalue');
      var option1 = $('option:selected', this).attr('datavalue1');
      var option2 = $('option:selected', this).attr('datavalue2');
      $('#id1').text(option );
      $('#id2').text(option1 );
      $('#id3').text(option2 );

            $('#myModal').modal("show");

    });
});
    </script>
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
