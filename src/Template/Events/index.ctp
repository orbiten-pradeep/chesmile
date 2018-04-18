<style type="text/css">
    .lap-fav, .ipad-fav, .ipadpro-fav, .mob-fav{
        display: none;
    }
        @media (max-width: 1366px){
        .cs-fav-icons-div{
            padding: 15px;
        }
        .desk-fav, .ipad-fav, .ipadpro-fav, .mob-fav{
            display: none;
        }
        .lap-fav{
        display: block;
        }
}
    @media (device-width: 768px) and (device-height: 1024px){
        .ipad-fav{
            display: block !important;
        }
         .lap-fav{
        display: none;
    }
    .ipadpro-fav, .mob-fav{
            display: none !important;
        }
    }
    @media (max-width: 1024px){
        .ipadpro-fav{
            display: block;
        }
        .ipad-fav{
            display: none;
        }
         .lap-fav, .mob-fav{
        display: none;
    }
    }
    @media (max-width: 420px){
        .mob-fav{
            display: block;
        }
        .desk-fav, .ipad-fav, .ipadpro-fav, .lap-fav{
            display: none;
        }
        .cs-fav-icons-div p{          
        overflow: hidden;
        text-overflow: ellipsis !important;
        white-space: nowrap !important;
        width: 100px !important;
        }
    }
