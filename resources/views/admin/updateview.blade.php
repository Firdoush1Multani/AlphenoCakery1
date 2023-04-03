<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
    @include('admin.css')
  </head>
  <body>
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
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
            <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <div style="padding:15px;">
                <label>Product Title</label>

                <input style="color:black;" type="text" name="title" value="{{$data->title}}" required="">
            </div>

            <div style="padding:15px;">
                <label>Product Price</label>

                <input  style="color:black;" type="number" name="price" value="{{$data->price}}" required="">
            </div>

            <div style="padding:15px;">
                <label>Product Description</label>

                <input  style="color:black;" type="text" name="des" value="{{$data->description}}" required="">
            </div>

            <div style="padding:15px;">
                <label>Qauntity</label>

                <input  style="color:black;" type="text" name="quantity" value="{{$data->quantity}}" required="">
            </div>
            <div style="padding:15px;">
                <label>Old Image</label>
                <Image src="/productimage/{{$data->image}}" height="100" width="100">
            </div>
            <div style="padding:15px;">
            <label>Change Image:</label>
                <input type="file" name="file" >
            </div>
            
            <div style="padding:15px;">
                
                <input type="submit" name="Submit" >
            </div>
        </form>
        </div>
  
        <!-- partial -->
      @include('admin.script')
  </body>
</html>