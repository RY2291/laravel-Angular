@extends('layout.app')

@section('title', 'AngularJS nginit')

{{-- {{ -- ng-initディレクティブはモデルの初期化を行う -- }} --}}
@section('ngInit', 'x = 100;y = 100; w = 100;h = 100')

@section('head')
<style>
    #rect {
        background-color:red;
        position:absolute;
    }
    </style>
@endsection

@section('content')
<div>
    x:<input type="number" min="0" max="300" ng-model="x" size="5">
    y:<input type="number" min="0" max="300" ng-model="y" size="5">
    w:<input type="number" min="0" max="300" ng-model="w" size="5">
    h:<input type="number" min="0" max="300" ng-model="h" size="5">
</div>
<div id="rect" style="left:[[x]]px;top:[[y]]px;width:[[w]]px;height:[[h]]px"></div>
@endsection