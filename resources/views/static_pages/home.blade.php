@extends('layouts.default')
@section('content')
<div class="jumbotron">
    <h1>test</h1>
    <p class="lead">
        你现在所看到的是 <a href="https://laravel-china.org/courses/laravel-essential-tra"></a>
    </p>
<p>
一切，将从这里开始。
</p>
<p>
    <a class=" btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
</p>
</div>
@stop