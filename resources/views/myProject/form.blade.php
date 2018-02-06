@extends('template.layout')

    @section('content')
        <h2>MyProject Form</h2>
        @if(isset($model))
            {!! Form::model($model,['route'=>[config($confFile.'.routeUpdate'),$model->id]]) !!}
        @else
            {!! Form::open(['route'=> config($confFile.'.routeStore') ]) !!}
        @endif

        <div class="form-group">
            {!! Form::label('String') !!}
            {!! Form::text('string',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Double') !!}
            {!! Form::number('double',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Text') !!}
            {!! Form::text('text',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Date') !!}
            {!! Form::date('date',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Tiny') !!}
            {!! Form::number('tiny',null,['class'=>'form-control']) !!}
        </div>
        <button type="submit" class="btn btn-outline-primary">Agregar</button>
        {!! Form::close() !!}
    @endsection