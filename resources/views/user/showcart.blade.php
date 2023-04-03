<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>    <title>Alpheno Cakery</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--


https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

   <!-- ***** Preloader Start *****-->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('user.header1')

    <div style="padding:100px;" align="center">
        <table>
            <tr style="background-color:lightpink;">
                <td style="padding:10px; font-size:20px;">Product Name</td>
                <td style="padding:10px; font-size:20px;">Quantity</td>
                <td style="padding:10px; font-size:20px;">Price</td>
                <td style="padding:10px; font-size:20px;">Action</td>
            </tr>
        <form action="{{url('order')}}" method="POST">
            @csrf
            @foreach($cart as $carts)
            <tr style="background-color:lightgray;">
                <td style="padding:10px;">
                  <input type="text" name="productname[]" value=" {{$carts->product_title}}" hidden="">
                  {{$carts->product_title}}
                   
                </td>
                <td style="padding:10px;">
                  <input type="text" name="quantity[]" value="{{$carts->quabtity}}" hidden="">
                  {{$carts->quabtity}}
                </td>
                <td style="padding:10px;">
                  <input type="text" name="price[]" value="{{$carts->price}}" hidden="">
                  {{$carts->price}}
                </td>
                <td style="padding:10px;"><a class="btn btn-danger" href="{{url('delete',$carts->id)}}">Remove</a></td>

            </tr>
            @endforeach
        </table>
        <button class="btn btn-success">Confirm Order</button>
        </form>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
