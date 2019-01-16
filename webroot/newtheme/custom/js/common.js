$(document).ready(function() {
    var orderSummary = {};

    /*$('.date-input-class').datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: new Date()
    });*/

    $('.date-input-class').daterangepicker({
        opens: 'left',
        autoUpdateInput: false
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        $('.date-input-class').focus();
    });

    $('.date-input-class').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    });

    /** ticketing service calender **/
    $('#ticketBookingDate').daterangepicker({
        opens: 'left',
        autoUpdateInput: false
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        $('#ticketBookingDate').focus();
    });

    $('#ticketBookingDate').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    });
    /** ticketing service calender ends **/

    $('.time-input').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '10',
        maxTime: '11:00pm',
        defaultTime: '',
        startTime: '12:00',
        dynamic: false,
        dropdown: true,
        scrollbar: false,
        change: function(time) {
            $(this).focus();
        }
    }); 

    var e = document.getElementById("categories-id");
    if (e) {
        var strUser = e.options[e.selectedIndex].value;
        $select = $('#eventsubcategories-sub-categories');
        $.ajax({
            type: "POST",
            data: strUser,
            data: {
                "id": strUser
            },
            ContentType: 'application/json',
            dataType: 'json',
            url: $("#sub_category_api_url").val(),
            async: true,
            success: function(data) {
                $select.html('');
                //iterate over the data and append a select option
                $.each(data, function(key, val) {
                    //alert(val);
                    $select.append('<option value="' + key + '">' + val + '</option>');
                })
            },
            error: function(tab) {
                $select.html('<option id="-1">none available</option>');
            }
        });
    }

    $('#Autocomplete2').autocomplete({
        source: $("#search_area_url").val(),
        minLength: 1
    });

    $('#Autocomplete').autocomplete({
        source: $("#search_area_url").val(),
        minLength: 1
    });

    $('#forgLink').click(function() {
        $('.nav-tabs > .nav-item').next('li.nav-item').next('li.nav-item').find('a').trigger('click');
    });


    if ($('.other-category')) {
        $('.other-category').select2();
    }

    $('.other-category').change(function() {
        window.location.href = $("#base_url").val() + "events/category/" + $(this).val();
    });

    $('#navbarDropdownMenuLink').click(function() {
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

    $('[data-toggle="tooltip"]').tooltip();

    function asRupeesFormat(value) {
        return '₹ ' + value;
    }

    orderSummary.tickets = {};
    orderSummary.ticketTotalCnt = 0;
    orderSummary.ticketTotalAmount = 0;

    $(".ticPlus").click(function() {
        var ticketId = $(this).attr('ticket-id');
        var ticketDivBox = $("#ticketDiv_" + ticketId);

        var ticketObj = {};
        ticketObj.ticketId = ticketId;
        ticketObj.ticketCount = $("#totalTicketCnt_" + ticketId).val();
        ticketObj.ticketPrice = $("#ticketPrice_" + ticketId).val();
        ticketObj.ticketTotalAmount = $("#totalTicketPrice_" + ticketId).val();
        ticketObj.ticketType = $("#ticketType_" + ticketId).val();
        ticketObj.ticketName = $("#ticketName_" + ticketId).val();

        ticketObj.ticketCount = parseInt(ticketObj.ticketCount) + 1;
        orderSummary.ticketTotalCnt = parseInt(orderSummary.ticketTotalCnt) + 1;

        ticketObj.ticketTotalAmount = parseInt(ticketObj.ticketPrice) * parseInt(ticketObj.ticketCount);
        orderSummary.ticketTotalAmount = parseInt(orderSummary.ticketTotalAmount) + parseInt(ticketObj.ticketPrice);

        ticketDivBox.find('.qValue-txt').html(ticketObj.ticketCount);
        ticketDivBox.find('.amt-box').html(asRupeesFormat(ticketObj.ticketTotalAmount));

        $('.tot-qty-txt').html(orderSummary.ticketTotalCnt);
        $('.tot-amt-txt').html(asRupeesFormat(orderSummary.ticketTotalAmount));

        $("#totalTicketCnt_" + ticketId).val(ticketObj.ticketCount);
        $("#totalTicketPrice_" + ticketId).val(ticketObj.ticketTotalAmount);

        $("#totalAllTicketCnt").val(orderSummary.ticketTotalCnt);
        $("#ticketAllTotalAmount").val(orderSummary.ticketTotalAmount);

        orderSummary.tickets[ticketId] = ticketObj;
    });

    $(".ticMinus").click(function() {
        var ticketId = $(this).attr('ticket-id');
        var ticketDivBox = $("#ticketDiv_" + ticketId);

        if (orderSummary.tickets[ticketId]) {
            var ticketObj = orderSummary.tickets[ticketId];
            if (ticketObj.ticketCount > 0) {
                ticketObj.ticketCount = parseInt(ticketObj.ticketCount) - 1;
                orderSummary.ticketTotalCnt = parseInt(orderSummary.ticketTotalCnt) - 1;

                ticketObj.ticketTotalAmount = parseInt(ticketObj.ticketPrice) * parseInt(ticketObj.ticketCount);
                orderSummary.ticketTotalAmount = parseInt(orderSummary.ticketTotalAmount) - parseInt(ticketObj.ticketPrice);

                ticketDivBox.find('.qValue-txt').html(ticketObj.ticketCount);
                ticketDivBox.find('.amt-box').html(asRupeesFormat(ticketObj.ticketTotalAmount));

                $('.tot-qty-txt').html(orderSummary.ticketTotalCnt);
                $('.tot-amt-txt').html(asRupeesFormat(orderSummary.ticketTotalAmount));

                $("#totalTicketCnt_" + ticketId).val(ticketObj.ticketCount);
                $("#totalTicketPrice_" + ticketId).val(ticketObj.ticketTotalAmount);

                $("#totalAllTicketCnt").val(orderSummary.ticketTotalCnt);
                $("#ticketAllTotalAmount").val(orderSummary.ticketTotalAmount);
            }
        }
    });

    var navListItems = $('div.setup-panel-2 div a'),
        allWells = $('.setup-content-2'),
        allNextBtn = $('.nextBtn-2'),
        allPrevBtn = $('.prevBtn-2');

    allWells.hide();

    navListItems.click(function(e) {
        e.preventDefault();

        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled') && ($item.hasClass('validated') || $item.hasClass('first-li'))) {
            navListItems.removeClass('btn-active');
            $item.addClass('btn-active');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allPrevBtn.click(function() {
        var curStep = $(this).closest(".setup-content-2"),
            curStepBtn = curStep.attr("id"),
            prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

        prevStepSteps.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function() {
        var curStep = $(this).closest(".setup-content-2"),
            curStepBtn = curStep.attr("id"),
            nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='email']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        } 

        if(curStepBtn == "step-1") {
          if(orderSummary.ticketTotalCnt <= 0){
            $("#ticketAlertMsg").html('*Please add any one ticket');
            return false;
          } else {
            $("#ticketAlertMsg").html('');
          }
        }

        if(curStepBtn == "step-2") {
          orderSummary.firstName = $("#ticketFirstName").val();
          orderSummary.lastName = $("#ticketLastName").val();
          orderSummary.email = $("#ticketEmailAddress").val();
          orderSummary.mobile = $("#ticketMobileNumber").val();
          orderSummary.paymentGateway = "payu";
          var detailsHtml = "";
          for(var detail in orderSummary.tickets) {
            //console.log(orderSummary); console.log(orderSummary.tickets[detail]);
            var ticValue = orderSummary.tickets[detail];
            detailsHtml += '<div class="row t-item">\
              <div class="col col-6 col-sm-7 t-type">\
                '+ticValue.ticketType+' - '+ticValue.ticketName+' ('+ticValue.ticketPrice+')\
              </div>\
              <div class="col col-6 col-sm-5 t-qty text-center">\
                '+ticValue.ticketCount+'\
              </div>\
            </div>';            
          }

          $(".ticket-details-final").html(detailsHtml);
          $(".final-amt-txt").html(asRupeesFormat(orderSummary.ticketTotalAmount));
        }

        if(curStepBtn == "step-3") {
          console.log(orderSummary);      
          //$("#ticketFormId").submit();    
        }

        if (isValid)
            nextStepSteps.addClass('validated').removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel-2 div a.btn-active').trigger('click');

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
        if (isMobile.any()) {

            var text = $(this).attr("data-text");
            var url = window.location.href;
            var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);
            var whatsapp_url = "whatsapp://send?text=" + message;
            window.location.href = whatsapp_url;
        } else {
            alert("This option is only available on mobile devices.");
        }
    });
    //https://web.whatsapp.com://send?text="
    $(document).on("click", '.whatsappweb', function() {

        var whatsappShare = document.querySelector('[data-js="whatsapp-share"]');
        var whatsappWindow = window.open(' https://web.whatsapp.com://send?text=' + document.URL, 'whatsapp-popup', 'height=350,width=600');
        if (whatsappWindow.focus) {
            whatsappWindow.focus();
        }
        return false;

    });

    $(document).on("click", '.facebook', function() {

        var facebookShare = document.querySelector('[data-js="facebook-share"]');
        var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
        if (facebookWindow.focus) {
            facebookWindow.focus();
        }
        return false;

    });

    $(document).on("click", '.twitter', function() {

        var twitterShare = document.querySelector('[data-js="twitter-share"]');
        var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
        if (twitterWindow.focus) {
            twitterWindow.focus();
        }
        return false;

    });
    $(document).on("click", '.instagram', function() {

        var instagramShare = document.querySelector('[data-js="instagram-share"]');
        var instagramWindow = window.open('https://instagram.com/share?url=' + document.URL, 'instagram-popup', 'height=350,width=600');
        if (instagramWindow.focus) {
            instagramWindow.focus();
        }
        return false;

    });
    $(document).on("click", '.linkedin', function() {

        var linkedinShare = document.querySelector('[data-js="linkedin-share"]');
        var linkedinWindow = window.open('http://www.linkedin.com/shareArticle?url=' + document.URL, 'linkedin-popup', 'height=350,width=600');
        if (linkedinWindow.focus) {
            linkedinWindow.focus();
        }
        return false;

    });
    $(document).on("click", '.googleplus', function() {

        var googleplusShare = document.querySelector('[data-js="googleplus-share"]');
        var googleplusWindow = window.open('https://plus.google.com/share?url=' + document.URL, 'googleplus-popup', 'height=350,width=600');
        if (googleplusWindow.focus) {
            googleplusWindow.focus();
        }
        return false;

    });

});