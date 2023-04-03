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

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

@include('user.header1')
   
    
@include('user.product')
   
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Alpheno Cakery</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best Cake?</h4>
              
              <ul class="featured-list" style="text-align: justify;text-justify: inter-word;">
                <p>We Are not Just a bakery,we are not just backers,in fact we are just like you. We make Cakes to make your day memorable. </p>
                <p>Beginning with finest flour mixed with our passion, sprinkliny some sugar and butter.
                   Blending it with our deepest emotions to create a perfect batter.Kindling it in the over with our warmth.
                   We add our magical touch to our recip.
                  <p>We deliver cake at just the right time because we understand the emotions attached to the occasion. </p>
                  <p>Our Mission : Alpheno Cakery has embarked on the mission to define a class of its own in the domian of bakery goods and services.</p>
                  <p>How it all started : Alpheno Cakery is not only a bakery dealing in egg and eggless baked goods , but a venture started and pampered with love diligence and atmost passion by our two founders name.<p>
                  <p>How are we different : A customer like cake made the same cake . Compared to other bakeries . We also get less money from the customer.our chocolate is also fresh . Also we use flowers to make a party props as per the customer choice .</p>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
            <img src="{{'productimage/about.jpg'}}"></img>
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Alpheno Cakery Co., Ltd.</p>
            
      
            </div>
          </div>
        </div>
      </div>
    </footer>


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
