
        @extends('admin.master')
        @section('content')
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
   <!--   </div>
    </div>
    -->
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
    @endsection
 {{--   <!-- After footer section -->

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
--}}
