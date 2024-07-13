angular.module('myapp', [])
    .controller('HelloController', function() {
        this.tax = 8;

        
        this.calcWithTax = function(val) {
            if (!val) return 0;
            return Math.floor(val * (100 + this.tax) / 100);
        };
        
        this.calcWithoutTax = function(val) {
            if (!val) return 0;
            return Math.floor(val * 100 / (100 + this.tax));
        };
        console.log(this); // コンソールログの出力例
    });
