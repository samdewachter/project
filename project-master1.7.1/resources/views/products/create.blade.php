@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="panel">
        <div class="panel-heading">
          Nieuw Project
        </div>
        <div class="panel-body">
          {!! Form::open(['route' => 'products.store', 'files' => true])!!}
            @include('products._form')
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection
