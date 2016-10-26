@extends('layouts.app')

@section('content')

<div class="container">
	
	<div class="account">
		
		<div class="panel">
			
			<div class="panel-heading">
				Punten inwisselen
			</div>
			<div class="panel-body">

				<div>
					
                    <ul>
                    	
                    	<li class="form-field">
                    		
                    		<h2>100 Coins</h2>

                    		<a class="btn" @if($user->coin > 100) href="{{ url('puntenInwisselen/update')}}" @else href="#" @endif>Pizza hut €5 korting.</a>

                    	</li>
                    	<li class="form-field">
                    		
                    		<a class="btn" @if($user->coin > 100) href="{{ url('puntenInwisselen/update')}}" @else href="#" @endif>Fnac €5 korting.</a>

                    	</li>
                    	<li class="form-field">

                    		<h2>500 Coins</h2>
                    		
                    		<a class="btn" @if($user->coin > 100) href="{{ url('puntenInwisselen/update')}}" @else href="#" @endif">Inkom kaart voor de zoo van Antwerpen.</a>

                    	</li>

                    </ul>
                    <!--<a href="{{ url('puntenInwisselen/update')}}"><img class="button" src="img/RedeemButton.png"></a>-->

				</div>

			</div>

		</div>

	</div>

</div>

@endsection