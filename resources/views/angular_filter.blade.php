@extends('layout.app')

@section('title', 'AngularJS nginit')

{{-- {{ -- ng-initディレクティブはモデルの初期化を行う -- }} --}}
@section('ngInit', 'num = 0')

@section('head')
<style>
    body { color:gray; }
    h1 { font-size:18pt; font-weight:bold; }
    span.label { display:inline-block;width:50px; color:red; }
    input { width:100px; }
    .msg { font-size:14pt; font-weight:bold;color:gray; }
    th { color:#eee; background-color:#999; padding: 5px 10px;}
    td { color:#333; background-color:#ddd; padding: 5px 10px;}
</style>
<script src="{{ asset('js/script_filter.js') }}"></script>
@endsection

@section('content')
<h1>データ表示</h1>
<div ng-controller="HelloController as ctl">
    <table>
        <tr><th>ID</th><th>NAME</th><th>PRICE</th><th>GET?</th><th>DATE</th></tr>
        <tr ng-repeat="obj in ctl.data">
            <td>@{{obj.id}}</td>
            <td>@{{obj.name}}</td>
            <td>@{{obj.price | currency:'¥'}}</td>
            <td>@{{obj.get | getIt}}</td>
            <td>@{{obj.date | date:'yyyy-MM-dd'}}</td>
        </tr>
    </table>
</div>
@endsection
