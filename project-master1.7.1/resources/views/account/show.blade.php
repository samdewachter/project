@extends('layouts.app')

@section('content')

<div class="container">
	
	<div class="account">
		
		<div class="panel">
			
			<div class="panel-heading">
				Account informatie
			</div>
			<div class="panel-body">

				<ul>
					<li class="form-field">
						<label class="float-left">Voornaam</label> <span>{{ $user->name }}</span>
					</li>
					<li class="form-field">
						<label class="float-left">achternaam</label> <span>{{ $user->achternaam }}</span>
					</li>
					<li class="form-field">
						<label class="float-left">geslacht</label> <span>{{ $user->geslacht }}</span>
					</li>
					<li class="form-field">
						<label class="float-left">Provincie</label> <span>{{ $user->provincie }}</span>
					</li>
					<li class="form-field">
						<label class="float-left">Gemeente</label> <span>{{ $user->gemeente }}</span>
					</li>
					<li class="form-field">
						<label class="float-left">Postcode</label> <span>{{ $user->postcode }}</span>
					</li>
					<li class="form-field">
						<label class="float-left">Straat</label> <span>{{ $user->straat }}</span>
					</li>
					<li class="form-field">
						<label class="float-left">Email</label> <span>{{ $user->email }}</span>
					</li>
					<li class="form-field">
						<label class="float-left">Punten</label> <span>{{ $user->coin }} <img class="img-coin" src="{{ asset('img/coin.png') }}"> <a href="{{ url('redeemCoins') }}" class="btn">Gebruik je punten!</a></span>
					</li>
					<li class="form-field">
						<div class="align-button">
							<a href="{{ Auth::user()->id }}/edit" class="btn">Edit</a>
							
						</div>
					</li>
				</ul>

			</div>

		</div>

	</div>

</div>

@endsection