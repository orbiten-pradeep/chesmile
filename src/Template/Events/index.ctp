<<<<<<< .mine
<style type="text/css">
    /*.event-list .card-size .card:hover{
        background-color:#"'+response[k].category_color+'";
    }*/
</style>
<div id="ce-1z" class="carousel slide main-carousel carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#ce-1z" data-slide-to="0" class="active"></li>
        <li data-target="#ce-1z" data-slide-to="1"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <a href="http://chennaismile.com/events/chennai/903/chennaiyil-oru-shopping-thiruvizha-nam-parambariyam">
                <img class="d-block w-100" src="<?php echo $this->Url->build('/img/nam_parambhariyam_1600x400.jpg'); ?>" alt="">
            </a>
        </div>
        <!--First slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="http://chennaismile.com/img/high-on-laughter.png" alt="High on Laughter">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="http://chennaismile.com/img/legends-marathon.jpg" alt="Legends Marathon 2018">
        </div>
        <!--/Second slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#ce-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#ce-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<div class="jumbotron p-sm-2 event-filters">
    <!--Dropdown primary-->
    
    <div class="pull-right filter-buttons">
        <button type="button" class="btn btn-sm filbtn cs-btn-filter-free filter-type" data="freeEvents" data-text="Free Events">Free Events</button>
        <button type="button" class="btn btn-sm filbtn cs-btn-filter-paid filter-type" data="register" data-text="Booking Events">Booking Events</button>
    </div>
    <div class="dropdown d-inline-block filter-dropdowns">
        <!--Trigger-->
        <button class="btn btn-sm btn-default filbtn dropdown-toggle cs-filter-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By</button>        

        <!--Menu-->
        <div class="dropdown-menu dropdown-primary">
            <a class="dropdown-item filter-date cs_filter_dropdown" href="javascript:;" data="today">Today's Events</a>
            <a class="dropdown-item filter-date cs_filter_dropdown" href="javascript:;" data="tomorrow">Tomorrow's Events</a>
            <a class="dropdown-item filter-date cs_filter_dropdown" href="javascript:;" data="weekend">This Weekend Events</a>
            <a class="dropdown-item filter-date cs_filter_dropdown" href="javascript:;" data="month">This Month Events</a>
        </div>
    </div>
    <div class="btn-group top-categories" data-toggle="buttons">
        <label>Top categories: </label>
        <?php 
            foreach ($topCategories as $key => $value) {
                echo "<button class='btn btn-unique btn-sm filter-tc-button' style='background-color:#".$value['color']." !important' data-text='".$value['name']."' data=".$value['cid']."> ".$value['name']." (".$value['event_counts'].")"."</button>";
            }
        ?>
    </div>
    
    <!--/Dropdown primary-->
</div>
<div class="container favourite-category">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="cs-category-title text-center">
                <h2>Your Favourite Category</h2>
                <?php //foreach ($categories as $key=> $category) { echo "<pre>";print_r($category); echo "</pre>"; } ?>
            </div>
            <!--Carousel Wrapper-->

            <div class="well">
                <div id="thumbnail-slider">
                    <div class="inner">
                        <ul>
                            <?php 
                            foreach ($categories as $key=> $category) {
                                $card = $category['card'];
                                if($card!="") {
                                    echo "<li>";
                                    $imagePath = "/img/card/".$card;
                                    $imageUrl = $this->Url->build($imagePath);
                                    echo "<a class='thumb filter-tc-button' href='".$imageUrl."' data-text='".$category['name']."' data='".$category['id']."'></a><span>".$category['name']."</span>";
                                    echo "<\li>";
                                }
                            }
                            ?>               
                        </ul>
                    </div>
                </div> 

            </div>            
            <!--/.Carousel Wrapper-->  
        </div>
    </div>
</div>

<div class="container-fluid event-list">
    <div class="row epage-title">
        <div class="col-lg-12 col-md-12">
            <div><h2 class="epage-title-text text-center mx-auto">Upcoming Events</h2></div>
        </div>
    </div>
    <div class="row filter-parent-container d-none">
        <div class="col-lg-12 col-md-12">
            <div class="filter-params card animated bounceInDown bounceInUp">
                <div class="card-body"">
                    <a href="javascript:;" class="pull-right btn btn-sm btn-grey filter-clear-all">Clear All</a>
                    <label class="">Filters</label>
                    <div class="chips" id="chipsId">
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="eventResponse"></div>
                <div class="loadingDiv"><div id="loading"></div></div>
            </div>
        </div>
    </div> 
