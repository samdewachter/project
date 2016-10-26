@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            Edit {{ $fases->title }}
        </div>
        <div class="panel-body">
            {!! Form::model($fases, ['route' => ['fases.update', $fases], 'method' =>'patch'])!!}
              @include('fases._form', ['model' => $fases])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
