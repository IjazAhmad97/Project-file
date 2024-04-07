<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse m-0 bg-warning">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Project</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="bg-warning">Testing Project to Create The data Storing</h1>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header"><h3>Voice of Programmar</h3></div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo
                            doloribus sint incidunt commodi deserunt, quas itaque? Dolores itaque
                             soluta consequuntur aut sunt, eum quam culpa ab recusandae delectus?
                              Natus.
                        </p>
                    </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>





{{-- @extends('Auth.layout')
@section('title', 'home')
@section('content')
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>

@endsection --}}
