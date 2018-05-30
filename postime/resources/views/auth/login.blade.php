@extends('layouts.default')

@section('content')
<div class="wrapper">
    <!-- <h1 id="logo"><span class="adjuster">P</span></h1> -->

    <h1 id="site-title">post it your work timestamp</h1>

    <div id="login-form">
        {{Form::open(['url'=>'/'])}}
        
            <div class="form-item">
                <label class="form-label">your email</label>
                <span class="form-input">{{ Form::input('text', 'user_email', old('user_email'), array('required'=>'required')) }}</span>
            </div>
            
            <div class="form-item">
                <label class="form-label">password</label>
                <span class="form-input">{{ Form::input('password', 'user_password', old('user_email'), array('required'=>'required')) }}</span>
            </div>
            
            <div class="form-item">
                <label class="form-label">
                    {{ Form::input('checkbox', 'remember', old('remember') ? 'checked' : '') }}
                    <span class="form-label-tape">save login status</span>
                </label>
            </div>

            <div class="form-controlls">
                {{ Form::submit('Signin') }}

                <div class="foget-password">
                    <a href="{{ route('password.request') }}">forget your password?</a>
                </div>
            </div>

        {{ Form::close() }}
    </div>

    <div id="index-footer">
        <p class="say-other">What is this ?</p>
        <p class="say-postime">This is a mini blog for your working time records.</p>
        <p class="say-other">How to do a registration?</p>
        <p class="say-postime">see <a href="{{ route('register') }}">here</a>.</p>
        <p class="say-other">Does it take time ?</p>
        <p class="say-postime">A little. Sorry.</p>
        <p class="say-other">A free ?</p>
        <p class="say-postime">Of course!</p>
        <p class="say-other">Why collection at my working timestamp ?</p>
        <p class="say-postime">We study and learning of AI.<br>
            we feedback to you the new feature, new services, graph of your post data ... etc.</p>
    </div>

</div>
@endsection
