@extends('layouts.app')
@section('title', 'LanAdmin - Supprimer un compte')
@section('content')
    <div class="container">
        <h1>Supprimer un compte</h1>
        <hr/>
        <p>Êtes-vous sûr de vouloir supprimer le compte de <b>{{$staff->name}}</b> ?</p>
        <div class="flex-row">
            <form method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Confirmer</button>
                <a href="/staff/list" class="btn btn-danger">Annuler</a>
            </form>
        </div>
    </div>
@endsection