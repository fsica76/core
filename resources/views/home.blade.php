@extends('layouts.app')


@section('content')

        <div class="card-header ">

        </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                Bienvenido!
            </div>
        </div>
@endsection
