
        @extends('admin.master')
        @section('content')
          <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <form action="{{route('orders.store')}}" method="POST">
                @csrf
            <div class="col-sm-12  col-lg-12">

                    <h4>Point of Sale</h4>
                    <div class="table-responsive">
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
                              @php
                                  $tran=uniqid();
                              @endphp

                                <input type="hidden" id="tranid" name="tranid" value="{{$tran }}"/>

                              <td>

                             <select name="product_id[]" id="product_id" class="form-control product_id">
                               <option value="">Select Item</option>
                                @foreach ($data as $key=>$product )
                                    <option stock="{{ $product->quantity}}" data-price="{{ $product->sales_price }}" value="{{$product->id}}"> {{$product->name}} {{ $product->sales_price }}  </option>
                                @endforeach
                            </select>

                              </td>
                              <td>
                                    <input type="number" name="pquantity[]" id="pquantity" class="form-control quantity" value="1" >

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
                    </div>
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
                    </ul>
              </div>
               </div>
               <button type="submit" id="btnSubmit" class="btn btn-primary pull-right">Get Invoice</button>



            </div>
         <!--   <div class="col-sm-12 col-lg-8 "> -->



            </form>

        <!--    </div> -->
         </div>
      </div>
   <!--   </div>
    </div>
    -->
    <!--modal -->
    <form id="formcusto" action="{{ route('customer.store') }}" method="post">
        @csrf
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <!-- Add this div to show success message -->
            <div id="success-message" style="display:none; color:green;"></div>
            <div id="errors-message" style="display:none; color:red;"></div>

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
                 <button type="submit" id="submitform" class="btn btn-primary">Add</button>
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
    @endsection
