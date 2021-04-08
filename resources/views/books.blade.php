<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Books</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">LARAVEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Facullty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/student">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/bus">Bus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/books">Books</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    <br>
    <h1 style="text-align: center;">Books Details</h1>
    <br>
    <form action="/booksread" method="post">
    
    {{csrf_field()}}
    <table class="table table-borderless">
    <tr>
        <td>Title</td>
        <td><input type="text" name="btitle" class="form-control"></td>
    </tr>
    <tr>
        <td>Author</td>
        <td><input type="text" name="bauthor" class="form-control"></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><input type="text" name="bdesc" class="form-control"></td>
    </tr>
    <tr>
        <td>Distributor</td>
        <td><input type="text" name="bdist" class="form-control"></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><input type="text" name="bprice" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-info">SUBMIT</button></td>
    </tr></table>
    </form></div></div></div>
</body>
</html>