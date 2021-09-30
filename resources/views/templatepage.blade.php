<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Mon beau site</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<link href="assets/css/main.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
  
<body>
<div class="container">
  <header class="jumbotron">
    <h1>Mon beau site !</h1>
  </header>
  <div class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Mon beau site</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
          @for ($i = 0; $i < count($data['menu']); $i++)
           <li{{ ($i == $data['page'])? ' class="active"': ''; }}><a href="{{ $i }}">{{ $data['menu'][$i] }}</a></li>
          @endfor
      </ul>
    </div>
  </div>
  <div class="col-md-12"> @yield('content') </div>
  <hr>
  <footer class="col-md-12" id="bas"> © Mon beau site... </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</body>