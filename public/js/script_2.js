angular.module('myApp', [])
    .controller('HelloController', function() {
        this.count = 1;
        this.data = [
            [0,'nobody','nodata...'],
            [1,'太郎','taro@yamada'],
            [2,'花子','hanako@flower'],
            [3,'幸子','sachico@happy']
        ];
        this.getData = function(){
            return this.data[this.count][0] + ': ' + 
                this.data[this.count][1] + ', ' + 
                this.data[this.count][2] + '.';
        };
        this.doAction = function(num){
            this.count = num;
        }
    });
