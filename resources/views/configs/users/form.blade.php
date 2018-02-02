@extends('template.layout')

    @section('content')
        <h2>Users</h2>
        @if(isset($model))
            {!! Form::model($model,['route'=>'configs.users.store']) !!}
        @else
            {!! Form::open(['route'=>'configs.users.store']) !!}
        @endif

        {!! Form::text('username',null,['class'=>'form-control']) !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
        <button type="submit" class="btn btn-primary">Agregar</button>
        {!! Form::close() !!}
    @endsection