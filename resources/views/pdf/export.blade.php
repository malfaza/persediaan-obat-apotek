{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html> --}}
<!DOCTYPE html>
@section('content')
   <!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-3">ID Kategori</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)                
            <tr>
                <td>000{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- AKHIR DATA --> 
@endsection
