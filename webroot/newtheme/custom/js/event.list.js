var chennaiSmile = {};
chennaiSmile.eventPage = $("#eventPage");

chennaiSmile.filterElem = {};
chennaiSmile.filterElem.date = $('.filter-date');
chennaiSmile.filterElem.category = $('.filter-tc-button');
chennaiSmile.filterElem.type = $('.filter-type');
chennaiSmile.filterElem.action = $('.filter-action');
chennaiSmile.filterTextContainer = $('#chipsId');
chennaiSmile.filterTextParentContainer = $('.filter-parent-container');
chennaiSmile.filterClose = $('.filter-close');
chennaiSmile.favCategoryDivElem = $('.favourite-category');
chennaiSmile.showEventPageTitleHeader = $('.epage-title');

chennaiSmile.filterParams = {};
chennaiSmile.filterParams.page = 0;
chennaiSmile.filterParams.limit = 10;
chennaiSmile.filterParams.category = [];

chennaiSmile.filterTextArr = [];
chennaiSmile.previousFilterParams = "";


chennaiSmile.searchTextBoxElem = $('#eventCategorySearch');
chennaiSmile.searchTextBoxPlaceholder = chennaiSmile.searchTextBoxElem.attr('placeholder');
chennaiSmile.searchTextBoxElem.tagsinput({
	allowDuplicates: false,
	itemValue: 'id',  // this will be used to set id of tag
	itemText: 'text' // this will be used to set text of tag
});
chennaiSmile.searchTagsInputElem = $('.bootstrap-tagsinput');
chennaiSmile.searchMenuButtonElem = $('.search-menu');
chennaiSmile.searchCategoryBtnElem = $('.btn-category-search');

chennaiSmile.parentCategoryElem = $('.parent-category');
chennaiSmile.parentCategory = {};
chennaiSmile.parentCategory.id;
chennaiSmile.parentCategory.text;
chennaiSmile.parentCategoryDivElem = $('.category-dropdown');

chennaiSmile.subCategoryElem = $('.sub-category');
chennaiSmile.subCategory = {};
chennaiSmile.subCategory.id;
chennaiSmile.subCategory.text;
chennaiSmile.subCategoryDivElem = $('.subcategory-dd'); 
chennaiSmile.subCategoryRespDivElem = $('#subCategoriesResp');


chennaiSmile.eventListContainer = $('#eventResponse');
chennaiSmile.noEventsMsg = $('#noEventsMsg');
chennaiSmile.eventListLoading = $(".loadingDiv");
chennaiSmile.eventListResponse = ''; 
chennaiSmile.eventsMasonryInstance = '';

chennaiSmile.eventScrollDisabled = false;

chennaiSmile.equalPreviousCurrentFilterParams = function(){
	var prevParams = JSON.stringify(this.prevParams);
	var currentParams = JSON.stringify(this.filterParams);
	if(prevParams == currentParams){
		return true;
	}
	return false;
}

 
chennaiSmile.formatDate = function (date){
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

   return [day, month, year].join('-');
};

chennaiSmile.getEventList = function() {
	var self = this;

	if(!this.equalPreviousCurrentFilterParams()) {
		self.eventScrollDisabled = false;
	}

	this.eventListLoading.show();

	$.ajax({
	    type: "POST",
	    ContentType: 'application/json',
	    data: this.filterParams,
	    async: false,
	    dataType: 'json',
	    url: $("#event_list_url").val(),
	    success: function(response) {
	    	if(response.length > 0) {
	    		if(response.length < self.filterParams.limit){
	    			self.eventScrollDisabled = true;
	    		}
	    		self.eventListResponse = response;
	    		self.previousFilterParams = this.filterParams;

		        if(self.filterParams.page > 0)
		        	self.updateEventGridList(); 
		        else
		        	self.addEventGridList();
	    	}
	    	else {
	    		self.eventScrollDisabled = true;
	    		self.eventListLoading.hide();
		    	self.eventListContainer.html("<h2 class='no-events'>No events found!!!</h2>");
		    	self.eventListContainer.fadeIn('slow');
	    		return false;
	    	}
	        
	    },
	    error: function() {
	    	console.log("Error while getting event list!!!");
	    }
	});
}

