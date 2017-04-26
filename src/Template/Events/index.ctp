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
    max-height: none !important;
}
}
@media (max-width: 1920px){
.card-size{
    max-width: 311px;
    max-height: 334px;
}
}
@media (max-width: 1366px)
{
  .card-size {
    max-width: 274px;
    max-height: 310px;
}
}

@media (max-width: 1280px)
{
 .card-size {
max-width: 259px;
max-height: 300px;
}
}

.back{
    position: absolute;
    /*opacity: 0;*/
    transition: opacity .3s ease;
    -ms-transition: opacity .3s ease;
    -webkit-transition: opacity .3s ease;
    -o-transition: opacity .3s ease;
    z-index: 9999;
    background-color: rgba(0,0,0,.6);
    /*top: 0;*/
    width: 100%;
    height: 10%;
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
<div class="container-fluid">
<div class="row" style="margin-left: 0px;">
    <div class="col-md-2">
        <div class="panel bs-example side_panel">
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

                    <a href="javascript:;" class="filterDate list-group-item" data="today">Today's Events</a>
                    <a href="javascript:;" class="filterDate list-group-item" data="tomorrow">Tomorrow's Events</a>
                    <a href="javascript:;" class="filterDate list-group-item" data="weekend">This Weekend Events</a>
                    <a href="javascript:;" class="filterDate list-group-item" data="month">This Month Events</a>

                    <p class="text-primary">Specific Date Events</p>
                    <div id="reportrange"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i> <span></span>
                    <b class="caret"></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10 list_event content">
        <div class="row" style="margin-right: 0px;" id="eventResponse">
        </div>
        <div class="loadingDiv"><div id="loading"></div></div>
    </div>
</div>
</div>
<!-- <div class="row"> &nbsp; </div> -->

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'top',
        trigger : 'hover'
    });
});
</script>