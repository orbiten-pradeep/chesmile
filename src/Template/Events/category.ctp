<input type="hidden" name="categoryPage" id="categoryPage" value="true">
<input type="hidden" name="categoryPageCId" id="categoryPageCId" value="<?php echo $categoryDetail['id']; ?>">
<input type="hidden" name="categoryPageCName" id="categoryPageCName" value="<?php echo $categoryDetail['name']; ?>">
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
                                 $catid = $category['id'];
                                $catname = $category['name'];
                                if($card!="") {
                                    echo "<li>";
                                    $imagePath = "/img/card/".$card;
                                    $imageLink = $this->Url->build('/events/category/'.$catid);
                                    $imageUrl = $this->Url->build($imagePath);
                                    echo "<a href2='".$imageLink."' class='filter-tc-button' data-text='".$category['name']."' data='".$category['id']."'><img class='thumb' src='".$imageUrl."'> </a><span>".$category['name']."</span>";
                                    echo "</li>";
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

<!--/.Carousel Wrapper-->
<div class="jumbotron p-sm-2 event-filters">
    <!--Dropdown primary-->
    
    <div class="pull-right filter-buttons">
        <button type="button" class="btn btn-sm btn btn-oceanblue btnfont filter-type" data="freeEvents" data-text="Free Events" >Free Events</button>
        <button type="button" class="btn btn-sm btn btn-oceanblue btnfont filter-type waves-effect " data="register" data-text="Booking Events">Booking Events</button>
    </div>
    <div class="dropdown d-inline-block filter-dropdowns">
        <!--Trigger-->
        <button class="btn btn-sm dropdown-toggle btn btn-oceanblue" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By</button>        

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

<div class="container-fluid event-list">
    <div class="row epage-title">
        <div class="col-lg-12 col-md-12">
            <div><h2 class="epage-title-text text-center mx-auto">Events</h2></div>
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
    <div class="row">
        <div class="col-lg-12 col-md-12 pb-4">
            <div id="eventResponse"></div>
            <div class="loadingDiv"><div id="loading"></div></div>
        </div>
    </div>
</div>
                