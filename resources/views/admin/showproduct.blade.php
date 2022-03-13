

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
        <!-- partial -->


        <div style="padding-bottom:30px" class="container-fluid page-body-wrapper">

        <div class="container" align="center">

                  @if(session()->has('message'))

          <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert">x</button>

              {{session()->get('message')}}

          </div>

          @endif


        <table>
            <tr style="background-color: gray;">
                <td style="padding:20px">Title</td>
                <td style="padding:20px">Deskripsi</td>
                <td style="padding:20px">Stok</td>
                <td style="padding:20px">Harga</td>
                <td style="padding:20px">Gambar</td>
                <td style="padding:20px">Update</td>
                <td style="padding:20px">Delete</td>
            </tr>
            @foreach($data as $product)

            <tr align="center"style="background-color: black; ">
                <td>{{$product->title}}</td>
                <td>{{$product->deskripsi}}</td>
                <td>{{$product->jumlah}}</td>
                <td>{{$product->harga}}</td>
                <td>
                  <img height="100px" width="100px"src="/productimage/{{$product->image}}">
                </td>
                <td>
                  <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a>
                </td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Hapus?')" href="{{url('deleteproduct', $product->id)}}">Delete</a>
                </td>
            </tr>

            @endforeach



        </table>



        <div>


        </div>


          <!-- partial -->
       @include('admin.script')
  </body>
</html>