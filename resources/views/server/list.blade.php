@extends('layouts.app')
@section('title', 'LanAdmin - Liste des joueurs')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Liste des serveurs</h1>
        <a href="user/add" class="btn btn-primary float-right my-3"><i class="fa fa-plus-circle"></i> Ajouter un serveur</a>
        <div class="table-responsive">
            <table class="table-hover table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Team Id</th>
                    <th>Créer le</th>
                    <th></th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
