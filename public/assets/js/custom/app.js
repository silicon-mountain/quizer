angular
	.module('quizer', ['restangular', 'ngSanitize'])
   .config(config)

function config($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
   $interpolateProvider.endSymbol('%>');
}