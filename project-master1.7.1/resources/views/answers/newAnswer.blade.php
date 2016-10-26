@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="panel">
			<div class="panel-heading">
				Nieuw antwoord
			</div>
			<div class="panel-body">
				<form method="POST" action=" {{ url('answers/newAnswer/storeAnswer') }} ">
					{{ csrf_field() }}
					
					<ul>

						<li class="form-field">

							<input type="hidden" name="vraag_id" value="{{ $question->id }}">


						</li>

						<li class="form-field">
							<div class="{{ $errors->has('antwoord') ? ' has-error' : '' }}">
							
							<label class="float-left">Antwoord</label>

							<textarea rows="4" class="form-textarea" name="antwoord"></textarea>

								@if ($errors->has('antwoord'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('antwoord') }}</strong>
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