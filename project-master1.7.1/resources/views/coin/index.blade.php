@extends('layouts.app')
@section('content')
<?php
$positie = 1;
?>

    <div class="container clearfix">
        <div class="coin-box1-wrapper">
            <div class="coin-box1">
                <div class="box">
                    <div class="title">

                        <h2>Jouw coins</h2>

                    </div>
                    <div class="">

                <p>
                        Dag {{ $user->name }} je hebt <b>{{ $user->coin }}</b> <img class="img-coin"src="{{ URL::asset('img/coin.png') }}">, 
                        @if ($user->coin < 5 )
                            Je bent <img class="img-reward" src="{{ URL::asset('img/Noob.png') }}"> bronze level.
                        @elseif ($user->coin < 10)
                            Je bent <img class="img-reward" src="{{ URL::asset('img/silver.png') }}"> silver level.
                        @elseif ($user->coin < 20)
                            Je bent <img class="img-reward" src="{{ URL::asset('img/gold.png') }}"> gold level.
                        @elseif ($user->coin < 50)
                            Je bent <img class="img-reward" src="{{ URL::asset('img/plat.png') }}"> plat level.
                        @elseif ($user->coin < 100)
                            Je bent <img class="img-reward" src="{{ URL::asset('img/diamond.png') }}"> diamond level.
                        @elseif ($user->coin >= 100)
                            Je bent <img class="img-reward" src="{{ URL::asset('img/master.png') }}"> master level.
                        @else
                        @endif 
                    </p>
                    @if ($user->coin < 5 )
                        <img class=""src="{{ URL::asset('img/niv1.png') }}">
                    @elseif ($user->coin < 10)
                        <img class=""src="{{ URL::asset('img/niv2.png') }}">
                    @elseif ($user->coin < 20)
                        <img class=""src="{{ URL::asset('img/niv3.png') }}">
                    @elseif ($user->coin < 50)
                        <img class=""src="{{ URL::asset('img/niv4.png') }}">
                    @elseif ($user->coin < 100)
                        <img class=""src="{{ URL::asset('img/niv5.png') }}">
                    @elseif ($user->coin >= 100)
                        <img class=""src="{{ URL::asset('img/niv6.png') }}">
                    @else
                    @endif
                    
    
                    </div>
                </div>
            </div>
        </div>

        <div class="coin-box2-wrapper">
            <div class="coin-box2 clearfix">
                <div class="title">
                        <h2>Score bord</h2>
                </div>
                <div class="box" id="rewardtext">
                     <table class="table table-hover">
                            <thead>
                                <tr>
                                  <td>Positie </td>
                                  <td>Naam</td>
                                  <td>Aantal Coins <img class="img-coin"src="{{ URL::asset('img/coin.png') }}"></td>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($coin as $coins)
                                <tr>
                                  <td>{{ $positie++ }}.  </td>
                                  <td>
                                      {{ $coins->name }} 
                                        @if ($coins->coin < 5 )
                                            <img class="img-reward" src="{{ URL::asset('img/Noob.png') }}">
                                        @elseif ($coins->coin < 10)
                                            <img class="img-reward" src="{{ URL::asset('img/silver.png') }}">
                                        @elseif ($coins->coin < 20)
                                            <img class="img-reward" src="{{ URL::asset('img/gold.png') }}">
                                        @elseif ($coins->coin < 50)
                                            <img class="img-reward" src="{{ URL::asset('img/plat.png') }}">
                                        @elseif ($coins->coin < 100)
                                            <img class="img-reward" src="{{ URL::asset('img/diamond.png') }}">
                                        @elseif ($coins->coin >= 100)
                                            <img class="img-reward" src="{{ URL::asset('img/master.png') }}">
                                        @else
                                        @endif      
                                  </td>
                                  <td>{{ $coins->coin }} <img class="img-coin"src="{{ URL::asset('img/coin.png') }}"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection