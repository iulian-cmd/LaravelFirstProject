<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name')}}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style=" background-color: #6CB2EB;">
        <a class="navbar-brand" href="#">Boutique à vélos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- @yield('content') --}}
    <div class="card bg-light mb-3">
        <div class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom bg-info">UNE BOUTIQUE
            POUR TOUS LES PASSIONNÉS</div>
        <div class="card-body">
            <h5 class="card-title">Le vélo est indémodable.</h5>
            <p class="container-fluid">Nous sommes de plus en plus nombreux à pratiquer le VTT, le vélo de route ou le
                BMX
                pour garder la forme tout en prenant du plaisir. Au quotidien, le vélo tient également une place de plus
                en
                plus importante. Pour les citadins, le vélo est considéré comme une alternative économique et écologique
                à
                la voiture ou aux transports en commun. Du vélo de ville au vélo trekking en passant par le vélo cross,
                chacun trouvera sur notre boutique le vélo qu'il lui faut. Vous recherchez un vélo adapté à la taille de
                votre enfant? Vous cherchez un casque? Besoin d'accessoires pour votre prochaine sortie vélo? Vous
                trouverez
                facilement le produit que vous cherchez grâce à nos univers produits: VTT, LaRoute, UrbainVelo et
                Distinct.
            </p>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>