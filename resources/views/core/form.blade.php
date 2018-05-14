@extends('layouts.app')

@section('title')
    Form Core
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @if(isset($model))
                {!! Form::model($model,['route'=>[config($confFile.'.routeUpdate'),$model->id]]) !!}
            @else
                {!! Form::open(['route'=> config($confFile.'.routeStore')]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('String') !!}
                {!! Form::text('string',null,['class'=>'form-control']) !!}
                <span class="text-danger">{{ $errors->has('string') ? $errors->first('string') : '' }}</span>

<<<<<<< HEAD
            </div>
            <div class="form-group">
                {!! Form::label('Double') !!}
                {!! Form::text('double',null,['class'=>'form-control']) !!}
                <span class="text-danger">{{ $errors->has('double') ? $errors->first('double') : '' }}</span>
            </div>

            <div class="form-group">
                {!! Form::label('Tiny') !!}
                {!! Form::text('tiny',null,['class'=>'form-control']) !!}
                <span class="text-danger">{{ $errors->has('tiny') ? $errors->first('tiny') : '' }}</span>
            </div>
            <div class="form-group">
                {!! Form::label('Text') !!}
                {!! Form::text('text',null,['class'=>'form-control']) !!}
                <span class="text-danger">{{ $errors->has('text') ? $errors->first('text') : '' }}</span>
            </div>
            <div class="form-group">
                {!! Form::label('Date') !!}
                {!! Form::text('date',null,['class'=>'form-control']) !!}
                <span class="text-danger">{{ $errors->has('date') ? $errors->first('date') : '' }}</span>
            </div>
            <button type="submit" class="btn btn-secondary">Agregar</button>
            {!! Form::close() !!}
=======
        <div class="form-group">
            {!! Form::label('Tiny') !!}
            {!! Form::text('tiny',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('tiny') ? $errors->first('tiny') : '' }}</span>
        </div>
        <div class="form-group">
            {!! Form::label('Text') !!}
            {!! Form::text('text',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('text') ? $errors->first('text') : '' }}</span>
        </div>
        <div class="form-group">
            {!! Form::label('Date') !!}
            {!! Form::text('date',null,['class'=>'datepicker form-control']) !!}
            <span class="text-danger">{{ $errors->has('date') ? $errors->first('date') : '' }}</span>
>>>>>>> 1b13b9a43540831bee1ae46c6b40c998cd3fad97
        </div>
    </div>
@endsection