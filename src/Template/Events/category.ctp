<input type="hidden" name="categoryPage" id="categoryPage" value="true">
<input type="hidden" name="categoryPageCId" id="categoryPageCId" value="<?php echo $categoryDetail['id']; ?>">
<input type="hidden" name="categoryPageCName" id="categoryPageCName" value="<?php echo $categoryDetail['name']; ?>">
<div class="container-fluid pr-0 pl-0">
    <div class="col-md-12 col-xs-12 pr-0 pl-0">
        <?php echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid static-banner z-depth-1')); ?>
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
        <label>Other categories: </label>
        <select class="other-category">
            <option value="" selected>Choose your category</option>
            <?php
            foreach ($categories as $key=> $category) {
                ?>
                <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == $categoryDetail['id']) ? "selected": "" ?> ><?php echo $category['name']; ?></option>
                <?php
            }
            ?>
        </select>       
    </div>
    
    <!--/Dropdown primary-->
</div>

<div class="container-fluid event-list">
    <div class="row epage-title">
        <div class="col-lg-12 col-md-12">
            <div><h2 class="epage-title-text text-center mx-auto"><?php echo $categoryDetail['name']; ?> Events</h2></div>
        </div>
    </div>
    <div class="row filter-parent-container d-none">
        <div class="gridCentered">
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
        <div class="gridCentered pb-4">
            <div id="eventResponse"></div>
            <div class="loadingDiv"><div id="loading"></div></div>
        </div>
    </div>
</div>
                