let myApp = angular.module('myApp', []);
let hello = myApp.controller('HelloController', function(){
    this.count = 1;
    this.data = [
        {id:0,name:'no data',price:0,get:false,date:1450100000000},
        {id:1,name:'Android phone',price:7800,get:true,date:1450400000000},
        {id:2,name:'New iPhone',price:549020,get:false,date:1450200000000},
        {id:3,name:'windows phone',price:38765,get:true,date:1450300000000}
    ];
    this.getData = function(){
        return this.data[this.count].id + ': ' + 
            this.data[this.count].name + ', ' + 
            this.data[this.count].price + '.' +
            this.data[this.count].date;
    };
})

hello.filter('getIt', function(){
    return function(val) {
        return val ? "✔" : "－";
    };
})


