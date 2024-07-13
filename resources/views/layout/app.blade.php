<!doctype html>
<html ng-app="myApp">
<head>
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    {{-- {{ }}がbladeとangularで競合するため、$interpolateProviderでデリミタを変更する --}}
    <script>
        var app = angular.module('myApp', []);
        app.config(function($interpolateProvider) {
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
        });
    </script>
    @yield('head')
</head>
<body ng-init="@yield('ngInit')" ng-app="@yield('ngApp')">
    @yield('content')
</body>
</html>