<ul>
    <li class="form-field">
        <div class="{!! $errors->has('title') ? 'has-error' : '' !!}">
          {!! Form::label('title', 'Titel', ['class'=>'float-left']) !!}
          {!! Form::text('title', null, ['class'=>'form-input']) !!}
          {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
        </div>
    </li>
    <li class="form-field">
        <div class="{!! $errors->has('beschrijving') ? 'has-error' : '' !!}">
          {!! Form::label('beschrijving', 'Beschrijving', ['class'=>'float-left']) !!}
          {!! Form::text('beschrijving', null, ['class'=>'form-input']) !!}
          {!! $errors->first('beschrijving', '<p class="help-block">:message</p>') !!}
        </div>
    </li>
    <li class="form-field">
        <div class="{!! $errors->has('datum') ? 'has-error' : '' !!}">
          {!! Form::label('datum', 'Datum', ['class'=>'float-left']) !!}
          {!! Form::date('datum', null, ['class'=>'form-input']) !!}
          {!! $errors->first('datum', '<p class="help-block">:message</p>') !!}
        </div>
    </li>
    <li class="form-field">
        <div class="{!! $errors->has('product_lists') ? 'has-error' : '' !!}">
          {!! Form::label('product_lists', 'Project', ['class'=>'float-left']) !!}
          {{-- Simplify things, no need to implement ajax for now --}}
          {!! Form::select('product_lists[]', [''=>'selecteer een project']+App\Product::lists('name','id')->all(), null, ['class'=>'form-input select-multiple', 'required']) !!}

          {!! $errors->first('product_lists', '<p class="help-block">:message</p>') !!}
        </div>
    </li>
    <li class="form-field">
        <div class="align-button">
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn']) !!}
        </div>
    </li>
</ul>
