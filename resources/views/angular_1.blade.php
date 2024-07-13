@extends('layout.app')

@section('title', 'AngularJS Sample')

@section('head')
<!-- 追加のCSSやJSをここに書くことができます -->
@endsection

@section('content')
<div>
    <p>input:<input type="text" ng-model="msg"></p>
    <p>you typed: [[msg]].</p>
</div>
@endsection
