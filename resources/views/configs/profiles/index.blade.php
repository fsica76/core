@extends('template.layout')

    @section('content')
        <h2>PERFILES</h2>
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
                        <a href="{{route('configs.users.edit',$user->id)}}" class="btn"><span class="far fa-edit"></span></a>
                        <a href="{{route('configs.users.destroy',$user->id)}}" class="btn"><span class="fas fa-trash-alt"></span></a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>

        <a href="{{route(config($confFile.'.routeCreate'))}}" class="btn btn-outline-primary">Agregar</a>
    @endsection