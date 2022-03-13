

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        .title{
            color:white;
            padding-top: 25px;
            font-size: 25px;
        }

        label{
            display: inline-block; 
            width: 200px;
        }

    </style>
  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
        <!-- partial -->
        
        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">

        <h1 class="title">Tambahkan Produk</h1>



        @if(session()->has('message'))

        <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

        </div>

        @endif

        

        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div style="padding:15px;">
            <label>Nama Product</label>
            <input style="color:black;" type="text" name="title" placeholder="Berikan nama Produk" required="">
        </div>

        <div style="padding:15px;">
            <label>Harga</label>
            <input style="color:black;" type="number" name="harga" placeholder="Harga Produk" required="">
        </div>

        <div style="padding:15px;">
            <label>Deskripsi</label>
            <input style="color:black;" type="text" name="des" placeholder="Deskripsi Produk" required="">
        </div>

        <div style="padding:15px;">
            <label>Jumlah Produk</label>
            <input style="color:black;" type="text" name="jumlah" placeholder="Berikan Jumlah Produk" required="">
        </div>

        <div style="padding:15px;">
            <input type="file" name="file">
        </div>

        <div style="padding:15px;">

            <input class="btn btn-success" type="submit">
        </div>

    </form>
        
        </div>

        </div>
      
          <!-- partial -->
       @include('admin.script')
  </body>
</html>