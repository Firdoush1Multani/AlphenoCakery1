<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .title
        {
            color:white; 
            padding-top:25px;
            font-size:25px; 
            font-family:times new roman;
        }
        label{
            display: inline-block;
            width:200px;
        }
       
    </style>
  </head>
  <body>
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">
                <h1 class="title">
                    Add Product
                </h1>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif
            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div style="padding:15px;">
                <label>Product Title</label>

                <input style="color:black;" type="text" name="title" placeholder="Give A Product Title" required="">
            </div>

            <div style="padding:15px;">
                <label>Product Price</label>

                <input  style="color:black;" type="number" name="price" placeholder="Give A Product Price" required="">
            </div>

            <div style="padding:15px;">
                <label>Product Description</label>

                <input  style="color:black;" type="text" name="des" placeholder="Give Product Description" required="">
            </div>

            <div style="padding:15px;">
                <label>Qauntity</label>

                <input  style="color:black;" type="text" name="quantity" placeholder="Product Quantity" required="">
            </div>

            <div style="padding:15px;">
              
                <input type="file" name="file" >
            </div>
            
            <div style="padding:15px;">
                
                <input type="submit" name="Submit" >
            </div>
        </form>
        </div>

      @include('admin.script')
  </body>
</html>