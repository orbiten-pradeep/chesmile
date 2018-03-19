var chennaiSmile = {};

chennaiSmile.filterElem = {};
chennaiSmile.filterElem.date = $('.filter-date');
chennaiSmile.filterElem.category = $('.filter-tc-button');
chennaiSmile.filterElem.type = $('.filter-type');
chennaiSmile.filterTextContainer = $('#chipsId');
chennaiSmile.filterTextParentContainer = $('.filter-parent-container');
chennaiSmile.filterClose = $('.filter-close');

chennaiSmile.filterParams = {};
chennaiSmile.filterParams.page = 0;
chennaiSmile.filterParams.limit = 10;
chennaiSmile.filterParams.category = [];

chennaiSmile.filterTextArr = [];
chennaiSmile.previousFilterParams = "";

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
	var dataParams = this.filterParams;

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

	    	dtimeHtml = moment(response[k].date).fromNow();
	    	if(response[k].slug == null)
	    		eventUrl = eventDetailsUrl + '/' + response[k].id;

	    	if(response[k].slug_status == 0 && response[k].slug != null)
	    		eventUrl = eventDetailsUrl + '/' + response[k].slug;

	    	if(dispImg==''){
	    		dispImgHmtl = '<img src="img/photos/1.jpg" alt="" style="height:auto;" class="img-fluid">';
	    	}
	    	else {
	    		var imgSrc = "img/display/"+dispImg;
	    		dispImgHmtl = '<img src="'+imgSrc+'" alt="" onerror="this.src=\'img/photos/1.jpg\'" style="height:auto;" class="img-fluid">';
	    	}

	    	if(response[k].register_online  == 1){
	    		var buybtn;
	    		var eventprice
	    		eventprice = '<span class="event-price pull-right">₹ '+response[k].price+'</span>';
	    		buybtn = '<div class="btn btn-sm btn-warning pull-right" onClick="javascript:location.href='+eventUrl+'">Buy Tickets</div>';
	    	}
			html += '<div class="col-sm-6 col-lg-3 col-md-3 card-size">\
				<div class="card" data-attrib-hcolor="'+response[k].category_color+'">\
			        <div class="view overlay">\
			            '+dispImgHmtl+'\
			            <a href="#">\
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
$(document).ready(function() {
	var self = chennaiSmile;
	self.getEventList();

	self.filterElem.date.click(function() {
		self.filterParams.date = $(this).attr('data');

		var textIndex = self.filterTextArr.findIndex(element => (element.type == 'date'));
		if (textIndex !== -1) self.filterTextArr.splice(textIndex, 1);

		self.filterTextArr.push({'type':'date', 'text': $(this).html(), 'value': $(this).attr('data')});
		self.filterParams.page = 0;
		self.masonryDestory();
		self.generateFilterText();
		self.getEventList();
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

		self.masonryDestory();
		self.getEventList();
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
});