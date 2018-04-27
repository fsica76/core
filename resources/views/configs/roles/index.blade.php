@extends('layouts.app')

    @section('content')
        <h2>Roles</h2>
        <table id="table" class="table">
            <thead>
                <th>#</th>
                <th>Roles</th>
                <th></th>
            </thead>
            <tbody>
               @foreach($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>

                    <td>
                        <a href="{{route(config($confFile.('.routeEdit')),$data->id)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{route(config($confFile.('.routeDestroy')),$data->id)}}" class="btn btn-secondary">Del</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>

        <a href="{{route(config($confFile.'.routeCreate'))}}" class="btn btn-secondary">Agregar</a>
    @endsection