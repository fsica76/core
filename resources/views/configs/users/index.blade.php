@extends('template.layout')

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
               @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>

                    <td><a href="{{route('configs.users.edit',$user->id)}}" class="btn btn-primary"><span class="fa fa-edit"></span></a></td>
                </tr>
               @endforeach
            </tbody>
        </table>

        <a href="{{route('configs.users.create')}}" class="btn btn-primary">Agregar</a>
    @endsection