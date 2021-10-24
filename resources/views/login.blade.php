<html>
<head>
    <meta charset="utf8">
    <title>LanAdmin - Connexion</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container p-5 shadow rounded">
    <h1 class="text-center">Connexion</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif
    <form method="POST">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" name="email" type="email" placeholder="example@domain.fr">
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input class="form-control" name="password" type="password" placeholder="***********">
        </div>
        <div class="form-group">
            <input class="btn btn-block btn-outline-primary" type="submit" value="Se Connecter">
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<script src="{{ asset('js/chart.min.js') }}"></script>
</body>
</html>
