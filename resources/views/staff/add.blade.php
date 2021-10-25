@extends('layouts.app')
@section('title', 'LanAdmin - Liste des joueurs')
@section('content')
    <div class="container">
        <h1>Ajouter un membre</h1>
        <hr/>
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
            <div class="form-group my-3">
                <label>Nom</label>
                <input class="form-control" name="name" type="text" placeholder="John Doe">
            </div>
            <div class="form-group my-3">
                <label>Adresse mail</label>
                <input class="form-control" name="email" type="email" placeholder="example@domain.fr">
            </div>
            <div class="form-group my-3">
                <label>Mot de passe</label>
                <input class="form-control" name="password" type="password" placeholder="**************">
            </div>
            <button class="btn btn-success float-right"><i class="fa fa-plus-circle"></i> Ajouter</button>
        </form>
    </div>
@endsection