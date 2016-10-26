@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Fases<small><a href="{{ route('fases.create') }}" class="btn btn-manage">Nieuwe Fase</a></small></h3>
        {!! Form::open(['url' => 'fases', 'method'=>'get', 'class'=>'form-inline']) !!}
            <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
              {!! Form::text('q', isset($q) ? $q : null, ['class'=>'search-input float-left', 'placeholder' => 'Type fase...']) !!}
              {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
            </div>

          {!! Form::submit('Zoeken', ['class'=>'btn btn-search btn-primary float-left']) !!}
        {!! Form::close() !!}
           <table class="table table-hover">
          <thead>
            <tr>
              <td>Titel</td>
              <td>Project</td>
              <td>Edit & verwijderen</td>
            </tr>
          </thead>
          <tbody>
            @foreach($fases as $fase)
            <tr>
              <td>{{ $fase->title }}</td>
              <td>
                @foreach ($fase->products as $product)
                  {{ $product->name }}
                @endforeach
              </td>
              <td>
                {!! Form::model($fase, ['route' => ['fases.destroy', $fase], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                 <a href="{{ route('fases.edit', $fase->id)}}"><img class="img-edit" src="{{ asset('img/edit.png') }}"></a> |
                  <button type="submit" class="delete-button"><img class="img-delete" src="{{ asset('img/delete.png') }}"></button>
                {!! Form::close()!!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $fases->links() !!}
      </div>
    </div>
  </div>
@endsection
