@extends('layouts.app')

@section('content')

  <div class="container">    
        <div class="panel">
            <div class="panel-heading">
                Nieuwe Categorie
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'categories.store'])!!}
                  @include('categories._form')
                {!! Form::close() !!}
            </div>
        </div>    
  </div>
   
@endsection
