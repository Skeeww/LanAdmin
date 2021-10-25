@extends('layouts.app')
@section('title', 'LanAdmin - Liste des joueurs')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Liste des joueurs</h1>
        <a href="/user/add" class="btn btn-primary float-right my-3"><i class="fa fa-plus-circle"></i> Ajouter un joueur</a>
        <div class="table-responsive">
            <table class="table-hover table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Team Id</th>
                    <th>Créé le</th>
                    <th></th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->team_id }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="/user/{{ $user->id }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                            <a href="/user/{{ $user->id }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="/user/{{ $user->id }}/delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
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
