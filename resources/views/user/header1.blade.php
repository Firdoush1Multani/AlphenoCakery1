<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>    <title>Alpheno Cakery</title>


<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Alpheno <em>Cakery</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{url('productpage')}}">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
              </li>

            <li class="nav-item">

              @include('user.login')
            </li>
            </ul>
          </div>
        </div>
      </nav>
      @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
              {{session()->get('message')}}
        </div>
      @endif
    </header>
     <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <img src="{{'productimage/food.jpg'}}"></img>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
          <img src="{{'productimage/food2.jpg'}}"></img>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
          <img src="{{'productimage/food3.jpg'}}"></img>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->