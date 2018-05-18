@extends('layouts.app')

@section('content')
    <div class="card-header">
        <h3 class="card-title">CORE</h3>
    </div>
    <div class="card-body">
        <table id="table" class="table table-hover">

            <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Text</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $user)
                <tr>
                    <td><a href="{{route(config($confFile.'.routeShow'),$user->id)}}" >{{$user->id}}</a></td>
                    <td>{{$user->date}}</td>
                    <td>{{$user->text}}</td>
                    <td>
                        <a href="{{route(config($confFile.'.routeEdit'),$user->id)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{route(config($confFile.'.routeDestroy'),$user->id)}}"
                           class="btn btn-secondary">Del</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <div class="card-footer">
        <a href="{{ route(config($confFile.'.routeCreate')) }}" class="btn btn-secondary">Crear</a>
    </div>
@endsection