chennaiSmile.addEventGridList = function() {
	if(this.eventListResponse.length > 0){
        var grid = this.generateEventGridList();
		this.eventListContainer.html(grid);
        this.masonryInitialize();        
    }
}

chennaiSmile.updateEventGridList = function() {
	if(this.eventListResponse.length > 0) {
		this.eventListLoading.find('#loading').addClass('append');
		this.eventListLoading.show();
		var content = this.generateEventGridList();
		var $grid = $(content).css({ opacity: 0 });
		setTimeout(() => {
			this.eventListContainer.append($grid).imagesLoaded(() => {
				this.eventsMasonryInstance.masonry('appended', $grid);
				this.eventListLoading.hide();
				this.eventListLoading.find('#loading').removeClass('append');
			});
		}, 1);		
    }
    else {
    	this.eventListLoading.hide();
    	this.noEventsMsg.html("<h2 class='no_events'>No more events found!!!</h2>");
    	this.noEventsMsg.fadeIn('slow');
    }
}

chennaiSmile.masonryInitialize = function() {
	setTimeout(() => {
    	this.eventListContainer.imagesLoaded(() => {
    		this.eventListContainer.fadeIn('slow');
    		this.eventListLoading.hide();
    		this.eventsMasonryInstance = this.eventListContainer.masonry({
    			itemSelector: '.card-size'
			});
			this.eventListContainer.fadeIn('slow');
		});	        		
	}, 1);
}

chennaiSmile.masonryDestory = function() {
	if((jQuery().masonry) && (typeof this.eventsMasonryInstance != "undefined")) {
    	this.eventListContainer.masonry('destroy');
    	this.eventListContainer.html('').hide();
	}
}

chennaiSmile.generateEventGridList = function() {
	var html = '';
	var response = this.eventListResponse;
	if(response.length > 0) {
	    var eventDetailsUrl = $("#event_view_url").val();

	    for(k in response){
	    	var likes_count = (response[k].likes_count == null) ? 0 : response[k].likes_count;
	    	var eventUrl = eventDetailsUrl + '/' + response[k].id + '/' + response[k].slug;
	    	var dispImgHmtl = '';
	    	var dispImg = response[k].display;
	    	var dtimeHtml = '';
	    	var buybtn = '';
	    	var eventprice = '';
	    	var iconsrc = "img/card/"+response[k].category_card;
	    	var catgoryicon = '<img src="'+iconsrc+'" style="height:auto;" class="img-fluid cs_card_icon">';

	    	dtimeHtml = moment(response[k].date).fromNow();
	    	if(response[k].slug == null)
	    		eventUrl = eventDetailsUrl + '/' + response[k].id;

	    	if(response[k].slug_status == 0 && response[k].slug != null)
	    		eventUrl = eventDetailsUrl + '/' + response[k].slug;

	    	if(dispImg==''){
	    		dispImgHmtl = '<a href="'+eventUrl+'"><img src="img/photos/1.jpg" alt="" style="height:auto;" class="img-fluid cs_dispimg"></a>';
	    	}
	    	else {
	    		var imgSrc = "img/display/"+dispImg;
	    		dispImgHmtl = '<a href="'+eventUrl+'"><img src="'+imgSrc+'" alt="" onerror="this.src=\'img/photos/1.jpg\'" style="height:auto;" class="img-fluid cs_dispimg"></a>';
	    	}

	    	if(response[k].register_online  == 1){
	    		var buybtn;
	    		var eventprice
	    		eventprice = '<span class="event-price pull-right">₹ '+response[k].price+'</span>';
	    		buybtn = '<div class="btn btn-sm btn-warning pull-right" onClick="javascript:location.href='+eventUrl+'">Buy Tickets</div>';
	    	}
			html += '<div class="col-sm-6 col-lg-2 col-md-2 card-size">\
				<div class="card" data-attrib-hcolor="'+response[k].category_ltecolor+'" onmouseover= this.style.backgroundColor="#'+response[k].category_ltecolor+'" onmouseout= this.style.backgroundColor="#f4f4f4">\
			        <div class="view overlay">\
			        	<div class="back">\
							<div class="pull-left tag col-sm-6 col-6">'+catgoryicon+'</div>\
							<div class="pull-right cs_event_time col-sm-6 col-6">'+dtimeHtml+'</div>\
						</div>\
						'+dispImgHmtl+'\
			            <a href="'+eventUrl+'">\
			                <div class="mask rgba-white-slight"></div>\
			            </a>\
			        </div>\
			        <div class="card-body">\
			            <h4 class="card-title"><a href="'+eventUrl+'" class="event-title">'+response[k].title+'</a></h4>\
			            <p class="card-text mb-0">'+response[k].areaname+'</p>\
			            <p class="card-text mb-0">'+this.formatDate(response[k].date)+'</p>\
			            '+buybtn+'\
			        </div>\
		        </div>\
		    </div>';

	    }
	    return html;
	}
	else {
		return html;
	}
}

