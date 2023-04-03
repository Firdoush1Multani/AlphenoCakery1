<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        
        <div style="padding-bottom:40px" class="container-fluid page-body-wrapper">

            <div class="container" align="center">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif
            
            
            <form action="{{route('adabout')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div style="padding:15px;">
                <label>Product Description</label>

                <input  style="color:black;" type="text" name="des" placeholder="About Us" required="">
            </div>
            
            <div style="padding:15px;">
                
                <input type="submit" class="btn btn-primary" name="Submit" >
            </div>
            </form>


            <table border="2">
                    <tr align="center"  style="background-color:gray;">
                        <td style="padding:20px">Description</td>
                        <td style="padding:20px">Update</td> 
                        <td style="padding:20px">Delete</td>
                    </tr>
                    @foreach($data as $ab)
                    <tr align="center" style="background-color:white;color:black">
                        <td>{{$ab->description}}</td>
                    
                        <td><a class="btn btn-primary" href="{{url('updateAbout')}}">Update</a></td>
                        
                        <td><a class="btn btn-danger"onclick="return confirm('Are you Sure?')" href="{{url('deleteAbout')}}">Delete</a></td>
                    
                    </tr>
                    @endforeach

            </div>
        </div>
          <!-- partial -->
      @include('admin.script')
  </body>
</html>