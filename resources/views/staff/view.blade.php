@extends('layouts.app')
@section('title', 'LanAdmin - '.$staff->name)
@section('content')
    <div class="container">
        <h1>Information membre du staff</h1>
        <hr/>
        <p><b>Id: </b>{{$staff->id}}</p>
        <p><b>Nom: </b>{{$staff->name}}</p>
        <p><b>Email: </b>{{$staff->email}}</p>
        <p><b>Date de création: </b>{{$staff->created_at}}</p>
        <p><b>Date de mise à jour: </b>{{$staff->updated_at}}</p>
        <a class="btn btn-success" href="/staff/edit/{{$staff->id}}"><i class="fas fa-edit"></i> Editer le compte</a>
        <a class="btn btn-danger" href="/staff/delete/{{$staff->id}}"><i class="fas fa-trash"></i> Supprimer le compte</a>
    </div>
@endsection