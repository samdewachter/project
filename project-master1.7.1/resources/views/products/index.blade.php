@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="clearfix">
          <h3>Projecten <small><a href="{{ route('products.create') }}" class="btn btn-manage">Nieuw Project</a></small></h3>
          {!! Form::open(['url' => 'products', 'method'=>'get', 'class'=>'form-inline']) !!}
              <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
                {!! Form::text('q', isset($q) ? $q : null, ['class'=>'search-input float-left ', 'placeholder' => 'Project naam/beschrijving...']) !!}
                {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
              </div>

            {!! Form::submit('Zoeken', ['class'=>'btn btn-search btn-primary float-left']) !!}
          {!! Form::close() !!}
        </div>
        <table class="table table-hover">
          <thead>
            <tr>
              <td>Naam</td>
              <td>Beschrijving</td>
              <td class="category-td">Categorie</td>
              <td>Edit & verwijderen</td>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <td>{{ $product->name }}</td>
              <td>{{ str_limit($product->model, 250) }}</td>
              <td class="category-td">
                @foreach ($product->categories as $category)
                  <span class="category label-primary">
                  <i class="fa fa-btn fa-tags"></i>
                  {{ $category->title }}</span>
                @endforeach
              </td>
              <td>
                {!! Form::model($product, ['route' => ['products.destroy', $product], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                 <a href="{{ route('products.edit', $product->id)}}"><img class="img-edit" src="{{ asset('img/edit.png') }}"></a> |
                  <button type="submit" class="delete-button"><img class="img-delete" src="{{ asset('img/delete.png') }}"></button>
                {!! Form::close()!!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $products->links() !!}
      </div>
    </div>
  </div>
@endsection
