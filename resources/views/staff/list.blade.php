@extends('layouts.app')
@section('title', 'LanAdmin - Liste du staff')
@section('content')
<div class="container-fluid">
    <h1 class="text-center">Liste du staff</h2>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <a href="/staff/add" class="btn btn-primary float-right my-3"><i class="fa fa-plus-circle"></i> Ajouter un membre</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Date de création</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($staffs as $staff)
                <tr>
                    <td>{{$staff->id}}</td>
                    <td>{{$staff->name}}</td>
                    <td>{{$staff->email}}</td>
                    <td>{{$staff->created_at}}</td>
                    <td>
                        <a href="/staff/{{$staff->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="/staff/edit/{{$staff->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="/staff/delete/{{$staff->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection