function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

   return [day, month, year].join('-');
}
function getEventList(params) {
	//var dataParams = (params!='') ? params : '';
	var params = {};
	params.limit = 25;
	var dataParams = params;
	//console.log(dataParams);
	if(jQuery().masonry){
    	$('#eventResponse').masonry('destroy');
    	$("#eventResponse").html('').hide();
	}
	else {
		$("#eventResponse").html('').hide();
	}
	//$("#eventResponse").html('').hide();
	$(".loadingDiv").show();
	$.ajax({
	    type: "POST",
	    ContentType: 'application/json',
	    data: dataParams,
	    async: false,
	    dataType: 'json',
	    url: $("#event_list_url").val(),
	    success: function(response) {
	        //console.log(response);
	        if(response!=''){
		        var html = '';
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
		        		buybtn = '<div class="btn btn-warning pull-right" onClick="javascript:location.href='+eventUrl+'">Buy Tickets</div>';
		        	}
		        	/*html += '<div class="card">\
		        				<div data-attrib-hcolor="'+response[k].category_color+'" >\
		        					<div class="thumbnail" style="background-color:#'+response[k].category_color+'"><a href="'+eventUrl+'">\
							        	<div class="back">\
								            <p class="pull-left tag">'+response[k].category_name+'</p>\
								            <p class="pull-right post">'+dtimeHtml+'</p>\
							            </div>'+dispImgHmtl+'</a>\
							            <div class="caption">\
							            	<div class="caption_inner">\
								                <h4 class="event_txt"><a href="'+eventUrl+'" class="event-title">'+response[k].title+'</a></h4>\
								                '+eventprice+'\
								                 <p class="venue_txt">'+response[k].areaname+'</p>\
								                <p class="date_txt">'+formatDate(response[k].date)+'</p>\
								                <div class="">\
								                    <p class="pull-left"> <a onClick="hide('+response[k].id+', '+response[k].user_id+');"><span class="glyphicon glyphicon-thumbs-up"></span> </a><span class="count_txt" id="'+response[k].id+'">'+likes_count+'</span>\
								                    '+buybtn+'\
								                    </p>\
								                </div>\
							                </div>\
							            </div>\
							        </div>\
							    </div>\
							</div>';*/
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
							            <p class="card-text mb-0">'+formatDate(response[k].date)+'</p>\
							            '+buybtn+'\
							        </div>\
						        </div>\
						    </div>'
		        }
		        //console.log(html);
		        $("#eventResponse").html(html);	
		        setTimeout(function(){ 
		        	$('#eventResponse').imagesLoaded( function() {
		        		$("#eventResponse").fadeIn('slow');
		        		$(".loadingDiv").hide();
		        		$('#eventResponse').masonry({
		        			itemSelector: '.card-size'
						});
						$("#eventResponse").fadeIn('slow');
					});	        		
	        	}, 5);
		        
		    } else {
		    	$(".loadingDiv").hide();
		    	$("#eventResponse").html("<h2 class='no_events'>No events found!!!</h2>");
		    	$("#eventResponse").fadeIn('slow');
		    }
	    },
	    error: function() {
	    	console.log("Error while getting event list!!!");
	        //$select.html('<option id="-1">none available</option>');
	    }
	});
	
}

getEventList(null);