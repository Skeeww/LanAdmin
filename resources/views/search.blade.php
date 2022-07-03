@extends('layouts.app')
@section('title', 'Résultats pour '.$query)
@section('content')
    <div class="container">
        <h1>Résultat pour {{$query}}</h1>
        <h2 class="my-5">Equipes</h2>
        @if(!sizeof($teams))
            <p>Aucun résultats dans les équipes</p>
        @else
            @foreach($teams as $team)
            <a href="/team/{{$team->id}}">{{$team->name}}</a>
            <br/>
            @endforeach
        @endif
        <h2 class="my-5">Joueurs</h2>
        @if(!sizeof($users))
            <p>Aucun résultats dans les joueurs</p>
        @else
            @foreach($users as $user)
            <a href="/user/{{$user->id}}">{{$user->name}} ({{$user->email}})</a>
            <br/>
            @endforeach
        @endif
    </div>
@endsection