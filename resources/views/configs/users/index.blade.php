@extends('layouts.app')

    @section('content')
        <div class="card-header">
            <h3 class="card-title">Users</h3>
        </div>
        <div class="card-body">
        <table id="table" class="table">
            <thead>
                <th>#</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Rol</th>

                <th></th>
            </thead>
            <tbody>
               @foreach($datas as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @foreach($user->getRoleNames() as $rol )
                            <label class="badge badge-success">{{$rol}}</label>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{route('configs.users.edit',$user->id)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{route('configs.users.destroy',$user->id)}}" class="btn btn-secondary">Del</a>
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