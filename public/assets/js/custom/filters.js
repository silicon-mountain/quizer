angular.module('quizer')
  .filter('fileIsVisible', fileIsVisible)
  .filter('appendPageURL', appendPageURL)
  .filter('fileType', fileType)
  .filter('hasPreviewImage', hasPreviewImage)
  .filter('limitFileName', limitFileName);

function fileIsVisible(){
	return function(input) {
		return input.show;
	};
}

function appendPageURL() {
	return function(input) {
		return baseShareUrl() +'/' + input;
	};
}

function fileType(){
	return function(input) {
		return categorizeFile(input);
	};
}

function hasPreviewImage(){
	return function(input) {
		return input? 'has_preview': '';
	};
}

function limitFileName() {
	return function(input) {
		if ( input.length > 24 ){
			input  = input.substring(0,21) + "...";
		}
		return input;
	};
}