chennaiSmile.generateFilterText = function() {
	var textArr = this.filterTextArr;
	var innerTextHtml = '';
	textArr.forEach(function(item){
		innerTextHtml += '<div class="chip" data-value="'+item.value+'" data-type="'+item.type+'">'+item.text+'<i class="close filter-close fa fa-times"></i></div>';
	});
	this.filterTextContainer.html(innerTextHtml);
	this.filterTextParentContainer.removeClass('d-none').show();
}

chennaiSmile.getHashValues = function() {
	var self = this;
	var type = window.location.hash.substr(1);
	if(type!=''){
		var action = '';
		var titleText = '';
		if(type == "my-events") {
			action = "myevents";
			titleText = "My Events";
		}
		if(type == "liked-events") {
			action = "likedevents";
			titleText = "My Liked Events"
		}
		if(type == "past-events") {
			action = "pastevents";
			titleText = "Past Events";
		}

		self.filterParams.action = action;
		self.showEventPageTitleHeader.show();
		self.showEventPageTitleHeader.find('.epage-title-text').html(titleText);
		self.favCategoryDivElem.hide();
	}
}

chennaiSmile.getSubCategoryList = function() {
	var self = this;
	var pCategoryId = this.parentCategory.id;
	var pCcategoryText = this.parentCategory.text;
	var subCategoryApiUrl = $("#sub_category_api_url").val();

    $.ajax({
        type:"POST",
        data: { "id": pCategoryId },
        ContentType : 'application/json',
        dataType: 'json',
        url: subCategoryApiUrl,
        async:true,
        success: function(data) {
        	if(data != '') {
        		var html ="";
	            $.each(data, function(key, val){
					html += '<div class="col-md-4"><div class="sub-category">\
								<div class="form-check checkbox-primary" id="'+key+'" text="'+val+'">\
							    <input type="checkbox" class="form-check-input sub-category" id="checkbox'+key+'" value="'+key+'">\
							    <label class="form-check-label" for="checkbox'+key+'">'+val+'</label>\
								</div>\
							</div></div>'
	            })

	            self.subCategoryRespDivElem.html(html);
	            self.parentCategoryDivElem.hide();
	            self.subCategoryDivElem.show();
	            self.searchMenuButtonElem.html('<button type="button" class="btn btn-head btn-primary category-selected" type="button"><label>'+pCcategoryText+'</label><i class="fa fa-close" aria-hidden="true"></i></button>');
        	}
        	else {
        		self.searchTextBoxElem.tagsinput('removeAll');
        		self.parentCategory = {};
        		self.parentCategory.id = pCategoryId;
				self.parentCategory.text = pCcategoryText;
				self.searchTextBoxElem.tagsinput('add', self.parentCategory);				
				self.searchMenuButtonElem.html('<button type="button" class="btn btn-head btn-primary cat-not-selected" type="button"><label>Category</label><i class="fa fa-bars float-right"></i></button>');
				self.parentCategoryDivElem.hide();
				self.searchTextBoxElem.tagsinput('items')
        	}
        },
        error: function (tab) {
            //$select.html('<option id="-1">none available</option>');
        }
    });
}

