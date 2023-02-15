
@extends('admin.master')
@section('content')
         <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">All Product</h4>
                            @if(session()->has('success'))
                             <div class="alert alert-success">
                             {{ session()->get('success') }}
                                 </div>
                             @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Purchase Price</th>
                                <th scope="col">Quantity </th>
                                <th scope="col">Sales Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Product Details</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                             @php
                                 $i=0;
                             @endphp
                                @foreach ($products as $product )

                              <tr>
                                <th scope="row">{{++$i}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->purchase_price}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->sales_price}}</td>
                                <td> <img src="{{asset('images/'.$product->image.'')}}" alt="sorry" width="50px" height="50px">  </td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <form action="{{route('products.delete',$product->id)}}" method="POST">



                                        <a class="btn btn-primary" href="{{route('show',$product->id)}}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>


                                </td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>
      @endsection
