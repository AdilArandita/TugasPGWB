<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>

        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">

        <table>
            <tr>
                <td>Nama</td>
                <td>Email</td>
                <td>No.Telepon</td>
                <td>Alamat</td>
            </tr>
            @foreach($data as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->address}}</td>
            </tr>
            @endforeach
        </table>
</div>
</div>

        <!-- partial -->
       @include('admin.script')
  </body>
</html>