@extends('layouts.default')


@section('content')
<div id="app">
    <div class="container">
        <h1 id="logo"><span class="adjuster">P</span></h1>
        <h2 id="page-title">Register in Postime</h2>

        {{ Form::open(['route'=>'register', 'class'=>'form-group landscape']) }}
        
        <div class="form-item">
            <label for="user_name">Your name</label>
            <span class="form-input">{{ Form::input('text', 'user_name', old('user_name'), array('required'=>'required')) }}</span>
        </div>
        
        <div class="form-item">
            <label for="user_email">Email</label>
            <span class="form-input">{{ Form::input('text', 'user_email', old('user_email'), array('required'=>'required')) }}</span>
        </div>
        
        <div class="form-item">
            <label for="user_password">Password</label>
            <span class="form-input">{{ Form::input('text', 'user_password', old('user_password'), array('required'=>'required')) }}</span>
        </div>
        
        <div class="form-item">
            <label for="user_password">Confirm of password</label>
            <span class="form-input">{{ Form::input('text', 'user_password', null, array('required'=>'required')) }}</span>
        </div>

        <div class="form-controlls">

            <div class="bord">
                <h2>All input form are required.</h2>
                <p>Read <a href="">Terms of service (JP)</a>.</p>
            </div>

            {{ Form::submit('OK, Sign up!') }}
        </div>

        {{ Form::close() }}

    </div>
</div>

@endsection


{{--
    @section('content_old')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    --}}