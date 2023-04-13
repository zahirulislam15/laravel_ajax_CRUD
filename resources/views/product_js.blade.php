<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function(){
        
        // alert();
        $(document).on('click','.add_product',function(e){
            e.preventDefault();
            let name = $('#name').val();
            let price = $('#price').val();
            // console.log(name+price);

            $.ajax({
                url:"{{ route('add.product')}}",
                method:'post',
                data:{
                    name:name,
                    price:price
                },
                success:function(res){
                    if(res.status == 'success'){
                        $('#addModal').modal('hide');
                        $('#removeData')[0].reset();
                        $('.table').load(location.href+' .table');
                    }
                },
                error:function(err){
                    let error   = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>')
                    });
                }

            });
        })


        //edit function

        $(document).on('click','.update_product_form',function(){
            let id = $(this).data('id');
            let name = $(this).data('name');
            let price = $(this).data('price');
            
            $('#up_id').val(id);
            $('#up_name').val(name);
            $('#up_price').val(price);
            
        });
        
        // update product
        $(document).on('click', '.update_product', function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_name = $('#up_name').val();
            let up_price = $('#up_price').val();
            
            $.ajax({
                url:"{{ route('update.product')}}",
                method:'post',
                data:{
                    up_id: up_id,
                    up_name: up_name,
                    up_price: up_price
                },
                //console.log(up_name+up_price);

                success:function(res){
                    if(res.status == 'success'){
                        $('#updateModal').modal('hide');
                        $('#updateData')[0].reset();
                        $('.table').load(location.href+' .table');
                    }
                },
                error:function(err){
                    let error   = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>')
                    });
                }

            });
        })


         // delete product
         $(document).on('click', '.delete_product', function(e){
            e.preventDefault();
            let product_id = $(this).data('id');
            // console.log(product_id);
            if(confirm('Are you sure to delete product?')) {
                $.ajax({
                    url:"{{ route('delete.product')}}",
                    method:'post',
                    data:{product_id:product_id},
                    
                    success:function(res){
                        if(res.status == 'success'){
                            $('.table').load(location.href+' .table');
                        }
                    },
                    

                });
            }
            
        })


    });
</script>