$( function() {
  $('#date').datepicker({
      changeMonth: true,
      changeYear: true,
      minDate: new Date()
      });
} );

$(document).ready(function() {
    $('#time').timepicker({ timeFormat: 'h:mm p' });
    var e = document.getElementById("categories-id");
    if(e){
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

