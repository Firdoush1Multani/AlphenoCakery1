
<!-- @if(session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      {{session()->get('message')}}
    </div>
@endif -->
<style>
.button {
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 15px;
  color: #FFFFFF;
  padding: 15px;
  width: 150px;
  text-align: center;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}

.button:after {
  content: "";
  background: #f1f1f1;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}
.button:focus {
    outline-color: transparent;
    outline-style:solid;
    box-shadow: 0 0 0 4px #5a01a7;
}
.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}
</style>
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>

              <form action="{{url('search')}}" method="get" class="form-inline" style="float:right; padding:10px;">

                @csrf 


                <input class="form-control" type="search" name="search" placeholder="Search">
                <input type="submit" name="Search" value="Search" class="btn">
              </form>


            </div>
          </div>
          @foreach($data as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>{{$product->price}}</h6>
                <p>{{$product->description}}</p>
               

                <form action="{{url('addcart',$product->id)}}" method="post">

                    @csrf  
                      <lable>Quantity</label>
                      <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                      <br>
                     <input class="button" type="submit" value="Add Cart">
                </form>


              </div>
            </div>
          </div>
          @endforeach

          @if(method_exists($data,'links'))
          <div class="d-flex justify-content-center">
            
          
            {!! $data->links() !!}

          </div>
          @endif
        </div>
      </div>
    </div>
