<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <section class="container-fluid text-center">
    @yield('contenu')
    </section>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>