@extends('layouts.app')
@section('title', 'LanAdmin - Editer un membre')
@section('content')
    <div class="container">
        <h1>Editer un membre</h1>
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
            <input value="{{$staff->id}}" name="id" hidden>
            <div class="form-group my-3">
                <label>Nom</label>
                <input class="form-control" value="{{$staff->name}}" name="name" type="text" placeholder="John Doe">
            </div>
            <div class="form-group my-3">
                <label>Adresse mail</label>
                <input class="form-control" value="{{$staff->email}}" name="email" type="email" placeholder="example@domain.fr">
            </div>
            <div class="form-group my-3">
                <label>Mot de passe</label>
                <input class="form-control" autocomplete="new-password" name="password" type="password" placeholder="**************">
            </div>
            <button class="btn btn-success float-right"><i class="fa fa-edit"></i> Modifier</button>
        </form>
    </div>
@endsection