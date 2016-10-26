@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset paswoord</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {!! csrf_field() !!}

                        <ul>

                            <input type="hidden" name="token" value="{{ $token }}">
                            <li class="form-field">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="float-left">Email</label>

                                    <div class="col-md-6">
                                        <input type="email" class="form-input" name="email" value="{{ $email or old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <li class="form-field">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="float-left">Paswoord</label>

                                    <div class="col-md-6">
                                        <input type="password" class="form-input" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <li class="form-field">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label class="float-left">Bevestig paswoord</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-input" name="password_confirmation">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <li class="form-field">
                                <div class="form-group">
                                    <div class="button-align">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-refresh"></i>Reset paswoord
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
