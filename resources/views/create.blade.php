<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>UI</title>
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
          <a class="nav-link active" aria-current="page" href="/">Facullty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/student">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/bus">Bus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/books">Books</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    <br>
    <h1 style="text-align: center;">Faculty Details</h1>
    <br>
    <form action="/facultyread" method="post">
    {{csrf_field() }}
    <table class="table table-borderless">
        <tr>
            <td>Name</td>
            <td><input name="fname" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><input name="desg" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>College</td>
            <td><input name="collegename" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Contact no</td>
            <td><input name="contact" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-success">SUBMIT</button></td>
        </tr>
        </table>
    </form>
    </div></div></div>
</body>
</html>