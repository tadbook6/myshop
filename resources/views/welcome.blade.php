@extends('layouts.app')
@section('content')
    <h1>商品一覽</h1>
@endsection

@section('my_menu')
    <li class="nav-item">
        @parent
        <a class="nav-link" href="/home">回控制台</a>
    </li>
@endsection