</style>
<!--Carousel Wrapper-->
<div id="ce-1z" class="carousel slide main-carousel carousel-fade" data-ride="carousel">
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
    
    <div class="pull-right filter-buttons">
        <button type="button" class="btn btn-sm cs-btn-filter-free filter-type" data="freeEvents" data-text="Free Events">Free Events</button>
        <button type="button" class="btn btn-sm cs-btn-filter-paid filter-type" data="register" data-text="Booking Events">Booking Events</button>
    </div>
    <div class="dropdown d-inline-block filter-dropdowns">
        <!--Trigger-->
        <button class="btn btn-sm btn-default dropdown-toggle cs-filter-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By</button>        

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
<div class="container-fluid favourite-category desk-fav">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="cs-category-title text-center">
                <h2>Your Favourite Category Events</h2>
                <hr>
            </div>
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide" data-ride="carousel" data-interval="false">
                <!--Indicators-->
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol> -->
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view cs-fav-icons-div pl-4">
                            <?php echo $this->Html->image('card/671theatrical-events.png',array('alt' => 'Theatrical Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Theatrical</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1653fun-and-entertainment-events.png',array('alt' => 'Fun and Entertainment Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Fun And Entertainment</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2477roadshows-events.png',array('alt' => 'Roadshow Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Road Shows</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2382education-events.png',array('alt' => 'Education Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Education</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/854dance-events.png',array('alt' => 'Dance Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Dance</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2088health-and-wellness-events.png',array('alt' => 'Health and Wellness Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Health And Wellness</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2258sports-events.png',array('alt' => 'Sports Category','class' => 'navbar-brand','class' => 'img-fluid cs-fav-icons')); ?><p><span>Sports</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/528business-events.png',array('alt' => 'Business Events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Business</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/363arts-and-crafts-events.png',array('alt' => 'Arts Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Arts And Crafts</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/384audition-events.png',array('alt' => 'Audition Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Audition</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/756exhibitions-events.png',array('alt' => 'Exhibitions Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Exhibitions</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/773party-and-nightlife-events.png',array('alt' => 'Party and Nightlife Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Part And Nightlife</span></p>
                        </div>
                    </div>

                    <div class="carousel-item">
                       <div class="view cs-fav-icons-div pl-4">
                            <?php echo $this->Html->image('card/1244music-events.png',array('alt' => 'Music Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Music</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1555beauty-and-fashion-events.png',array('alt' => 'Beauty and Fashion Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Beauty And Fashion</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1586charity-events.png',array('alt' => 'Charity Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Charity</span></span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1615day-events-events.png',array('alt' => 'Day events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Day Events</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1781food-and-dining-events.png',array('alt' => 'Food Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Food And Dining</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1788competitions-events.png',array('alt' => 'Competitions events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Competitions</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2660spiritual-events.png',array('alt' => 'Spiritual events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Spiritual</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1059kids-events.png',array('alt' => 'Kids events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Kids</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1099festivals-events.png',array('alt' => 'Festivals Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Festivals</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1126adventure-events.png',array('alt' => 'Adventures Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Adventure</span></p>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev cs-arrow" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next cs-arrow" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->  
        </div>
    </div>
</div>

<div class="container-fluid favourite-category lap-fav">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="cs-category-title text-center">
                <h2>Your Favourite Category Events</h2>
                <hr>
            </div>
            <!--Carousel Wrapper-->
            <div id="carousel-example-3" class="carousel slide" data-ride="carousel" data-interval="false">
                <!--Indicators-->
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol> -->
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner cs-fav-carousel" role="listbox">
                    <div class="carousel-item active">
                        <div class="view cs-fav-icons-div pl-4">
                            <?php echo $this->Html->image('card/671theatrical-events.png',array('alt' => 'Theatrical Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Theatrical</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1653fun-and-entertainment-events.png',array('alt' => 'Fun and Entertainment Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Fun And Entertainment</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2477roadshows-events.png',array('alt' => 'Roadshow Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Road Shows</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2382education-events.png',array('alt' => 'Education Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Education</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/854dance-events.png',array('alt' => 'Dance Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Dance</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2088health-and-wellness-events.png',array('alt' => 'Health and Wellness Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Health And Wellness</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2258sports-events.png',array('alt' => 'Sports Category','class' => 'navbar-brand','class' => 'img-fluid cs-fav-icons')); ?><p><span>Sports</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/528business-events.png',array('alt' => 'Business Events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Business</span></p>
                        </div>
                    </div>

                    <div class="carousel-item">
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/363arts-and-crafts-events.png',array('alt' => 'Arts Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Arts And Crafts</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/384audition-events.png',array('alt' => 'Audition Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Audition</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/756exhibitions-events.png',array('alt' => 'Exhibitions Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Exhibitions</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/773party-and-nightlife-events.png',array('alt' => 'Party and Nightlife Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Part And Nightlife</span></p>
                        </div>
                        <div class="view cs-fav-icons-div pl-4">
                            <?php echo $this->Html->image('card/1244music-events.png',array('alt' => 'Music Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Music</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1555beauty-and-fashion-events.png',array('alt' => 'Beauty and Fashion Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Beauty And Fashion</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1586charity-events.png',array('alt' => 'Charity Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Charity</span></span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1615day-events-events.png',array('alt' => 'Day events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Day Events</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1781food-and-dining-events.png',array('alt' => 'Food Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Food And Dining</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1788competitions-events.png',array('alt' => 'Competitions events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Competitions</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2660spiritual-events.png',array('alt' => 'Spiritual events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Spiritual</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1059kids-events.png',array('alt' => 'Kids events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Kids</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1099festivals-events.png',array('alt' => 'Festivals Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Festivals</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1126adventure-events.png',array('alt' => 'Adventures Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Adventure</span></p>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev cs-arrow" href="#carousel-example-3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next cs-arrow" href="#carousel-example-3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->  
        </div>
    </div>
</div>

<div class="container-fluid favourite-category ipad-fav">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="cs-category-title text-center">
                <h2>Your Favourite Category Events</h2>
                <hr>
            </div>
            <!--Carousel Wrapper-->
            <div id="carousel-example-4" class="carousel slide" data-ride="carousel" data-interval="false">
                <!--Indicators-->
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol> -->
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner cs-fav-carousel" role="listbox">
                    <div class="carousel-item active">
                        <div class="view cs-fav-icons-div pl-4">
                            <?php echo $this->Html->image('card/671theatrical-events.png',array('alt' => 'Theatrical Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Theatrical</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1653fun-and-entertainment-events.png',array('alt' => 'Fun and Entertainment Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Fun And Entertainment</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2477roadshows-events.png',array('alt' => 'Roadshow Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Road Shows</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2382education-events.png',array('alt' => 'Education Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Education</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/854dance-events.png',array('alt' => 'Dance Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Dance</span></p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2088health-and-wellness-events.png',array('alt' => 'Health and Wellness Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Health And Wellness</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2258sports-events.png',array('alt' => 'Sports Category','class' => 'navbar-brand','class' => 'img-fluid cs-fav-icons')); ?><p><span>Sports</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/528business-events.png',array('alt' => 'Business Events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Business</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/363arts-and-crafts-events.png',array('alt' => 'Arts Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Arts And Crafts</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/384audition-events.png',array('alt' => 'Audition Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Audition</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/756exhibitions-events.png',array('alt' => 'Exhibitions Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Exhibitions</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/773party-and-nightlife-events.png',array('alt' => 'Party and Nightlife Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Part And Nightlife</span></p>
                        </div>
                        <div class="view cs-fav-icons-div pl-4">
                            <?php echo $this->Html->image('card/1244music-events.png',array('alt' => 'Music Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Music</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1555beauty-and-fashion-events.png',array('alt' => 'Beauty and Fashion Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Beauty And Fashion</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1586charity-events.png',array('alt' => 'Charity Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Charity</span></span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1615day-events-events.png',array('alt' => 'Day events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Day Events</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1781food-and-dining-events.png',array('alt' => 'Food Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Food And Dining</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1788competitions-events.png',array('alt' => 'Competitions events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Competitions</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2660spiritual-events.png',array('alt' => 'Spiritual events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Spiritual</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1059kids-events.png',array('alt' => 'Kids events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Kids</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1099festivals-events.png',array('alt' => 'Festivals Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Festivals</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1126adventure-events.png',array('alt' => 'Adventures Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Adventure</span></p>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev cs-arrow" href="#carousel-example-4" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next cs-arrow" href="#carousel-example-4" role="button" data-slide="next">
                    <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->  
        </div>
    </div>
</div>

<div class="container-fluid favourite-category ipadpro-fav">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="cs-category-title text-center">
                <h2>Your Favourite Category Events</h2>
                <hr>
            </div>
            <!--Carousel Wrapper-->
            <div id="carousel-example-5" class="carousel slide" data-ride="carousel" data-interval="false">
                <!--Indicators-->
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol> -->
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner cs-fav-carousel" role="listbox">
                    <div class="carousel-item active">
                        <div class="view cs-fav-icons-div pl-4">
                            <?php echo $this->Html->image('card/671theatrical-events.png',array('alt' => 'Theatrical Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Theatrical</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1653fun-and-entertainment-events.png',array('alt' => 'Fun and Entertainment Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Fun And Entertainment</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2477roadshows-events.png',array('alt' => 'Roadshow Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Road Shows</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2382education-events.png',array('alt' => 'Education Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Education</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/854dance-events.png',array('alt' => 'Dance Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Dance</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2088health-and-wellness-events.png',array('alt' => 'Health and Wellness Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Health And Wellness</span></p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2258sports-events.png',array('alt' => 'Sports Category','class' => 'navbar-brand','class' => 'img-fluid cs-fav-icons')); ?><p><span>Sports</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/528business-events.png',array('alt' => 'Business Events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Business</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/363arts-and-crafts-events.png',array('alt' => 'Arts Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Arts And Crafts</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/384audition-events.png',array('alt' => 'Audition Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Audition</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/756exhibitions-events.png',array('alt' => 'Exhibitions Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Exhibitions</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/773party-and-nightlife-events.png',array('alt' => 'Party and Nightlife Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Part And Nightlife</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">   
                        <div class="view cs-fav-icons-div pl-4">
                            <?php echo $this->Html->image('card/1244music-events.png',array('alt' => 'Music Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Music</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1555beauty-and-fashion-events.png',array('alt' => 'Beauty and Fashion Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Beauty And Fashion</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1586charity-events.png',array('alt' => 'Charity Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Charity</span></span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1615day-events-events.png',array('alt' => 'Day events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Day Events</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1781food-and-dining-events.png',array('alt' => 'Food Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Food And Dining</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1788competitions-events.png',array('alt' => 'Competitions events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Competitions</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2660spiritual-events.png',array('alt' => 'Spiritual events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Spiritual</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1059kids-events.png',array('alt' => 'Kids events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Kids</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1099festivals-events.png',array('alt' => 'Festivals Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Festivals</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1126adventure-events.png',array('alt' => 'Adventures Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Adventure</span></p>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev cs-arrow" href="#carousel-example-5" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next cs-arrow" href="#carousel-example-5" role="button" data-slide="next">
                    <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->  
        </div>
    </div>
</div>

<div class="container-fluid favourite-category mob-fav">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="cs-category-title text-center">
                <h2>Your Favourite Category Events</h2>
                <hr>
            </div>
            <!--Carousel Wrapper-->
            <div id="carousel-example-6" class="carousel slide" data-ride="carousel" data-interval="false">
                <!--Indicators-->
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol> -->
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner cs-fav-carousel ml-4" role="listbox">
                    <div class="carousel-item active">
                        <div class="view cs-fav-icons-div pl-4">
                            <?php echo $this->Html->image('card/671theatrical-events.png',array('alt' => 'Theatrical Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Theatrical</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1653fun-and-entertainment-events.png',array('alt' => 'Fun and Entertainment Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Fun And Entertainment</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2477roadshows-events.png',array('alt' => 'Roadshow Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Road Shows</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2382education-events.png',array('alt' => 'Education Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Education</span></p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/854dance-events.png',array('alt' => 'Dance Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Dance</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2088health-and-wellness-events.png',array('alt' => 'Health and Wellness Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Health And Wellness</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2258sports-events.png',array('alt' => 'Sports Category','class' => 'navbar-brand','class' => 'img-fluid cs-fav-icons')); ?><p><span>Sports</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/528business-events.png',array('alt' => 'Business Events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Business</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/363arts-and-crafts-events.png',array('alt' => 'Arts Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Arts And Crafts</span></p>
                        </div>
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/384audition-events.png',array('alt' => 'Audition Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Audition</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/756exhibitions-events.png',array('alt' => 'Exhibitions Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Exhibitions</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/773party-and-nightlife-events.png',array('alt' => 'Party and Nightlife Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Part And Nightlife</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">   
                        <div class="view cs-fav-icons-div pl-4">
                            <?php echo $this->Html->image('card/1244music-events.png',array('alt' => 'Music Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Music</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1555beauty-and-fashion-events.png',array('alt' => 'Beauty and Fashion Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Beauty And Fashion</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1586charity-events.png',array('alt' => 'Charity Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Charity</span></span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1615day-events-events.png',array('alt' => 'Day events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Day Events</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1781food-and-dining-events.png',array('alt' => 'Food Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Food And Dining</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1788competitions-events.png',array('alt' => 'Competitions events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Competitions</span></p>
                        </div>
                        
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/2660spiritual-events.png',array('alt' => 'Spiritual events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Spiritual</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1059kids-events.png',array('alt' => 'Kids events Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Kids</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                         <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1099festivals-events.png',array('alt' => 'Festivals Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Festivals</span></p>
                        </div>
                        <div class="view cs-fav-icons-div">
                            <?php echo $this->Html->image('card/1126adventure-events.png',array('alt' => 'Adventures Category','class' => 'img-fluid cs-fav-icons')); ?><p><span>Adventure</span></p>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev cs-arrow" href="#carousel-example-6" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next cs-arrow" href="#carousel-example-6" role="button" data-slide="next">
                    <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->  
        </div>
    </div>
</div>

<div class="container event-list">
    <div class="row epage-title">
        <div class="col-lg-12 col-md-12">
            <div><h3 class="epage-title-text"></h3><hr></div>
        </div>
    </div>
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
                