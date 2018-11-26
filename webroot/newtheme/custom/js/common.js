$(document).ready(function() {

    /*$('.date-input-class').datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: new Date()
    });*/

    $('.date-input-class').daterangepicker({
      opens: 'left'
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });

    $('.time-input').timepicker({
      timeFormat: 'h:mm p',
      interval: 60,
      minTime: '10',
      maxTime: '6:00pm',
      defaultTime: '11',
      startTime: '10:00',
      dynamic: false,
      dropdown: true,
      scrollbar: true
  });

    var e = document.getElementById("categories-id");
    if(e) {
        var strUser = e.options[e.selectedIndex].value;
        $select = $('#eventsubcategories-sub-categories');
        $.ajax({
            type:"POST",
            data:strUser,
            data:{"id":strUser},
            ContentType : 'application/json',
            dataType: 'json',
            url: $("#sub_category_api_url").val(),
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

    $('#Autocomplete2').autocomplete({
        source:$("#search_area_url").val(),
        minLength: 1
    });

     $('#Autocomplete').autocomplete({
        source:$("#search_area_url").val(),
        minLength: 1
    });

    $('#forgLink').click(function(){
        $('.nav-tabs > .nav-item').next('li.nav-item').next('li.nav-item').find('a').trigger('click');
    });


    if($('.other-category')) {
        $('.other-category').select2();
    }

    $('.other-category').change(function(){
        window.location.href = $("#base_url").val() +"events/category/"+ $(this).val();
    });

    $('#navbarDropdownMenuLink').click(function(){
        $(".modal-other-cities").modal('show');
    });


    /*var thumbs1 = document.getElementById("thumbnail-slider");
    var slides = thumbs1.getElementsByTagName("li");
    for (var i = 0; i < slides.length; i++) {
        slides[i].index = i;
        slides[i].onclick = function (e) {
            var li = this;
            var clickedEnlargeBtn = false;
            if (e.offsetX > 220 && e.offsetY < 25) clickedEnlargeBtn = true;
            if (li.className.indexOf("active") != -1 || clickedEnlargeBtn) {
                thumbs2.style.display = "block";
                mcThumbs2.init(li.index);
            }
        };
    }*/

});

// Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//Ticket Functioning
$(document).ready(function () {
  var ticket = {};
  ticket.adultCnt = 1;
  ticket.childCnt = 0;
  ticket.totalCnt = 1;
  ticket.adultAmount = $("#tAmtAd").val();
  ticket.childAmount = $("#tAmtCh").val();
  ticket.totalAmount = $("#tAmtAd").val();

  $(".ticPlus").click(function() {
      var actValue = $(this).parent().parent().parent().attr('data-attr');
      if(actValue == "adult") {
        ticket.adultCnt = ticket.adultCnt + 1;
        ticket.totalCnt = ticket.adultCnt + ticket.childCnt;
        $(this).parent().find('.qValue-txt').html(ticket.adultCnt);
        $('.tot-qty-txt').html(ticket.totalCnt);
      } 
      else {
        ticket.childCnt = ticket.childCnt + 1;
        ticket.totalCnt = ticket.adultCnt + ticket.childCnt;
        $(this).parent().find('.qValue-txt').html(ticket.childCnt);
        $('.tot-qty-txt').html(ticket.totalCnt);
      }
  });

  $(".ticMinus").click(function() {
      var actValue = $(this).parent().parent().parent().attr('data-attr');
      if(actValue == "adult") {
        if(ticket.adultCnt > 1) {
          ticket.adultCnt = ticket.adultCnt - 1;
          ticket.totalCnt = ticket.adultCnt + ticket.childCnt;
          $(this).parent().find('.qValue-txt').html(ticket.adultCnt);
          $('.tot-qty-txt').html(ticket.totalCnt);
        }        
      } 
      else {
        if(ticket.childCnt > 0) {
          ticket.childCnt = ticket.childCnt - 1;
          ticket.totalCnt = ticket.adultCnt + ticket.childCnt;
          $(this).parent().find('.qValue-txt').html(ticket.childCnt);
          $('.tot-qty-txt').html(ticket.totalCnt);
        }
      }
  });

});

// Steppers
$(document).ready(function () {
  var navListItems = $('div.setup-panel-2 div a'),
          allWells = $('.setup-content-2'),
          allNextBtn = $('.nextBtn-2'),
          allPrevBtn = $('.prevBtn-2');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-active');
          $item.addClass('btn-active');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepSteps.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i< curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepSteps.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel-2 div a.btn-active').trigger('click');
});


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
            var url = window.location.href;
            var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);
            var whatsapp_url = "whatsapp://send?text=" + message;
            window.location.href = whatsapp_url;
        } else {
            alert("This option is only available on mobile devices.");
        }

    });
 $(document).on("click", '.facebook', function() {
    
    var facebookShare = document.querySelector('[data-js="facebook-share"]');
          var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
  if(facebookWindow.focus) { facebookWindow.focus(); }
    return false;

    });

  $(document).on("click", '.twitter', function() {
    
    var twitterShare = document.querySelector('[data-js="twitter-share"]');
          var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
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
