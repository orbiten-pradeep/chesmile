	var geocoder;
	var map;
	var marker;

	codeAddress = function () {
	  geocoder = new google.maps.Geocoder();

	  var address = document.getElementById('city_country').value;
	  geocoder.geocode( { 'address': address}, function(results, status) {
	    if (status == google.maps.GeocoderStatus.OK) {
	      map = new google.maps.Map(document.getElementById('mapCanvas'), {
	    zoom: 16,
	            streetViewControl: false,
	          mapTypeControlOptions: {
	        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
	              mapTypeIds:[google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.ROADMAP]
	    },
	    center: results[0].geometry.location,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	  });
	      map.setCenter(results[0].geometry.location);
	      marker = new google.maps.Marker({
	          map: map,
	          position: results[0].geometry.location,
	          draggable: true,
	          title: 'My Title'
	      });
	      updateMarkerPosition(results[0].geometry.location);
	      geocodePosition(results[0].geometry.location);

	      // Add dragging event listeners.
	  google.maps.event.addListener(marker, 'dragstart', function() {
	    updateMarkerAddress('Dragging...');
	  });

	  google.maps.event.addListener(marker, 'drag', function() {
	    updateMarkerStatus('Dragging...');
	    updateMarkerPosition(marker.getPosition());
	  });

	  google.maps.event.addListener(marker, 'dragend', function() {
	    updateMarkerStatus('Drag ended');
	    geocodePosition(marker.getPosition());
	      map.panTo(marker.getPosition());
	  });

	  google.maps.event.addListener(map, 'click', function(e) {
	    updateMarkerPosition(e.latLng);
	    geocodePosition(marker.getPosition());
	    marker.setPosition(e.latLng);
	  map.panTo(marker.getPosition());
	  });

	    } else {
	      alert('Geocode was not successful for the following reason: ' + status);
	    }
	  });
	}

	function geocodePosition(pos) {
	  geocoder.geocode({
	    latLng: pos
	  }, function(responses) {
	    if (responses && responses.length > 0) {
	      updateMarkerAddress(responses[0].formatted_address);
	    } else {
	      updateMarkerAddress('Cannot determine address at this location.');
	    }
	  });
	}

	function updateMarkerStatus(str) {
	  /*document.getElementById('markerStatus').innerHTML = str;*/
	}

	function updateMarkerPosition(latLng) {
	  document.getElementById('googleMapID').value = [
	    latLng.lat(),
	    latLng.lng()
	  ].join(', ');
	}

	// function updateMarkerAddress(str) {
	//   document.getElementById('address').innerHTML = str;
	// }

	$('.launch-map').on('click', function () {
		var loc = $("#Autocomplete2").val();
		if(loc == '') {
			loc = $("#Autocomplete").val();
			if(loc == '') {				
				loc = "Chennai";
			}
		}

		$("#city_country").val(loc);
	    $('#myModal').modal({
	        backdrop: 'static',
	        keyboard: false
	    }).on('shown.bs.modal', function () {
	        codeAddress();
	    });
	});

	function checkForOther(id)
	{
		$('#subdiv').css('display','inline-block');
	    var e = document.getElementById("categories-id");
	    var strUser = e.options[e.selectedIndex].value;
	    $select = $('#eventsubcategories-sub-categories');
	    $.ajax({
	        type:"POST",
	        data:strUser,
	        data:{"id":strUser},
	        ContentType : 'application/json',
	        dataType: 'json',
	        url:$("#sub_category_api_url").val(),
	        async:true,
	        success: function(data) {
	            $select.html('');
	            //iterate over the data and append a select option
	            $.each(data, function(key, val){
	                //alert(val);
	                $select.append('<option value="' + key + '">' + val + '</option>');
	            })
	        },
	        error: function (tab) {
	            $select.html('<option id="-1">none available</option>');
	        }
	    });
	}

	$(document).ready(function() {

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
 $(document).on("click", '.whatsapp', function() {
        if( isMobile.any() ) {

            var text = $(this).attr("data-text");
            // var url = window.location.href;
             var url = $(this).attr("data-link");
            var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);
            var whatsapp_url = "whatsapp://send?text=" + message;
            window.location.href = whatsapp_url;
        } else {
            alert("This option is only available on mobile devices.");
        }

    });
 $(document).on("click", '.whatsappweb', function() {
    
    var whatsappShare = document.querySelector('[data-js="whatsapp-share"]');
          var whatsappWindow = window.open(' https://web.whatsapp.com://send?text=' + document.URL, 'whatsapp-popup', 'height=350,width=600');
  if(whatsappWindow.focus) { whatsappWindow.focus(); }
    return false;

    });
 var socialurl = $(this).attr("data-link");
 $(document).on("click", '.facebook', function() {
    
    var facebookShare = document.querySelector('[data-js="facebook-share"]');
          var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
  if(facebookWindow.focus) { facebookWindow.focus(); }
    return false;

    });

  $(document).on("click", '.twitter', function() {
    
    var twitterShare = document.querySelector('[data-js="twitter-share"]');
          var twitterWindow = window.open('https://twitter.com/share?url=' + encodeURIComponent(socialurl), 'twitter-popup', 'height=350,width=600');
  if(twitterWindow.focus) { twitterWindow.focus(); }
    return false;

    });
   $(document).on("click", '.instagram', function() {
    
    var instagramShare = document.querySelector('[data-js="instagram-share"]');
          var instagramWindow = window.open('https://instagram.com/share?url=' + document.URL, 'instagram-popup', 'height=350,width=600');
  if(instagramWindow.focus) { instagramWindow.focus(); }
    return false;

    });
    $(document).on("click", '.linkedin', function() {
    
    var linkedinShare = document.querySelector('[data-js="linkedin-share"]');
          var linkedinWindow = window.open('http://www.linkedin.com/shareArticle?url=' + document.URL, 'linkedin-popup', 'height=350,width=600');
  if(linkedinWindow.focus) { linkedinWindow.focus(); }
    return false;

    });
   $(document).on("click", '.googleplus', function() {
    
    var googleplusShare = document.querySelector('[data-js="googleplus-share"]');
          var googleplusWindow = window.open('https://plus.google.com/share?url=' + document.URL, 'googleplus-popup', 'height=350,width=600');
  if(googleplusWindow.focus) { googleplusWindow.focus(); }
    return false;

    });


});
