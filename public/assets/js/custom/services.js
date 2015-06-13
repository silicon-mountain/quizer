angular.module('quizer')
 	.factory('QuestionService', QuestionService);

QuestionService.$inject = ['Restangular'];

function QuestionService(Restangular){
  	var Question = Restangular.all( 'questions' );
  	return {
    	getQuestions: getQuestions,
    	upvoteQuestion: upvoteQuestion,
  	}

  	function getQuestions(paginator){
    	paginator = paginator || 1;
    	return Question.getList({page: paginator});
  	}

  	function upvoteQuestion(question_id) {
  		return Restangular.one( 'upvote', question_id ).get();
  	}
}