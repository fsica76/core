@extends('layouts.app')

    @section('content')
        <h2>Users</h2>
        <table id="table" class="table">
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
                        <a href="{{route('configs.users.edit',$user->id)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{route('configs.users.destroy',$user->id)}}" class="btn btn-secondary">Del</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>

        <a href="{{route('configs.users.create')}}" class="btn btn-secondary">Agregar</a>
    @endsection