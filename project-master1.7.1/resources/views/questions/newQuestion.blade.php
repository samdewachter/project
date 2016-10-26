@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="panel">
			<div class="panel-heading">
				Nieuwe vraag
			</div>
			<div class="panel-body">
				<form method="POST" action=" {{ url('questions/newQuestions/storeQuestion') }}">
					{{ csrf_field() }}

					<ul>
						<li class="form-field">

							<label class="float-left">Project</label>

							<select name="product_id">
								@foreach($projects as $project)

									<option value="{{ $project->id }}"> {{ $project->name }} </option>

								@endforeach
							</select>
						</li>
						<li class="form-field">
							<div class="{{ $errors->has('vraag') ? ' has-error' : '' }}">
							
							<label class="float-left">Vraag</label>
							<textarea name="vraag" rows="4" class="form-textarea"></textarea>

							@if ($errors->has('vraag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vraag') }}</strong>
                                    </span>
                                @endif
                            </div>

						</li>

						<li class="form-field">
							
							<div class="align-button">
									
								<button type="submit" class="btn">Verzenden</button>

							</div>

						</li>

						<li class="form-field">
							
							<div class="align-button">
									
								<a class="btn" href="{{ url('questions') }}">Back</a>

							</div>

						</li>

					</ul>
				</form>
			</div>
		</div>

	</div>

@stop