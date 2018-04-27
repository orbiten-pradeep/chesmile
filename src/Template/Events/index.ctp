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
                