@extends('layouts.app')

@section('content')

<div class="container">
	
	<div class="account">
		
		<div class="panel">
			
			<div class="panel-heading">
				Account informatie
			</div>
			<div class="panel-body">

				<form method="POST" action="update">
					{{ method_field('PATCH') }}
					{{ csrf_field() }}

					<ul>
						<li class="form-field">
							<label class="float-left">Voornaam</label>
							<input type="text" class="form-input" name="name" value=" {{ $user->name }}">
						</li>
						<li class="form-field">
							<label class="float-left">achternaam</label>
							<input type="text" class="form-input" name="achternaam" value="{{ $user->achternaam }}">
						</li>
						<li class="form-field">
							<label class="float-left">geslacht</label>
							<input type="radio" class="" name="geslacht" value="man"> Man 

	                        <input type="radio" class="" name="geslacht" value="vrouw"> Vrouw 

	                        <input type="radio" class="" name="geslacht" value="andere"> Andere
						</li>
						<li class="form-field">
							<label class="float-left">Provincie</label>
							<input type="text" class="form-input" name="provincie" value="{{ $user->provincie }}">
						</li>
						<li class="form-field">
							<label class="float-left">Gemeente</label>
							<input type="text" class="form-input" name="gemeente" value="{{ $user->gemeente }}">
						</li>
						<li class="form-field">
							<label class="float-left">Postcode</label>
							<input type="text" class="form-input" name="postcode" value="{{ $user->postcode }}">
						</li>
						<li class="form-field">
							<label class="float-left">Straat</label>
							<input type="text" class="form-input" name="straat" value="{{ $user->straat }}">
						</li>
						<li class="form-field">
							<label class="float-left">Email</label>
							<input type="email" class="form-input" name="email" value="{{ $user->email }}">
						</li>
						<li class="form-field">
							<div class="align-button">
								<button class="btn" type="submit">Update</button>
								
							</div>
						</li>
					</ul>
				</form>
			</div>

		</div>

	</div>

</div>

@endsection