<!--Carousel Wrapper-->
<div id="ce-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#ce-1z" data-slide-to="0" class="active"></li>
        <li data-target="#ce-1z" data-slide-to="1"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
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
    
    <div class="pull-right">
        <button type="button" class="btn btn-sm btn-indigo filter-type" data="freeEvents" data-text="Free Events">Free Events</button>
        <button type="button" class="btn btn-sm btn-indigo filter-type" data="register" data-text="Booking Events">Booking Events</button>
    </div>
    <div class="dropdown d-inline-block">
        <!--Trigger-->
        <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By</button>        

        <!--Menu-->
        <div class="dropdown-menu dropdown-primary">
            <a class="dropdown-item filter-date" href="javascript:;" data="today">Today's Events</a>
            <a class="dropdown-item filter-date" href="javascript:;" data="tomorrow">Tomorrow's Events</a>
            <a class="dropdown-item filter-date" href="javascript:;" data="weekend">This Weekend Events</a>
            <a class="dropdown-item filter-date" href="javascript:;" data="month">This Month Events</a>
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
<div class="container event-list">
    <div class="row filter-parent-container d-none">
        <div class="col-lg-12 col-md-12">
            <div class="filter-params card animated bounceInDown bounceInUp">
                <div class="card-body"">
                    <a href="javascript:;" class="pull-right filter-clear-all">Clear All</a>
                    <label class="">Filters</label>
                    <div class="chips" id="chipsId">
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div id="eventResponse"></div>
            <div class="loadingDiv"><div id="loading"></div></div>
        </div>
    </div> 
</div>
                