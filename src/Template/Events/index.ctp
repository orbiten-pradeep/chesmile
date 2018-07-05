<style type="text/css">
    /*.event-list .card-size .card:hover{
        background-color:#"'+response[k].category_color+'";
    }*/
    .cat_icon {
    display: inline-block;
    width: 85px !important;
    height: 85px !important;
    z-index: 0;
}
.btn-oceanblue {
    background-color: #424242!important;
    box-shadow: 10px;
    outline-color: #f38599 !important;
    font-size: .70rem !important;
}
.btnfont {
   font-size: .88rem;
    font-weight: bold; 
}

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

    <?php 
$flag=0;
foreach ($banners as $banner): ?>
<?php if($flag==0){ ?>
       <div class="carousel-item active">
          
               <img class="d-block w-100" src="webroot/img/banners_hme/<?php echo $banner->image; ?>" alt="<?php echo $banner->image; ?>">
          
       </div>
<?php
$flag=1;
}else{ ?>

       <!--First slide-->
       <div class="carousel-item">
           <img class="d-block w-100" src="webroot/img/banners_hme/<?php echo $banner->image; ?>" alt="<?php echo $banner->image; ?>">
       </div>
<?php } ?>
<!--/First slide-->
 <?php endforeach; ?>
</div>
</div>


<!--/.Carousel Wrapper-->
<div class="jumbotron p-sm-2 event-filters">
    <!--Dropdown primary-->
    
    <div class="pull-right filter-buttons">
        <button type="button" class="btn btn-sm btn btn-oceanblue btnfont" data="freeEvents" data-text="Free Events" >Free Events</button>
        <button type="button" class="btn btn-sm btn btn-oceanblue btnfont waves-effect " data="register" data-text="Booking Events">Booking Events</button>
    </div>
    <div class="dropdown d-inline-block filter-dropdowns">
        <!--Trigger-->
        <button class="btn btn-sm dropdown-toggle btn btn-oceanblue  filter-type" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By</button>        

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
                                    echo "<li class='cat_icon'>";
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
                