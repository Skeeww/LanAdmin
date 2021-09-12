@extends('layouts.app')
@section('title', 'LanAdmin - Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3">
                <div class="small-box bg-gradient-success">
                    <div class="inner">
                        <h3>{{ $users_count }}</h3>
                        <p>Joueurs inscrits</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Liste des joueurs <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="small-box bg-gradient-fuchsia">
                    <div class="inner">
                        <h3>{{ $teams_count }}</h3>
                        <p>Nombre d'équipes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Liste des équipes <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="small-box bg-gradient-dark">
                    <div class="inner">
                        <h3>5</h3>
                        <p>Serveurs démarrés</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Liste des serveurs <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="small-box bg-gradient-info">
                    <div class="inner">
                        <h3>184</h3>
                        <p>Équipements connectés</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Liste des équipements <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Team Id</th>
                    <th>Créé le</th>
                </thead>
                <tbody>
                @foreach($last_users as $user)
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
        @for($i=0;$i<500;$i++)
            <br>
        @endfor
    </div>
@endsection
