<!doctype html>
<html ng-app="myApp">
<head>
    <title>AngularJS Sample</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

    <script>
        var app = angular.module('myApp', []);
        app.config(function($interpolateProvider) {
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
        });
    </script>
</head>
<body>
    <div>
        <p>input:<input type="text" ng-model="msg"></p>
        <p>you typed: [[msg]].</p>
    </div>
</body>
</html>
