@extends('layouts.app')

    @section('content')
        <h2>Core</h2>
        <table class="table">
            <thead>
                <th>#</th>
                <th>Date</th>
                <th>Text</th>
                <th></th>
            </thead>
            <tbody>
               @foreach($datas as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->date}}</td>
                    <td>{{$user->text}}</td>
                    <td>
                        <a href="{{route(config($confFile.'.routeEdit'),$user->id)}}" class="btn btn-default">Edit</a>
                        <a href="{{route(config($confFile.'.routeDestroy'),$user->id)}}" class="btn btn-default">Del</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>


        <a href="{{ route(config($confFile.'.routeCreate')) }}" class="btn btn-default">Crear</a>
    @endsection