</div>
                ||||||| .r370
<?php use Cake\Routing\Router; ?>
<style type="text/css">
    a:hover {
        cursor: pointer;
    }

    .popover-content {
    color: black;
}
@media (min-width: 320px)
and (max-width: 460px){
.card-size {
    max-width: none !important;
    /*max-height: none !important;*/
}
#myCarousel{
    display: none;
}
}
@media (max-width: 1920px){
.card-size{
    max-width: 311px;
    /*max-height: 334px;*/
}
}
@media (max-width: 1366px)
{
  .card-size {
    max-width: 274px;
    /*max-height: 310px;*/
}
}

@media (max-width: 1280px)
{
 .card-size {
max-width: 259px;
/*max-height: 300px;*/
}
}

.back{
    position: absolute;
    opacity: 0.8;
    transition: opacity .3s ease;
    -ms-transition: opacity .3s ease;
    -webkit-transition: opacity .3s ease;
    -o-transition: opacity .3s ease;
    z-index: 2;
    background: rgba(0,0,0,.6);
    /*top: 0;*/
    width: 100%;
    height: 12%;
    /*bottom: 0;*/
}

</style>
<script type="text/javascript">

</script>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--  <div class="content"> -->
<!-- <div class="container-fluid content"> -->
<div class="background-container">
<div class="container-fluid">
<div class="row" style="margin-left: 0px;">
    <div class="col-sm-3 col-md-2">
        <div class="panel bs-example side_panel hidden-xs">
            <div class="panel-heading">
                <h3 class="panel-title">Filters
                    <a href="javascript:;" class="pull-right" id="filterDD"><i class="filter-dd-icon icon-chevron-right" data-toggle="tooltip" title="expand"></i></a>
                    <a href="javascript:;" class="pull-right" id="filterClearAll"><i class="icon-trash" data-toggle="tooltip" title="Clear"></i></a>
                </h3>
            </div> <!-- <button type="button" class="btn btn-primary" data-toggle="popover" title="Popover title" data-content="Default popover">Popover</button> -->

            <div class="panel-body filter-panel-body">
                <div class="list-group">
                    <div class="f-sections">
                        <div class="f-item filter-date">
                            <label></label>
                            <span class="glyphicon glyphicon-remove filter-date-clear"></span>
                        </div>
                        <div class="f-item filter-area">
                            <label></label>
                            <span class="glyphicon glyphicon-remove filter-area-clear"></span>
                        </div>
                        <div class="f-item filter-etitle">
                            <label></label>
                            <span class="glyphicon glyphicon-remove filter-etitle-clear"></span>
                        </div>
                    </div>
                    <form id="searchbyarea" class="sx_location">
                        <!--  <div class="ui-widget">
                              <label for="Autocomplete"></label>
                                 <?php echo $this->Form->input('areaname', array('id' => 'homeAutocomplete', 'required','class' => 'list-group-item','label' => false,'placeholder' => 'searchbyarea')); ?>
                            </div> -->
                        <div class="form-group"> <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                          <input class="tt-hint dropdown_hint" type="text" autocomplete="off" spellcheck="off" disabled style="">
                           <?php echo $this->Form->input('areaname', array('id' => 'homeAutocomplete', 'required','class' => 'form-control tt-query dropdown_input','label' => false,'placeholder' => 'Search by location/Area')); ?>
                          <!-- <input type="text" class="form-control tt-query dropdown_input" name="query" id="query" placeholder="Search by location/Area" autocomplete="off" spellcheck="false" dir="auto" style=""> -->
                          <span style="" class="dropdown_txt1"></span> <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span></span>
                        </div>
                    </form>

                    <form id="searchbytitle" >
                        <div class="form-group"> <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                          <input class="tt-hint dropdown_hint" type="text" autocomplete="off" spellcheck="off" disabled style="">
                           <?php echo $this->Form->input('eventTitle', array('id' => 'eTitleAutocomplete', 'required','class' => 'form-control tt-query dropdown_input','label' => false,'placeholder' => 'Search by event title')); ?>
                          <span style="" class="dropdown_txt1"></span>
                          <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span>
                          </span>
                        </div>
                    </form>
                    <a href="javascript:;" class="filterDate list-group-item" data="today">Today's Events</a>
                    <a href="javascript:;" class="filterDate list-group-item" data="tomorrow">Tomorrow's Events</a>
                    <a href="javascript:;" class="filterDate list-group-item" data="weekend">This Weekend Events</a>
                    <a href="javascript:;" class="filterDate list-group-item" data="month">This Month Events</a>

                    <p class="text-primary">Specific Date Events</p>
                    <div id="reportrange"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i> <span></span>
                    <b class="caret"></b>
                    </div>

                    <div class="filter-buttons">
                        <a href="javascript:;" class="filterDate btn btn-sm btn-primary" data="register">Booking Events</a>
                        <a href="javascript:;" class="filterDate btn btn-sm btn-primary" data="free_events">Free Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        body { padding-top: 20px; }
