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
        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">


        <table>
            <tr style="background-color:grey;">
                <td style="padding:20px;">Nama Customer</td>
                <td style="padding:20px;">No Telp.</td>
                <td style="padding:20px;">Alamat</td>
                <td style="padding:20px;">Nama Produk</td>
                <td style="padding:20px;">Harga</td>
                <td style="padding:20px;">Jumlah</td>
                <td style="padding:20px;">Status</td>
                <td style="padding:20px;">Action</td>
            </tr>
        @foreach($order as $orders)
            <tr align="center" style="background-color:black;">
                <td style="padding:20px;">{{$orders->name}}</td>
                <td style="padding:20px;">{{$orders->phone}}</td>
                <td style="padding:20px;">{{$orders->address}}</td>
                <td style="padding:20px;">{{$orders->nama_produk}}</td>
                <td style="padding:20px;">{{$orders->harga}}</td>
                <td style="padding:20px;">{{$orders->jumlah}}</td>
                <td style="padding:20px;">{{$orders->status}}</td>
                <td style="padding:20px;"><a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Kirim</a></td>
            </tr>
            @endforeach
        </table>


        </div>
        </div>





          <!-- partial -->
       @include('admin.script')
  </body>
</html>