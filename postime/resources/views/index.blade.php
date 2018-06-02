@extends('layouts.default') @section('content')
<div id="app">
    <div class="wrapper">
        <h1 id="logo"><span class="adjuster">P</span></h1>
        <h2 id="page-title">post it your work timestamp</h2>
    </div>
</div>

<a href="{{ route('logout') }}">sign out</a>
@endsection