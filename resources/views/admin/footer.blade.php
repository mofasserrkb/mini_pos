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

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });




    $('.add_more').on('click',function(){
        var product = $('.product_id').html();
        var numberofrow = ($('.addMoreProduct tr').length -0)+1;
        var tr = '<tr> <td class="no">'+ numberofrow + '</td>'+
            '<td> <select class="form-control product_id" name="product_id[]" > '
                + product + '</select> </td>'+
            '<td> <input type="number" name="pquantity[]" class="form-control quantity" value="1"> </td> '+
            '<td> <input type="text" name="price[]" class="form-control price"> </td> '+
            '<td>  <input type="text" name="stock[]" id="stock" class="form-control stock" > </td>'+
            '<td> <input type="number" name="total_amount[]" class="form-control total_amount"> </td> '+
            '<td> <a class="btn btn-sm btn-danger delete"> <i class="fa fa-times"></i>   </a> </td>';
            $('.addMoreProduct').append(tr);
           });
    //$('.addMoreProduct').delegate('.delete','click',function(){
     //   $(this).parent().parent().remove();

      //  var tr = $(this).parent().parent();
      $('.addMoreProduct').on('click', '.delete', function() {
    $(this).closest('tr').remove();
    var tr = $(this).closest('tr');
         var price = tr.find('.product_id option:selected').attr('data-price');
         var stock = tr.find('.product_id option:selected').attr('stock');
         var stockinfo= tr.find('.stock').val(stock);
         tr.find('.price').val(price);
         var qty = tr.find('.quantity').val() -0;
         if (stock <qty) {
         alert("The entered quantity is higher than the stock quantity. Please enter a lower quantity.");
           return false;
          }
         var price = tr.find('.price').val() -0;
         var total_amount = (qty * price);
         tr.find('.total_amount').val(total_amount);
        TotalAmount();

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

    //    $('.addMoreProduct').delegate('.product_id','change',function(){
    //      var tr = $(this).parent().parent();
    $('.addMoreProduct').on('change', '.product_id', function() {
    var tr = $(this).closest('tr');
         var price = tr.find('.product_id option:selected').attr('data-price');
         var stock = tr.find('.product_id option:selected').attr('stock');
         var stockinfo= tr.find('.stock').val(stock);
         tr.find('.price').val(price);
         var qty = tr.find('.quantity').val() -0;
         if (stock <qty) {
      alert("The entered quantity is higher than the stock quantity. Please enter a lower quantity.");
      return false;
    }
         var price = tr.find('.price').val() -0;
         var total_amount = (qty * price);
         tr.find('.total_amount').val(total_amount);

         TotalAmount();


       });

    //    $('.addMoreProduct').delegate('.quantity','keyup',function(){
    //      var tr = $(this).parent().parent();
    $(document).on('keyup', '.addMoreProduct .quantity', function(){
  var tr = $(this).closest('tr');
         var stock = tr.find('.product_id option:selected').attr('stock');
         var qty = tr.find('.quantity').val() -0;

    if (stock <qty) {
      alert("The entered quantity is higher than the stock quantity. Please enter a lower quantity.");
      return false;
    }
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
                setTimeout(function() {
           $('#myModal').modal('hide');
          }, 5000);

        });
    });

    $('#btnSubmit').click(function(){
  if($('.product_id:last').val() == ''){
    alert("Please select product!");
    return false;
  }
});
$('#btnSubmit').click(function(){
  if($('.product_id:last').val() == ''){
    alert("Please select product!");
    return false;
  }
});

//new code


    $(document).ready(function(){
        $("#formcusto").submit(function(e){
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(data){
                    $('#res').html(data);
                    $('#customer_name').val('');
                    $('#address').val('');
                    $('#phone_number').val('');
                    var select = $('#myselect');
                    select.append('<option value="'+data.id+'" selected="selected">'+data.customer_name+'</option>');
                      // Show success message
                $("#success-message").html("Customer added successfully!").fadeIn().delay(3000).fadeOut();
                },
                error: function(data) {
        // Get the error response as an object
        var errors = data.responseJSON.errors;

        // Loop through each error and display it in the modal
        $.each(errors, function(index, value) {
            $("#errors-message").html(value).fadeIn().delay(3000).fadeOut();
        });
    }
            });
        });
    });







</script>
<!-- added end -->
<!-- Backend Bundle JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