$(document).ready(function() {
	var self = chennaiSmile;
	self.getHashValues();
	self.getEventList();

	if(self.eventPage.val() != "index") {
		$("#mobFooter").hide();
	}

	self.filterElem.action.click(function() {
		var action = $(this).attr('data');
		var titleText = "";

		if(self.eventPage.val() != "index") {
			var eLinks = $("#eventIndexUrl").val();
			location.href = eLinks+"#"+action;
			return;
		}

		self.filterParams.page = 0;
		self.filterParams.date = '';
		self.filterParams.category = [];
		self.filterParams.type = '';
		self.filterTextArr = [];
		self.filterTextParentContainer.hide();
		self.searchMenuButtonElem.find('.fa-close').trigger('click');
		self.favCategoryDivElem.hide();

		self.filterParams.action = action;
		if(action == "myevents") {
			titleText = "My Events";
		}
		if(action == "likedevents") {
			titleText = "My Liked Events";
		}
		if(action == "pastevents") {
			titleText = "Past Events";
		}
		self.showEventPageTitleHeader.show();
		self.showEventPageTitleHeader.find('.epage-title-text').html(titleText);

		if(($('.modal-mob-menus').data('bs.modal') || {})._isShown) {
			$('.modal-mob-menus').modal('toggle');
		}

		self.masonryDestory();
		self.getEventList();
	});

	self.filterElem.date.click(function() {
		self.filterParams.date = $(this).attr('data');

		var textIndex = self.filterTextArr.findIndex(element => (element.type == 'date'));
		if (textIndex !== -1) self.filterTextArr.splice(textIndex, 1);

		self.filterTextArr.push({'type':'date', 'text': $(this).html(), 'value': $(this).attr('data')});
		self.filterParams.page = 0;
		self.masonryDestory();
		self.generateFilterText();
		self.getEventList();
		self.favCategoryDivElem.hide();
	});

	self.filterElem.type.click(function() {
		self.filterParams.type = $(this).attr('data');

		var textIndex = self.filterTextArr.findIndex(element => (element.type == 'type'));
		if (textIndex !== -1) self.filterTextArr.splice(textIndex, 1);

		self.filterTextArr.push({'type':'type', 'text': $(this).attr('data-text'), 'value': $(this).attr('data')});
		self.filterParams.page = 0;
		self.masonryDestory();
		self.generateFilterText();
		self.getEventList();
		self.favCategoryDivElem.hide();
	});

	self.filterElem.category.click(function() {
		var catValue = $(this).attr('data');

		var index = self.filterParams.category.indexOf(catValue);
		if (index !== -1) return false;

		self.filterParams.category.push(catValue);
		self.filterTextArr.push({'type':'category', 'text': $(this).attr('data-text'), 'value': catValue });
		self.filterParams.page = 0;
		self.masonryDestory();
		self.generateFilterText();
		self.getEventList();
		self.favCategoryDivElem.hide();
	});

	self.filterTextParentContainer.on('click', '.filter-close', function() {
		var parent = $(this).parent();
		var type = parent.attr('data-type');
		var value = parent.attr('data-value');

		if(type == "category") {
			var index = self.filterParams.category.indexOf(value);
			if (index !== -1) self.filterParams.category.splice(index, 1);			
		}

		if(type == "date") {
			self.filterParams.date = "";
		}

		if(type == "type") {
			self.filterParams.type = "";
		}

		var textIndex = self.filterTextArr.findIndex(element => ( element.value == value && element.type == type));
		if (textIndex !== -1) self.filterTextArr.splice(textIndex, 1);

		parent.remove();
		self.masonryDestory();
		self.getEventList();
	});

	self.filterTextParentContainer.on('click', '.filter-clear-all', function() {
		self.filterParams.page = 0;
		self.filterParams.date = '';
		self.filterParams.category = [];
		self.filterParams.type = '';
		self.filterTextArr = [];
		self.filterTextParentContainer.hide();
		self.searchMenuButtonElem.find('.fa-close').trigger('click');
		self.favCategoryDivElem.show();

		self.masonryDestory();
		self.getEventList();
	});	

	self.parentCategoryElem.click(function() {
		self.searchTextBoxElem.tagsinput('removeAll');
		self.parentCategory = {};
		self.parentCategory.id = $(this).attr('data-id');
		self.parentCategory.text = $(this).attr('data-text');
		self.searchTextBoxElem.tagsinput('add', self.parentCategory);
		self.searchTagsInputElem.find('input').attr('placeholder', '');
		self.getSubCategoryList();
	});

	self.subCategoryRespDivElem.on('click','.sub-category input', function(event){
		event.stopPropagation();
		self.subCategory = {};
		self.subCategory.id = $(this).parent().attr('id');
		self.subCategory.text = $(this).parent().attr('text');
		if($(this).is(':checked')) {
			self.searchTextBoxElem.tagsinput('add', self.subCategory);
			self.searchTagsInputElem.find('input').attr('placeholder', '');
		} else {
			self.searchTextBoxElem.tagsinput('remove', self.subCategory);
		}
		//console.log(elt.tagsinput('items'));
	});

	self.searchMenuButtonElem.on('click', '.fa-close', function(event) {
		event.stopPropagation();
		self.searchTextBoxElem.tagsinput('removeAll');
		self.parentCategoryDivElem.hide();
		self.subCategoryDivElem.hide();
		self.searchMenuButtonElem.html('<button type="button" class="btn btn-primary btn-head cat-not-selected" type="button"><label>Category</label><i class="fa fa-bars float-right"></i></button>');
		self.searchTagsInputElem.find('input').attr('placeholder', self.searchTextBoxPlaceholder);
	});

	let page = chennaiSmile.filterParams.page;
	$(window).scroll(function() {
	    if ($(window).scrollTop() == $(document).height() - $(window).height()) {
	    	if(!self.eventScrollDisabled) {
	    		self.filterParams.page = ++page;
	      		self.getEventList();
	    	}	      
	    }
	});

	self.searchTagsInputElem.slimScroll({
	    axis: 'x',
	    height: '45px',
	    size: '7px',
	    position: 'left',
	    color: '#286090',
	    allowPageScroll: false
	});

	self.searchMenuButtonElem.on('click', '.cat-not-selected', function(event){
		event.stopPropagation();
		self.parentCategoryDivElem.toggle();
	});

	self.searchMenuButtonElem.on('click', '.category-selected', function(event){
		event.stopPropagation();
		self.subCategoryDivElem.toggle();
	});

	self.searchCategoryBtnElem.click(function(){
		var categoryItems = self.searchTextBoxElem.tagsinput('items');

		categoryItems.forEach(function(item){
			self.filterParams.category.push(item.id);
			self.filterTextArr.push({'type':'category', 'text': item.text, 'value': item.id });
		});

		self.filterParams.page = 0;
		self.masonryDestory();
		self.generateFilterText();
		self.getEventList();
		self.favCategoryDivElem.hide();
	});

});


$(document).click(function (e) {
    var self = chennaiSmile;

    if(self.parentCategoryDivElem.has(e.target).length === 0) {
        self.parentCategoryDivElem.hide();
    }

    if(self.subCategoryDivElem.has(e.target).length === 0) {
        self.subCategoryDivElem.hide();
    }  
})
