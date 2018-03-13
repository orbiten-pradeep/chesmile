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
<div class="jumbotron p-sm-2">
    <!--Dropdown primary-->
    
    <div class="pull-right">
        <button type="button" class="btn btn-indigo">Free Events</button>
        <button type="button" class="btn btn-indigo">Booking Events</button>
    </div>
    <div class="dropdown d-inline-block">
        <!--Trigger-->
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By</button>        

        <!--Menu-->
        <div class="dropdown-menu dropdown-primary">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
    <div class="btn-group" data-toggle="buttons">
        <?php 
            foreach ($topCategories as $key => $value) {
                echo "<button class='btn btn-unique btn-sm tc-button' style='background-color:#".$value['color']."' data-text=".$value['name']." data-id=".$value['cid']."> ".$value['name']." (".$value['event_counts'].")"."</button>";
            }
        ?>
    </div>
    
    <!--/Dropdown primary-->
</div>
<div class="container event-list">
    <div class="col-lg-12 col-md-12">
        <div id="eventResponse"></div>
        <div class="loadingDiv"><div id="loading"></div></div>
    </div>    
</div>
                