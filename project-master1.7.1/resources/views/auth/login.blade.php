@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login">
        <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}

                    <ul>
                        <li class="form-field">
                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="float-left">E-Mail Address</label>

                                <input type="email" id="email" class="form-input" name="email" value="{{ old('email') }}">

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
                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="float-left" for="login-password">Password</label>

                                <input type="password" class="form-input" id="login-password" name="password">

                                
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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </li>
                        <li class="form-field">                            
                            <div class="login-password">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
