<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>shoppu</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--



-->

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
          <a class="navbar-brand" href="{{url('')}}"><h2>SHOPPU</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('redirect')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
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
                <i class="fas fa-shopping-cart"></i>  
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
      
        <div class="banner-item-01">
          <div class="text-content">
            <h2>bienvenue</h2>
          </div>
        </div>
       
      </div>
    
    <!-- Banner Ends Here -->

  

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>The Shoppu</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Beli Produk Terbaik !</h4>
              <p>Kami menyediakan produk berkualitas dan ori dengan tampilan yang elegan dan enak dipandang di semua kalangan, tidak perlu menghawatirkan harga, karena harga telah difilter dan dipilih agar bisa tetap dinikmati tanpa mengeluarkan banyak biaya </p>
              <ul class="featured-list">
                <li><a href="{{url('allproduk')}}">Produk produk berkualitas</a></li>
                <li><a href="{{url('contact')}}">Lokasi kantor atau tentang kami</a></li>
                <li><a href="{{url('about')}}">Anggota dan Sosial Media</a></li>
              </ul>
              <a href="{{url('about')}}" class="filled-button">Tanyakan lebih lanjut</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/aaa.jpg" alt="">
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
