<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>product list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                
                <div class="my-5">
                    <div class="text-center">
                      <h3 class="py-3">Product List</h3>
                    </div>
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal"> Add product</a>
                      <table class="table">
                        
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($products as $key => $item)
                            <tr>
                              <th>{{++$key}}</th>
                              <td>{{$item->name}}</td>
                              <td>{{$item->price}}</td>
                              <td>
                                  <a href="" class="btn btn-success update_product_form" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#updateModal"
                                    data-id="{{ $item->id }}"
                                    data-name="{{ $item->name }}"
                                    data-price="{{ $item->price }}"
                                  >
                                  <i class="fa-solid fa-pen-to-square"></i></a>
                                  <a href="" class="btn btn-danger delete_product" data-id="{{ $item->id }}" ><i class="fa-solid fa-trash"></i></a> 
                              </td>
                            </tr>
                          @endforeach
                                                    
                        </tbody>
                      </table>
                      {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
    @include('addProduct_modal')
    @include('updateProduct_modal')
    @include('product_js')
</body>
</html>