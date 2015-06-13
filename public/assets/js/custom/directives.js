angular
    .module('quizer')
    .directive('myRepeatDirective', myRepeatDirective);


var masonryInitialized = false;
myRepeatDirective.$inject = ['$timeout'];

function myRepeatDirective($timeout) {
  	return function(scope, element, attrs) {
        if (scope.$last) {
      	 	$timeout(function () {
      	 		/* Functions to handle file update */
             //onFeedUpdated();
      	 		//scope.$emit('ngRepeatFinished');
         	});
    	}
  	};
}