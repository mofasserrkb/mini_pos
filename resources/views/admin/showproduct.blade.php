
@extends('admin.master')
@section('content')
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
                        <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name *</label>
                                        <input type="text" name="name" class="form-control" value="{{$product->name}}" placeholder="Enter Name" >

                                    </div>
                                    @error('name')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Purchase Price *</label>
                                        <input type="text" name="purchase_price" value="{{$product->purchase_price}}" class="form-control" placeholder="Enter Cost" >

                                    </div>
                                    @error('purchase_price')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sales Price *</label>
                                        <input type="text" name="sales_price" value="{{$product->sales_price}}" class="form-control" placeholder="Enter Price">

                                    </div>
                                    @error('sales_price')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Quantity *</label>
                                        <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control" placeholder="Enter Quantity">

                                    </div>
                                    @error('quantity')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image"  class="form-control image-file" name="pic" accept="image/*">
                                        <img src="{{asset('images/'. $product->image.'')}}" width="300px">

                                    </div>
                                    @error('image')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description / Product Details</label>
                                        <textarea name="description" class="form-control" rows="4">{{$product->description}}</textarea>

                                    </div>
                                    @error('description')
                                     <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>
      @endsection
