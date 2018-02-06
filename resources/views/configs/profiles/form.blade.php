@extends('template.layout')

    @section('content')
        <h2>Form PERFILES</h2>
        @if(isset($model))
            {!! Form::model($model,['route'=>['configs.users.update',$model->id]]) !!}
        @else
            {!! Form::open(['route'=>'configs.users.store']) !!}
        @endif

        <div class="form-group">
            {!! Form::label('User Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Password') !!}
            {!! Form::text('password',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Email') !!}
            {!! Form::text('email',null,['class'=>'form-control']) !!}

            {!! Form::hidden('area_id',3) !!}
            {!! Form::hidden('area',3) !!}

        </div>
        <button type="submit" class="btn btn-outline-primary">Agregar</button>
        {!! Form::close() !!}
    @endsection