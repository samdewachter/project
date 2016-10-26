@extends('layouts.app')

@section('content')
<div class="container">
    <div class="register">
        <div class="panel">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <ul>
                        <li class="form-field">
                            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="float-left">Voornaam</label>

                                <input type="text" class="form-input" name="name" value="{{ old('name') }}">

                            </div>
                        </li>

                        <li>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </li>

                        <li class="form-field">
                            <div class="{{ $errors->has('achternaam') ? ' has-error' : '' }}">
                                <label class="float-left">Achternaam</label>

                                <input type="text" class="form-input" name="achternaam" value="{{ old('achternaam') }}">

                                
                            </div>
                        </li>

                        <li>
                            @if ($errors->has('achternaam'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('achternaam') }}</strong>
                                </span>
                            @endif
                        </li>

                        <li class="form-field">
                            <div class="{{ $errors->has('geslacht') ? ' has-error' : '' }}">
                                <label class="float-left">Geslacht</label>

                                <input type="radio" class="" name="geslacht" value="man"> Man 

                                <input type="radio" class="" name="geslacht" value="vrouw"> Vrouw 

                                <input type="radio" class="" name="geslacht" value="andere"> Andere 
                            </div>
                        </li>
                        <li>
                            @if ($errors->has('geslacht'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('geslacht') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li class="form-field">
                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="float-left">E-Mailadres</label>

                                <input type="email" class="form-input" name="email" value="{{ old('email') }}">
                            </div>
                        </li>
                        <li>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li class="form-field">
                            <div class="{{ $errors->has('provincie') ? ' has-error' : '' }}">
                                <label class="float-left">Provincie</label>

                                <input type="text" class="form-input" name="provincie" value="{{ old('provincie') }}">

                            </div>
                        </li>
                        <li>
                            @if ($errors->has('provincie'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('provincie') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li class="form-field">
                            <div class="{{ $errors->has('gemeente') ? ' has-error' : '' }}">
                                <label class="float-left">Gemeente</label>

                                <input type="text" class="form-input" name="gemeente" value="{{ old('gemeente') }}">
                            </div>
                        </li>
                        <li>
                            @if ($errors->has('gemeente'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gemeente') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li class="form-field">
                            <div class="{{ $errors->has('postcode') ? ' has-error' : '' }}">
                                <label class="float-left">Postcode</label>

                                <input type="text" class="form-input" name="postcode" value="{{ old('postcode') }}">

                            </div>
                        </li>
                        <li>
                            @if ($errors->has('postcode'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('postcode') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li class="form-field">
                            <div class="{{ $errors->has('straat') ? ' has-error' : '' }}">
                                <label class="float-left">Straatnaam + Huisnummer</label>

                                <input type="text" class="form-input" name="straat" value="{{ old('straat') }}">

                            </div>
                        </li>
                        <li>
                            @if ($errors->has('straat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('straat') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li class="form-field">
                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="float-left">Wachtwoord</label>

                                <input type="password" class="form-input" name="password">
                            </div>
                        </li>
                        <li>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li class="form-field">
                            <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="float-left">Wachtwoord herhalen</label>

                                <input type="password" class="form-input" name="password_confirmation">
                            </div>
                        </li>
                        <li>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li class="form-field">
                            <div class="register-button">
                                <button type="submit" class="btn">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </li>
                    </ul>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
