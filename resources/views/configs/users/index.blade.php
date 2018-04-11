@extends('layouts.app')

    @section('content')
        <h2>Users</h2>
        <table class="table">
            <thead>
                <th>#</th>
                <th>UserName</th>
                <th>Email</th>
                <th></th>
            </thead>
            <tbody>
               @foreach($datas as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('configs.users.edit',$user->id)}}" class="btn btn-default">Edit</a>
                        <a href="{{route('configs.users.destroy',$user->id)}}" class="btn btn-default">Del</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>

        <a href="{{route('configs.users.create')}}" class="btn btn-default">Agregar</a>
    @endsection