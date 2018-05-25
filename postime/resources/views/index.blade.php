@extends('layouts.default')

@section('content')
<div class="wrapper">
    <h1 id="logo"><span class="adjuster">P</span></h1>

    <div id="login-form">
        {{Form::open(['url'=>'/'])}}
        
            <div class="form-item">
                <label class="form-label">your email</label>
                <span class="form-input">{{Form::input('text', 'user_email')}}</span>
            </div>
            
            <div class="form-item">
                <label class="form-label">password</label>
                <span class="form-input">{{Form::input('password', 'user_password')}}</span>
            </div>
            
            <div class="form-item">
                <label class="form-label">
                    {{Form::input('checkbox', 'remember')}}
                    <span class="form-label-tape">remember me</span>
                </label>
            </div>

            <div class="form-controlls">
                {{Form::submit('Signin')}}
            </div>

        {{Form::close()}}
    </div>

</div>
@endsection
