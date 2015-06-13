/**
 * This are the helper functions and event handlers which can be used for both view types
 * and also in other modules
 * The helper functions will be moved later to a helper.js file so as to to enforce the DRY principle
 */
function loadMoreQuestions(Questionservice, vm) {
 	var calling_next_page = false;
 	$(document).on('#load-more','inview', function (event, visible) {
 		if(!visible || calling_next_page) {
 			return;
 		}
 		paginator = $('#file-layout-container').data('paginator');

 		if(paginator) {
 			calling_next_page = true;
 			Questionservice.getFiles(paginator).then(function(data) {
 				calling_next_page = false;
 				if (data.length > 0){
 					vm.files = vm.files.concat(data);
 					$('#file-layout-container').data('paginator', paginator+1);
 				}
 				else {
 					$('#load-more').slideUp(400, function() {
 						$('#load-more').remove();
 					});
 				}
 			});
 		}
 	});
}
