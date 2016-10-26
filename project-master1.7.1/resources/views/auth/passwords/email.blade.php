@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Paswoord</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}
                        <ul>

                            <li class="form-field">

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="float-left">Email</label>

                                    <div class="col-md-6">
                                        <input type="email" class="form-input" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </li>

                            <li class="form-field">
                                <div class="form-group">
                                    <div class="algin-button">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-envelope"></i>Paswoord reset link verzenden
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
