@extends('layout.app')

@section('title', 'AngularJS nginit')

{{-- ng-initディレクティブはモデルの初期化を行う --}}
@section('ngInit', 'num = 100')

@section('head')
<!-- 追加のCSSやJSをここに書くことができます -->
@endsection

@section('content')
        <div>
        <p>price:<input type="text" ng-model="num"></p>
        <p style="font-weight:[[(num >= 10000) * 700]]">
            you typed: [[num * 1.08]].</p>
        </div>
@endsection