$(document).ready(function() {

    $('#date').datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: new Date()
    });

    $('#time').timepicker({ timeFormat: 'h:mm p' });
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