#myCarousel .nav a small {
    display:block;
}
#myCarousel .nav {
    background:#eee;
}
#myCarousel .nav a {
    border-radius:0px;
}
/*.carousel-inner{
    height: 50% !important;
}*/
    </style>
    <script type="text/javascript">
        $(document).ready( function() {
    $('#myCarousel').carousel({
        interval:   10000
    });

    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.nav').children().length -1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});
    </script>
    <div class="container-fluid list_event content col-sm-9 col-md-10">
    <div class="row tc-buttons">
        <div class="col-lg-9">
            <span>Top Categories </span>
            <?php 
            foreach ($topCategories as $key => $value) {
                echo "<button class='btn btn-sm tc-button' style='background-color:#".$value['color']."' data-text=".$value['name']." data-id=".$value['cid']."> ".$value['name']." (".$value['event_counts'].")"."</button>";
            }
            ?>
        </div>
        <div class="col-lg-3">
            <div class="pull-right redirect-city">
                <select class="city-red" name="state" style="width:200px">
                  <option value=""> Look Your City </option>
                  <option value="http://www.bangaloresmile.com">Banglore Smile</option>
                  <option value="http://www.goasmile.com"">Goa Smile</option>
                </select>
            </div>            
        </div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
        <a href="http://localhost/chesmile/events/chennai/evam-presents-baggy-in-and-as-kung-fu-bondadgdfg">
          <?php echo $this->Html->image('freedom-fighter-marathon.png',array('width' => '1600px' )); ?>
          </a>
           <div class="carousel-caption">
            <!-- <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p> -->
          </div>
        </div><!-- End Item -->

         <div class="item">
         <a href="http://localhost/chesmile/events/chennai/evam-presents-baggy-in-and-as-kung-fu-bondadgdfg">
         <?php echo $this->Html->image('reema-cooking.png',array('width' => '1600px' )); ?>
         </a>
           <div class="carousel-caption">
            <!-- <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p> -->
          </div>
        </div><!-- End Item -->

      </div><!-- End Carousel Inner -->


        <ul class="nav nav-pills nav-justified">
          <li data-target="#myCarousel" data-slide-to="0" class="active" style="background: #eee;"><a href="#">International Food World 2017<!-- <small>Extent Digital Marketing & Communications</small> --></a></li>
          <li data-target="#myCarousel" data-slide-to="1" style="background: #eee;"><a href="#">Chennai Kidathon 2017<!-- <small>Chennai Kidathon</small> --></a></li>
        </ul>


    </div><!-- End Carousel -->

<br><br>
    <!-- <div class="col-sm-9 col-md-10 list_event content"> -->
        <!-- <div class="btn btn-primary Upcoming-events" style="display: none; float:right;">Upcoming Events</div> -->
        <div class="Past-title" style="display: none; margin-top: -20px;"><h3>Past Events</h3><hr></div>
        <div class="row" style="margin-right: 0px;" id="eventResponse">
        </div>
        <div class="loadingDiv"><div id="loading"></div></div>
    <!-- </div> -->
</div>
</div>
</div>
</div>
<script type="text/javascript">
    $('.past-events').click(function(){
    $('.Past-title').css('display','block');
    $('.Upcoming-events').css('display','block');
    });
</script>

<!-- <div class="row"> &nbsp; </div> -->

<!-- <script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'top',
        trigger : 'hover'
    });
});
</script> -->
=======
<style type="text/css">
    /*.event-list .card-size .card:hover{
        background-color:#"'+response[k].category_color+'";
    }*/
