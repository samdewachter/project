@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="panel">
			
			<div class="panel-heading">

				Kies een project

			</div>

			<div class="panel-body">

				<ul>

					@foreach ($projects as $project)

						<li class="form-field"><h2><a class="project-link" href="resultaten/{{ $project->id }}">{{ $project->name }}</a></h2></li>
                        <li><img src="{{ $project->photo_path }}" class="img-rounded"> </li>

					@endforeach

				</ul>

			</div>

		</div>

	</div>

@endsection