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
          <br>
          <h1 style="font-family:comic-sans; font-weight:bold; font-size:35px">USER</h1>
          <br>

        <table>
            <tr style="background-color: gray;">
                <td style="padding:20px">Nama</td>
                <td style="padding:20px">Email</td>
                <td style="padding:20px">No.Telepon</td>
                <td style="padding:20px">Alamat</td>
            </tr>
            @foreach($data as $user)
            <tr align="center"style="background-color: black; ">
                <td style="padding:20px">{{$user->name}}</td>
                <td style="padding:20px">{{$user->email}}</td>
                <td style="padding:20px">{{$user->phone}}</td>
                <td style="padding:20px">{{$user->address}}</td>
            </tr>
            @endforeach
        </table>
</div>
</div>
          <!-- partial -->
       @include('admin.script')
  </body>
</html>