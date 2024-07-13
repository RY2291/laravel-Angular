<!doctype html>
<html>
<head>
    <title>AngularJS Sample</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script>
        var app = angular.module('myapp', []);
        app.config(function($interpolateProvider) {
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
        });
    </script>
    <script src="{{ asset('js/script_1.js') }}"></script>
    <style>
        body { color:gray; }
        h1 { font-size:18pt; font-weight:bold; }
        span.label { display:inline-block;width:50px; color:red; }
        input { width:100px; }
        .msg { font-size:14pt; font-weight:bold;color:gray; }
    </style>
</head>
<body ng-app="myapp" ng-init="num = 1000">
    <h1>税額計算</h1>
    <p>金額を入力して下さい。</p>
    <div ng-controller="HelloController as ctl">
        <div class="input">
            <span class="label">tax:</span>
            <input type="text" ng-model="ctl.tax">％
        </div>
        <div class="input">
            <span class="label">price:</span>
            <input type="text" ng-model="num">円
        </div>
        {{-- $interpolateProviderはクライアントサイド（ブラウザ側）でAngularJSのテンプレートエンジンがどのシンボルを使うかを設定します。
        しかし、LaravelのBladeはサーバーサイド（PHP側）でテンプレートを処理し、クライアントにHTMLを送る前に全てのBladeテンプレートを解釈します。
        これにより、[[ ]]を含むテンプレートの一部がサーバーサイドで処理されてしまい、クライアントサイドでAngularJSがそれを認識する前に変換されます。 --}}
        {{-- したがって、@をつけることでlaravelが{{ }}エコー文として認識しないで、そのままHTMLとして返している --}}
        <p class="msg">税込：　@{{ ctl.calcWithTax(num) }}円</p>
        <p class="msg">税抜：　@{{ ctl.calcWithoutTax(num) }}円</p>
    </div>

    <div>
        <a href="{{ route('a3') }}">pre</a>
        <a href="{{ route('a5') }}">next</a>
    </div>
</body>
</html>
