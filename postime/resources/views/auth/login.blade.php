@extends('layouts.default') @section('content')
<div id="app">
    <div class="wrapper">
        <h1 id="logo"><span class="adjuster">P</span></h1>
        <h2 id="page-title">post it your work timestamp</h2>
        <div id="login-form" class="form-group">
            {{Form::open(['route'=>'login'])}}

            <div class="form-item">
                <label class="form-label">your email</label>
                <span class="form-input">{{ Form::input('text', 'user_email', old('user_email'), array('required'=>'required')) }}</span>
                
                @if ($errors->has('user_email'))
                <span class="form-error-display">
                    {{ $errors->first('user_email') }}
                </span>
                @endif
            </div>

            <div class="form-item">
                <label class="form-label">password</label>
                <span class="form-input">{{ Form::input('password', 'password', old('password'), array('required'=>'required')) }}</span>
                
                @if ($errors->has('password'))
                <span class="form-error-display">
                    {{ $errors->first('password') }}
                </span>
                @endif
            </div>

            <div class="form-item">
                <label class="form-label">
                    {{ Form::input('checkbox', 'remember', old('remember') ? 'checked' : '') }}
                    <span class="form-label-tape">save login status</span>
                </label>
            </div>

            <div class="form-controlls">
                {{ Form::submit('Sign in') }}

                <div class="foget-password">
                    <a href="{{ route('password.request') }}">forgot your password?</a>
                </div>
            </div>

            {{ Form::close() }}
        </div>

        <div id="index-footer" class="bord">
            <h3 class="say-other">What is this ?</h3>
            <p class="say-postime">This is a mini blog for your working time records.</p>
            <h3 class="say-other">How to do a registration?</h3>
            <p class="say-postime">see <a href="{{ route('register') }}">here</a>.</p>
            <h3 class="say-other">Does it take time ?</h3>
            <p class="say-postime">A little. Sorry.</p>
            <h3 class="say-other">A free ?</h3>
            <p class="say-postime">Of course!</p>
            <h3 class="say-other">Why collection at my working timestamp ?</h3>
            <p class="say-postime">We study and learning of AI.
                <br> we feedback to you the new feature, new services, graph of your post data ... etc.</p>
        </div>

    </div>
</div>
@endsection