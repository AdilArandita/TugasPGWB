<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>shoppu</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/aystore.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>



    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{url('')}}"><h2>shoppu</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{url('')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="{{url('allproduk')}}">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
              </li>

              <li class="nav-item">

              @if (Route::has('login'))
                
                    @auth

                    <li class="nav-item">
                <a class="nav-link" href="{{url('showcart')}}">
                <i class="fa fa-shopping-cart"></i>  
                Keranjang</a>
              </li>
                        
                            <x-app-layout>

                            </x-app-layout>
                            @else
                       <li> <a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                
                 @endif
            </li>


            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
   
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4 style="cursor: default;">new arrivals</h4>
              <h2  style="cursor: default;">AY Products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @if(session()->has('message'))

<div class="alert alert-success">

<button type="button" class="close" data-dismiss="alert">x</button>

    {{session()->get('message')}}

</div>

@endif



          <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
            <h2 style="color:white;">All Products</h2>
           
            
            </div>
          </div>
         
          @foreach($data as $product)


          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <h4>{{$product->title}}</h4>
                <h6>Rp. {{$product->harga}}</h6>
                <p>{{$product->deskripsi}}</p>

                <form action="{{url('addcart',$product->id)}}" method="POST">

                  @csrf

                  <input type="number" value="1" min="1" class="form-control" style="width:100px" name="jumlah">

                  <br>

                  <input class="btn btn-danger" type="submit" value="Masukkan Keranjang">
                </form>
                
              </div>
            </div>
          </div>

        @endforeach

        @if(method_exists($data, 'links'))


        <div class="d-flex justify-content-center">

        {!! $data->links() !!}

        </div>

        @endif


        </div>
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
              <p>Copyright &copy; 2022 shoppu Co., Ltd.
            
           
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
