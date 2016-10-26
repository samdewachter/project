@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Categorieën<small><a href="{{ route('categories.create') }}" class="btn btn-manage">Nieuwe Categorie</a></small></h3>
        {!! Form::open(['url' => 'categories', 'method'=>'get', 'class'=>'form-inline']) !!}
            <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
              {!! Form::text('q', isset($q) ? $q : null, ['class'=>'search-input float-left', 'placeholder' => 'Type categorie...']) !!}
              {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
            </div>

          {!! Form::submit('Zoeken', ['class'=>'btn btn-search btn-primary float-left']) !!}
        {!! Form::close() !!}
        <table class="table table-hover">
          <thead>
            <tr>
              <td>Titel</td>
              <td>Parent</td>
              <td>Edit & verijwderen</td>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{ $category->title }}</td>
              <td>{{ $category->parent ? $category->parent->title : '' }}</td>
              <td>
                {!! Form::model($category, ['route' => ['categories.destroy', $category], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                 <a href="{{ route('categories.edit', $category->id)}}"><img class="img-edit" src="{{ asset('img/edit.png') }}"></a> |
                  <button type="submit" class="delete-button"><img class="img-delete" src="{{ asset('img/delete.png') }}"></button>
                {!! Form::close()!!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $categories->links() !!}
      </div>
    </div>
  </div>
@endsection
