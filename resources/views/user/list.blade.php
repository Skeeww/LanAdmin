@extends('layouts.app')
@section('title', 'LanAdmin - Liste des joueurs')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Liste des joueurs</h1>
        <div class="table-responsive">
            <table class="table-hover table table-bordered table-dark">
                <thead>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Team Id</th>
                    <th>Créé le</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->team_id }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="container flex w-100">
            {{ $users->links() }}
        </div>
    </div>
@endsection