</style>
<div id="ce-1z" class="carousel slide main-carousel carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#ce-1z" data-slide-to="0" class="active"></li>
        <li data-target="#ce-1z" data-slide-to="1"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo $this->Url->build('/img/nam-parambhariyam.JPG'); ?>" alt="">
        </div>
        <!--First slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="http://chennaismile.com/img/high-on-laughter.png" alt="High on Laughter">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="http://chennaismile.com/img/legends-marathon.jpg" alt="Legends Marathon 2018">
        </div>
        <!--/Second slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#ce-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#ce-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<div class="jumbotron p-sm-2 event-filters">
    <!--Dropdown primary-->
    
    <div class="pull-right filter-buttons">
        <button type="button" class="btn btn-sm filbtn cs-btn-filter-free filter-type" data="freeEvents" data-text="Free Events">Free Events</button>
        <button type="button" class="btn btn-sm filbtn cs-btn-filter-paid filter-type" data="register" data-text="Booking Events">Booking Events</button>
    </div>
    <div class="dropdown d-inline-block filter-dropdowns">
        <!--Trigger-->
        <button class="btn btn-sm btn-default filbtn dropdown-toggle cs-filter-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By</button>        

        <!--Menu-->
        <div class="dropdown-menu dropdown-primary">
            <a class="dropdown-item filter-date cs_filter_dropdown" href="javascript:;" data="today">Today's Events</a>
            <a class="dropdown-item filter-date cs_filter_dropdown" href="javascript:;" data="tomorrow">Tomorrow's Events</a>
            <a class="dropdown-item filter-date cs_filter_dropdown" href="javascript:;" data="weekend">This Weekend Events</a>
            <a class="dropdown-item filter-date cs_filter_dropdown" href="javascript:;" data="month">This Month Events</a>
        </div>
    </div>
    <div class="btn-group top-categories" data-toggle="buttons">
        <label>Top categories: </label>
        <?php 
            foreach ($topCategories as $key => $value) {
                echo "<button class='btn btn-unique btn-sm filter-tc-button' style='background-color:#".$value['color']." !important' data-text='".$value['name']."' data=".$value['cid']."> ".$value['name']." (".$value['event_counts'].")"."</button>";
            }
        ?>
    </div>
    
    <!--/Dropdown primary-->
</div>
<div class="container favourite-category">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="cs-category-title text-center">
                <h2>Your Favourite Category Events</h2>
                <?php //foreach ($categories as $key=> $category) { echo "<pre>";print_r($category); echo "</pre>"; } ?>
                <hr>
            </div>
            <!--Carousel Wrapper-->

            <div class="well">
                <div id="thumbnail-slider">
                    <div class="inner">
                        <ul>
                            <?php 
                            foreach ($categories as $key=> $category) {
                                $card = $category['card'];
                                if($card!="") {
                                    echo "<li>";
                                    $imagePath = "/img/card/".$card;
                                    $imageUrl = $this->Url->build($imagePath);
                                    echo "<a class='thumb filter-tc-button' href='".$imageUrl."' data-text='".$category['name']."' data='".$category['id']."'></a><span>".$category['name']."</span>";
                                    echo "<\li>";
                                }
                            }
                            ?>               
                        </ul>
                    </div>
                </div> 

            </div>            
            <!--/.Carousel Wrapper-->  
        </div>
    </div>
</div>

<div class="container-fluid event-list">
    <div class="row epage-title">
        <div class="col-lg-12 col-md-12">
            <div><h2 class="epage-title-text text-center mx-auto">Upcoming Events - Chennai</h2></div>
        </div>
    </div>
    <div class="row filter-parent-container d-none">
        <div class="col-lg-12 col-md-12">
            <div class="filter-params card animated bounceInDown bounceInUp">
                <div class="card-body"">
                    <a href="javascript:;" class="pull-right btn btn-sm btn-grey filter-clear-all">Clear All</a>
                    <label class="">Filters</label>
                    <div class="chips" id="chipsId">
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="eventResponse"></div>
                <div class="loadingDiv"><div id="loading"></div></div>
            </div>
        </div>
    </div> 
</div>
                >>>>>>> .r439
