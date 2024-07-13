@extends('layout.app')

@section('title', 'AngularJS nginit')

{{-- {{ -- ng-initディレクティブはモデルの初期化を行う -- }} --}}
@section('ngInit', 'num = 1')

@section('head')
<style>
    body { color:gray; }
    h1 { font-size:18pt; font-weight:bold; }
    span.label { display:inline-block;width:50px; color:red; }
    input { width:100px; }
    .msg { font-size:14pt; font-weight:bold;color:gray; }
</style>
<script src="{{ asset('js/script_2.js') }}"></script>
@endsection

@section('content')
    <h1>データ表示</h1>
    <p>ID番号を入力して下さい。</p>
    <div ng-controller="HelloController as ctl">
        <div class="input">
            <span class="label">ID:</span>
            <input type="text" ng-model="num">
            <button ng-click="ctl.doAction(num)">click</button>
        </div>
        <p class="msg">@{{ ctl.getData() }}</p>
    </div>
    <div>
        <a href="{{ route('a4') }}">pre</a>
        {{-- <a href="{{ route('a') }}">next</a> --}}
    </div>
@endsection
