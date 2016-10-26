@extends('layouts.app')

@section('content')

	<div class="container">

		<h3>Vragen<small><a href="{{ url('questions/newQuestion') }}" class="btn btn-manage">Nieuwe Vraag</a></small></h3>

		<table class="table table-hover">
			<thead>
				<td>Project</td>
				<td>Vragen & antwoorden</td>
			</thead>
			<tbody>
				@foreach ($projects as $project)

					<tr>
						<td>{{ $project->name }}</td>
						<td>
							<div class="question-answers-wrapper"> 
								@foreach ($project->vragen as $vraag)
									<div class="question-answers">
										<ul>
											<li>
												<span class="bold">{{ $vraag->vraag }}</span> <a class="btn"
												href="{{ url($vraag->id,'newAnswer' ) }}">Nieuw antwoord</a> 
                                                <a id='links' href="{{ url('questions/edit', $vraag->id)}}">
                                                    <img class="img-edit-questions" src="{{ asset('img/edit.png') }}">
                                                </a> |
                                                <a href="{{ url('questions/delete', $vraag->id)}}">
                                                <img class="img-delete" src="{{ asset('img/delete.png') }}">
                                                </a> 
												<ol>
													@foreach ($vraag->answers as $answer)

														<li>{{ $answer->antwoord }} 
                                                            <a href="{{ url('questions/anwserdelete', $answer->id)}}">
                                                            <img class="img-delete" src="{{ asset('img/delete.png') }}">
                                                            </a>    
                                                        </li>

													@endforeach
												</ol>
											</li>
										</ul>
									</div>
								@endforeach
							</div>
						</td>
					</tr>

				@endforeach				
			</tbody>
		</table>

	</div>

@stop