@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="panel">
        <div class="panel-heading">
          Nieuwe fase
        </div>
        <div class="panel-body">
          {!! Form::open(['route' => 'fases.store'])!!}
            @include('fases._form')
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
   
@endsection
