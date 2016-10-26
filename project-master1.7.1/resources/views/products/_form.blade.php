<ul>
    <li class="form-field">
        <div class="{!! $errors->has('name') ? 'has-error' : '' !!}">
          {!! Form::label('name', 'Naam', ['class'=>'float-left']) !!}
          {!! Form::text('name', null, ['class'=>'form-input']) !!}
          {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </li>
    <li class="form-field">
        <div class="{!! $errors->has('model') ? 'has-error' : '' !!}">
          {!! Form::label('model', 'Beschrijving', ['class'=>'float-left']) !!}
          {!! Form::textarea('model', null, ['class'=>'form-textarea']) !!}
          {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
        </div>
    </li>
    <li class="form-field">
        <div class="{!! $errors->has('adres') ? 'has-error' : '' !!}">
          {!! Form::label('adres', 'Adres', ['class'=>'float-left']) !!}
          {!! Form::text('adres', null, ['class'=>'form-input']) !!}
          {!! $errors->first('adres', '<p class="help-block">:message</p>') !!}
        </div>
    </li>
    <li class="form-field">
        <div class="{!! $errors->has('category_lists') ? 'has-error' : '' !!}">
          {!! Form::label('category_lists', 'Categorieën', ['class'=>'float-left']) !!}
          {{-- Simplify things, no need to implement ajax for now --}}
          {!! Form::select('category_lists[]', [''=>'']+App\Category::lists('title','id')->all(), null, ['class'=>'form-select', 'multiple']) !!}

          {!! $errors->first('category_lists', '<p class="help-block">:message</p>') !!}
        </div>
    </li>
    <li class="form-field">
        <div class="{!! $errors->has('photo') ? 'has-error' : '' !!}">
          {!! Form::label('photo', 'Project foto (jpeg, png)', ['class'=>'float-left']) !!}
          {!! Form::file('photo') !!}
          {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}

          @if (isset($model) && $model->photo !== '')

            <div class="edit-project-picture">            
                <label class="float-left">Huidige foto</label>
            
                <img src="{{ url('/img/' . $model->photo) }}" class="img-rounded">
            </div>
            
          @endif
        </div>
    </li>
    <li class="form-field">
        <div class="align-button">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
        </div>
    </li>
</ul>