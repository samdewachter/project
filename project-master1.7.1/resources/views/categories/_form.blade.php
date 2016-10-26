<ul>
	<li class="form-field">
		<div class="{!! $errors->has('title') ? 'has-error' : '' !!}">
		  {!! Form::label('title', 'Titel', ['class'=>'float-left']) !!}
		  {!! Form::text('title', null, ['class'=>'form-input']) !!}
		  {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
		</div>
	</li>
	<li class="form-field">
		<div class="{!! $errors->has('parent_id') ? 'has-error' : '' !!}">
		  {!! Form::label('parent_id', 'Parent', ['class'=>'float-left']) !!}
		  {!! Form::select('parent_id', [''=>'']+App\Category::lists('title','id')->all(), null, ['class'=>'form-input']) !!}
		  {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
		</div>
	</li>
	<li class="form-field">
		<div class="align-button"> 
			{!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
		</div>
	</li>
</ul>
