@extends('layouts.app')
@section('title', 'LanAdmin - Liste des joueurs')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Liste des tickets</h1>
        <div class="table-responsive">
            <table class="table-hover table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Nom équipe</th>
                    <th>Date d'achat</th>
                    <th>Utilisation</th>
                </thead>
                <tbody>
                    @foreach($data as $res)
                        <tr>
                            <td><a target="{{$res['order_ext_id']}}" href="{{$res['product_management']}}">{{$res['order_ext_id']}}</a></td>
                            <td>{{$res['order_name']}} {{$res['order_firstname']}}</td>
                            <td>{{$res['order_email']}}</td>
                            @if(isset($res['custom']['Nom de votre équipe']))
                                <td>{{$res['custom']['Nom de votre équipe']}}</td>
                            @else
                                <td>undefined</td>
                            @endif
                            <td>{{$res['order_date']}}</td>
                            @if($res['used'] == 1)
                                <td class="bg-success">Utilisé ({{$res['used_date']}})</td>
                            @else
                                <td class="bg-danger">Non utilisé</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
