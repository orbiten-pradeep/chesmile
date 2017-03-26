<?php use Cake\Routing\Router; ?>
<style type="text/css">
    a:hover {
        cursor: pointer;
    } 
</style>
<script type="text/javascript">
    function hide(eventid, userid) {
        $.ajax({
            type: "POST",
            data: {
                "eventid": eventid,
                "userid": userid
            },
            ContentType: 'application/json',
            dataType: 'json',
            url: "<?php echo $this->Url->build(['action' =>'likes']); ?>",
            async: true,
            success: function(data) {
                document.getElementById(eventid).textContent = data; 
            },
            error: function(tab) {
                //$select.html('<option id="-1">none available</option>');
            }
        });
        return false;
    }
    $(document).ready(function() {
        $('#Autocomplete').autocomplete({
            source: '<?php echo Router::url(array("controller" => "events", "action" => "search")); ?>',
            minLength: 1
        });
    });

    function autoHeight() {
            $('.content').css('min-height', 0);
            $('.content').css('min-height', ($(document).height() - $('#header').height() - $('.footer').height()));
        }
        // onDocumentReady function bind
    $(document).ready(function() {
        autoHeight();
    });
    // onResize bind of the function
    $(window).resize(function() {
        autoHeight();
    });
</script>
<!--  <div class="content"> -->
<!-- <div class="container-fluid content"> -->
<div class="row" style="margin-left: 0px;">
    <div class="col-sm-4 col-lg-2 col-md-4">
        <div class="panel bs-example side_panel">
            <div class="panel-heading">
                <h3 class="panel-title">Sort By</h3> </div>
            <div class="panel-body">
                <div class="list-group">
                    <form id="searchbyarea" class="sx_location">
                        <!--  <div class="ui-widget">
                              <label for="Autocomplete"></label>
                                 <?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'list-group-item','label' => false,'placeholder' => 'searchbyarea')); ?>
                            </div> -->
                        <div class="form-group"> <span class="twitter-typeahead" style="position: relative; display: inline-block;">
              <input class="tt-hint dropdown_hint" type="text" autocomplete="off" spellcheck="off" disabled style="">
               <?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control tt-query dropdown_input','label' => false,'placeholder' => 'Search by location/Area')); ?>
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
    <div class="col-sm-8 col-lg-10 col-md-8 list_event content">
        <div class="row" style="margin-right: 0px;" id="eventResponse">
            
        </div>
        <div class="loadingDiv"><div id="loading"></div></div>
    </div>
</div>
<div class="row"> &nbsp; </div>