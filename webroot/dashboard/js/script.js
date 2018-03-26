$(document).ready(function() {
	//alert(1);
	$('.radio-select-list').change(function(){
		//alert(2);
		$('a#deactivate').attr('href',  $(this).attr('deactivate-href-url')); // better if you add an id to anchor & then
		$('a#activate').attr('href', $(this).attr('activate-href-url')); // better if you add an id to anchor & then
		$('a#view').attr('href', $(this).attr('view-href-url')); // better if you add an id to anchor & then
		$('a#edit').attr('href',  $(this).attr('edit-href-url')); // better if you add an id to anchor & then 
		$('a#add').attr('href',  $(this).attr('add-href-url')); // better if you add an id to anchor & then $('a#idofAnchor')
	});
});