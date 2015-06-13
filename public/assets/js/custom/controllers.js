angular
    .module('quizer')
    .controller('QuestionListController', QuestionListController);

QuestionListController.$inject = ['Restangular', 'QuestionService'];

function QuestionListController(Restangular, QuestionService) {
	var vm = this;
	vm.is_context_initialized = false;
	angular.element(document).ready(function () {
		vm.loadData();
		setInterval(function(){
			vm.loadData();
		},1000);
	});

	vm.loadData = function () {
		$('#question-list').data('paginator', 1);
		QuestionService.getQuestions().then(function (data) {
			vm.questions = data;
			$('#question-list').data('paginator', 2);

			if (!vm.is_context_initialized) {
				/* Loading more QuestionS when the ticker is viewed */
				loadMoreQuestions(QuestionService, vm);
				vm.is_context_initialized = true;
			}
		});
	};

	vm.upVote = function(id) {
		//$(that).hidden();
		var questionIndex = getQuestionIndexFromID(id);
		vm.questions[questionIndex].votes = '' +  ( parseInt(vm.questions[questionIndex].votes) + 1 );
		QuestionService.upvoteQuestion(id);
	};


	function getQuestionIndexFromID(id) {
		for (var i = 0; i < vm.questions.length; i++) {
			if (vm.questions[i].id ===  id) {
				return i;
			}
		}
	}
}