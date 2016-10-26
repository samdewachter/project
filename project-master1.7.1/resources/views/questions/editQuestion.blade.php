@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="panel">
			<div class="panel-heading">
				Edit vraag
			</div>
			<div class="panel-body">
				<form method="POST" action=" {{ url('questions/update',  $vraag->id) }}">
					{{ csrf_field() }}

					<ul>
						<li class="form-field">
							
							<label class="float-left">Vraag</label>
							<textarea name="vraag" rows="4" class="form-textarea">{{ $vraag->vraag }}</textarea>

						</li>

						<li class="form-field">
							
							<div class="align-button">
									
								<button type="submit" class="btn">Edit</button>

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