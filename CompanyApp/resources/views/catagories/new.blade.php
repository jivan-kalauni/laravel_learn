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
  <h2>New Catagories</h2>
           
  <div class="row">
    <div class="col-sm-4">
        <form method="post" action="/catagory-store">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control mb-4">
            <button class="btn btn-info" type="submit">Create</button>
        </form>
    </div>
  </div>
</div>

</body>
</html>
