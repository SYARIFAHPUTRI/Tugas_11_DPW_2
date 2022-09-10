{{-- @extends('admin.base')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body"></div>
    </div>
</div>
<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Berat</th>
    </thead>    
    <tbody>
        @foreach($list->sortByDesc('harga')->skip(2)->take(5) as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->berat}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection --}}


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div> class="container">
        <div class="row">
             @foreach($list as $item)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                             {{$item->nama}}
                        </div>
                        <div class="card-body">
                             {{$item->deskripsi}}
                         </div>
                   </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-md-12">
                    <div class="float-right">
                        {{$list->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>