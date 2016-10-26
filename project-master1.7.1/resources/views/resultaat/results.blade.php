@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="panel">
			
			<div class="panel-heading">

				Resultaten

			</div>

			<div class="panel-body">

				<div class="results">

					<ol>

						@foreach ($project->vragen as $vraag)

							<li class="form-field">
								<div class="question-title"> {{ $vraag->vraag }} </div>
								<ol>
									
									@foreach ($vraag->answers as $answer)

										<li class="form-field">{{ $answer->antwoord }}: {{ $answer->aantal }}</li>

									@endforeach

								</ol>
							</li>

						@endforeach

					</ol>

				</div>

			</div>

		</div>

	</div>

@endsection