@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="panel">
        <div class="panel-heading">
            Edit {{ $category->title }}
        </div>
        <div class="panel-body">
            {!! Form::model($category, ['route' => ['categories.update', $category], 'method' =>'patch'])!!}
                @include('categories._form', ['model' => $category])
            {!! Form::close() !!}
        </div>  
    </div>
  </div>
@endsection
