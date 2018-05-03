@extends('layouts.app')

    @section('content')
        <h2>Form Users</h2>
        @if(isset($model))
            {!! Form::model($model,['route'=>['configs.users.update',$model->id]]) !!}
        @else
            {!! Form::open(['route'=>'configs.users.store']) !!}
        @endif

        <div class="form-group">
            {!! Form::label('User Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>

        </div>
        <div class="form-group">
            {!! Form::label('Password') !!}
            {!! Form::text('password',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>

        </div>
        <div class="form-group">
            {!! Form::label('Email') !!}
            {!! Form::text('email',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
        </div>

        <div class="form-group">
            {!! Form::label('Rol') !!}
            {!! Form::select('roles_id',$roles,null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('roles_id') ? $errors->first('roles_id') : '' }}</span>
        </div>
        <button type="submit" class="btn btn-secondary">Agregar</button>
        {!! Form::close() !!}
    @endsection