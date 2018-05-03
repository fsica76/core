@extends('layouts.app')

    @section('content')
        <h2> Permisos : {{$model->name}} </h2>

            {!! Form::model($model,['route'=>['configs.roles.permissions',$model->id]]) !!}
            {!! Form::hidden('role_id',$model->id) !!}

        <div>
            <table class="table">
                <thead>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>
                                @if($model->hasPermissionTo($permission->name))
                                    <input name="permission[]"  value="{{$permission->id}}" type="checkbox" checked>
                                @else
                                    <input name="permission[]"  value="{{$permission->id}}" type="checkbox">
                                @endif
                        </td>
                        <td>{{$permission->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

        <button type="submit" class="btn btn-secondary">Guardar</button>
        {!! Form::close() !!}
    @endsection