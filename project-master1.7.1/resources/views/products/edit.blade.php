@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                Edit {{ $product->title }}
            </div>
            <div class="panel-body">
                {!! Form::model($product, ['route' => ['products.update', $product], 'method' =>'patch', 'files' => true])!!}
                  @include('products._form', ['model' => $product])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
