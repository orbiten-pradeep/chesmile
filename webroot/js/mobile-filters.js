var mobElt = $('#mobEventCategorySearch');
mobElt.tagsinput({
	allowDuplicates: false,
	itemValue: 'id',  // this will be used to set id of tag
	itemText: 'text' // this will be used to set text of tag
});
/*Dropdown category js*/

$(".mob-category-list .mob-cs-cat").click(function(event){
	var parentElem = $(this);
 	var catID = $(this).attr('data-id'); 
 	var catName = $(this).attr('data-text');
 	var apiUrl = $("#sub_category_api_url").val();

 	mobElt.tagsinput('removeAll');
 	var parentCatObj = { "id": catID, "text": catName};
	mobElt.tagsinput('add', parentCatObj);
	$('.bootstrap-tagsinput input').attr('placeholder', '');

    $.ajax({
        type:"POST",
        data:catID,
        data:{ "id":catID },
        ContentType : 'application/json',
        dataType: 'json',
        url: apiUrl,
        async:true,
        success: function(data) {
        	if(data != '') {
	        	//console.log(data);
	        	var html = '<ul class="list-group">';
	        	var rcnt = 0;
	            $.each(data, function(key, val){
	            	rcnt++;
	            	html += '<li class="list-group-item mob-cs-sub-cat"><div class="checkbox">\
					          <label id="'+key+'" text="'+val+'">\
					            <input type="checkbox" value="'+key+'" class="category">\
					            <span class="cr mob-cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>\
					           '+val+'</label>\
					        </div></li>';
	            })
	            html += '</ul>';
	            //console.log(html);
	            $(".mob-sub-category-list").html(html);
	            $(".inner-mob-category-list").hide();
	            $(".mob-sub-category-list").show();
	            $("#parent_category_id").val(catID);
	            //$('.bootstrap-tagsinput input').attr('placeholder', $('#eventCategorySearch').attr('placeholder'));
	            $(".modal-mob-filter-cat .modal-title").html(catName);	            
        	} 
        	else {
        		mobElt.tagsinput('removeAll');
				var obj = { "id": catID, "text": catName };
				//console.log(obj);
				mobElt.tagsinput('add', obj);
				$(".modal-mob-filter-cat .modal-title").html("Category");
				//$(".category_btn").html('<div id="mainMenu">Category <div class="mini-submenu"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div></div>');
				//$(".category_dropdown").hide();
				//console.log(mobElt.tagsinput('items'));
        	}
        },
        error: function (tab) {
            //$select.html('<option id="-1">none available</option>');
        }
    }); 
});

$(".mob-cat-clear").click( function(){ 
	$(".mob-sub-category-list").html('').hide();
	$(".inner-mob-category-list").show();
	mobElt.tagsinput('removeAll');
	$('.modal-mob-filter-cat .bootstrap-tagsinput input').attr('placeholder', $('#mobEventCategorySearch').attr('placeholder'));
	$(".modal-mob-filter-cat .modal-title").html("Category");
});

$(".mob-cat-apply").click( function(event){
	getEventListByFilter();
	$('.modal-mob-filter-cat').modal('toggle');
});

$(".mob-sub-category-list").on('click','label > input', function(event){
	var id = $(this).parent().attr('id');
	var text = $(this).parent().attr('text');
	var obj = { "id": id, "text": text};
	if($(this).is(':checked')) {		
		mobElt.tagsinput('add', obj);
		$('.mob-category-list .bootstrap-tagsinput input').attr('placeholder', '');
	} else {
		mobElt.tagsinput('remove', obj);
	}
	//console.log(mobElt.tagsinput('items'));
});

$(".filter-date-clear").click(function(){
	$("#filterDateVal").val("");
	$("#customDate").val("");
	$(".filter-date").hide();
	getEventListByFilter();
});

$(".mob-clear-filter").click(function(){
	$("#filterDateVal").val("");
	$("#customDate").val("");
	$("#areaSearch").val("");
	$("#eventTitle").val("");
	$("#homeAutocomplete2").val("");
	$("#eTitleAutocomplete").val("");

	$(".filter-area").hide();
	$(".filter-date").hide();
	$(".filter-etitle").hide();
	$(".f-sections").hide();
	getEventListByFilter();
});

$(function() {
    var mobstart = moment().subtract(29, 'days');
    var mobend = moment();

    function mobcb(start, end) {
        $('#mobreportrange span').html(mobstart.format('MMMM D, YY') + ' - ' + mobend.format('MMMM D, YY'));        
    }

    $('#mobreportrange').daterangepicker({
        startDate: mobstart,
        endDate: mobend,
        opens: "center",
        drops: "up",
        buttonClasses: "btn-mob"
    }, mobcb);
    mobcb(mobstart, mobend);

    $('#mobreportrange').on('apply.daterangepicker', function (ev, picker) {
	    var startDate = picker.startDate;
	    var endDate = picker.endDate;  
	    var joinDate = startDate.format('YYYY-MM-DD') + '|' + endDate.format('YYYY-MM-DD');
        //alert(joinDate);
        $("#customDate").val(joinDate);

        $("#filterDateVal").val('');
		$(".f-sections").css('display','inline-block');
		$(".filter-date").css('display','inline-block');
		$(".filter-date > label").html("selected date");

        if(!$("#mobFilter").val()){
			getEventListByFilter();
		}
	});

	$('#mobreportrange').on('show.daterangepicker', function(ev, picker) {
		//$(".daterangepicker.openscenter").css('overflow','scroll');
		//$(".daterangepicker.openscenter").css('height','550px');
	});    
});

$(".mob-apply-filter").click(function() {
	getEventListByFilter(); 
	$('.modal-mob-filter').modal('toggle');
});

$('#mobileFilterBtn').click(function() { 
    $('.modal-mob-filter')
        .prop('class', 'modal modal-mob-filter fade') // revert to default
        .addClass( $(this).data('direction') );
    $("#mobFilter").val(true);
    $('.modal-mob-filter').modal('show');
});

$('#mobileFilterCategoryBtn').click(function() { 
    $('.modal-mob-filter-cat')
        .prop('class', 'modal modal-mob-filter-cat fade') // revert to default
        .addClass( $(this).data('direction') );
    $("#mobFilter").val(true);
    $('.modal-mob-filter-cat').modal('show');
});

$('#mobileMenuBtn').click(function() {  
    $('.modal-mob-menus')
        .prop('class', 'modal modal-mob-menus fade') // revert to default
        .addClass( $(this).data('direction') );
    $('.modal-mob-menus').modal('show');
}); 