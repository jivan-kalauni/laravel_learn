<!DOCTYPE html>
<html lang="en">
<head>
  <title>catagories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
</head>
<body>

<div class="container">
  <h2>Catagories</h2>
       <h2><a href="/catagory-create" class="btn btn-primary">Create New Catagory</a></h2>      
  <table class="table table-hover">
    <thead>
      <tr>
        <th>S.N.</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($catagories as $catagory)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td> {{$catagory->title }}</td>
        <td>
            <a href="/catagory-update/ {{ $catagory->id }}" class="btn btn-success">Update</a>
            <a class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
