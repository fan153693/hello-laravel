@extends('layouts.default')
@section('title','主页')
@section('content')
  <div class="jumbotron">
    <h1>开启Laravel之旅</h1>
    <h2>开启Laravel之旅</h2>
    <p class="lead">
      你现在所看到的是w做的微博项目的主页
    </p>
    <p>一切都将从这里开始</p>
    <p>
      <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册吧!</a>
    </p>
  </div>
@stop
