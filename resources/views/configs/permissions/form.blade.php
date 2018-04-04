@extends('layouts.app')

    @section('content')
        <h2>Form PERMISSIONS</h2>
        @if(isset($model))
            {!! Form::model($model,['route'=>[config($confFile.'.routeUpdate'),$model->id]]) !!}
        @else
            {!! Form::open(['route'=> config($confFile.'.routeStore') ]) !!}
        @endif

        <div class="form-group">
            {!! Form::label('Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>

        </div>
        <div class="form-group">
            {!! Form::label('Slug') !!}
            {!! Form::text('slug',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('slug') ? $errors->first('slug') : '' }}</span>

        </div>
        <div class="form-group">
            {!! Form::label('Description') !!}
            {!! Form::text('description',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>

        </div>
        <div class="form-group">
            {!! Form::label('Level') !!}
            {!! Form::text('level',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('level') ? $errors->first('level') : '' }}</span>

        </div>


          <button type="submit" class="btn btn-default">Agregar</button>
        {!! Form::close() !!}
    @endsection