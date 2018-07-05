<div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>

<?php
$user = $this->request->session()->read('Auth.User');
if($user && $user['group_id'] == 4) {
//  echo $user['fullname'];
?>   
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/events/adminindex'); ?>">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                                <div class="text">
                                    <h5>Active Events : <?php echo $upevent;?></h5>
                                </div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <a href="<?php echo $this->Url->build('/events/waitingevent'); ?>">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h5>Waiting Approval Events :  <?php echo $numbevent;?></h5>
                            </div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/events/adminindex'); ?>">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">forum</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Total Events :<?php echo $numevent;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Events/adminindex'); ?>">
                        <div class="info-box bg-orange hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Today Posted Events: <?php echo $toevent;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row clearfix tickt_info_row">
                <!-- Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>User Details</h2>
                        </div>
                        <div class="body">
                            <div id="bar_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Event Info</h2>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="graph"></div>
                            <div id="line_chart" class="graph" style="display: none;"></div>
                            <div id="area_chart" class="graph" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix tickt_info_row">
                <!-- Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ticket_info_card">
                    <div class="card">
                        <div class="header">
                            <h2>Ticket Details</h2>
                        </div>
                        <div class="body">
                            <div id="bar_ticket" class="graph"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Users/organizerindex'); ?>">
                        <div class="info-box bg-red hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">playlist_add_check</i>
                            </div>
                            <div class="content">
                                    <div class="text">
                                        <h5>Event Organizers : <?php echo $numorg;?></h5>
                                    </div>
                                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Users/emanagerindex'); ?>">
                        <div class="info-box bg-light-blue hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">help</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Event Managers :  <?php echo $numman;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Users/userlist'); ?>">
                        <div class="info-box bg-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">forum</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>No.Of.Users :<?php echo $number;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Events/adminindex'); ?>">
                        <div class="info-box bg-orange hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Past Events: <?php echo $pastevent;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                 <a href="<?php echo $this->Url->build('/users/userlist'); ?>">
                    <div class="card">
                        <div class="body bg-pink font-bold">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                                 Total Users:
                           <!--      12,10,9,6,5,6,10,5,7,5,12,13,7,12,11 -->
                            </div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b><?php echo$newuser?></b> <small>USERS</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b><?php echo $yesuser?></b> <small>USERS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b><?php echo $weekuser?></b> <small>USERS</small></span>
                                </li>
                                <li>
                                    LAST MONTH
                                    <span class="pull-right"><b><?php echo $monthuser?></b> <small>USERS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold text-center">
                                Top Event Organizers
                            </div>
                            <ul class="dashboard-stat-list">
                                <?php for($i=0;  $i < count($top);  $i++) { ?>
                                <li>
                                    <span class="cs_name"><?php echo $top[$i]['fullname'] ?></span> <span class="pull-right"><b><?php echo $top[$i]['CreatedEvents'];?></b> <small>EVENTS</small></span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a href="<?php echo $this->Url->build('/tickets/index'); ?>">
                        <div class="card">
                            <div class="body bg-teal">
                                <div class="font-bold m-b--35 text-center"><!-- ANSWERED TICKETS -->Tickets</div>
                                <ul class="dashboard-stat-list">
                                    <li>
                                        TODAY
                                        <span class="pull-right"><b><?php echo $tictoday;?></b> <small>TICKETS</small></span>
                                    </li>
                                    <li>
                                        YESTERDAY
                                        <span class="pull-right"><b> <?php echo $ticyes;?></b> <small>TICKETS</small></span>
                                    </li>
                                    <li>
                                        LAST WEEK
                                        <span class="pull-right"><b><?php echo $ticweek;?></b> <small>TICKETS</small></span>
                                    </li>
                                    <li>
                                        LAST MONTH
                                        <span class="pull-right"><b><?php echo $ticmonth;?></b> <small>TICKETS</small></span>
                                    </li>
                                    <li>
                                        LAST YEAR
                                        <span class="pull-right"><b><?php echo $ticyr;?></b> <small>TICKETS</small></span>
                                    </li>
                                    <li>
                                        ALL
                                        <span class="pull-right"><b><?php echo $numtic;?></b> <small>TICKETS</small></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix" style="display: none;">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header text-center">
                            <h2>Detailed Infos</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>List</th>
                                            <th>Status</th>
                                            <th>Site</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tickets</td>
                                            <td><span class="label bg-green">Sold</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$numtic?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numtic?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Events</td>
                                            <td><span class="label bg-blue">Posted</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$numevent?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numevent?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Event Organizers</td>
                                            <td><span class="label bg-light-blue">On Hold</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$numorg?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numorg?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>New Users</td>
                                            <td><span class="label bg-orange">Logined</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$number?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$number?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Feedbacks</td>
                                            <td>
                                                <span class="label bg-red">Approached</span>
                                            </td>
                                            <td>Chennai Smile
                                            </td>
                                            <td><p><?php echo$numcontact?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numcontact?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="display: none;">
                    <a href="<?php echo $this->Url->build('/contacts/index'); ?>">
                        <div class="card">
                            <div class="body bg-green">
                                <div class="font-bold m-b--35 text-center"><!-- ANSWERED TICKETS -->Contacts</div>
                                <ul class="dashboard-stat-list">
                                    <li>
                                        TODAY
                                        <span class="pull-right"><b><?php echo $newcontact;?></b> <small>Queries</small></span>
                                    </li>
                                    <li>
                                        YESTERDAY
                                        <span class="pull-right"><b> <?php echo $yescontact;?></b> <small>Queries</small></span>
                                    </li>
                                    <li>
                                        LAST WEEK
                                        <span class="pull-right"><b><?php echo $weekcontact;?></b> <small>Queries</small></span>
                                    </li>
                                    <li>
                                        ALL
                                        <span class="pull-right"><b><?php echo $numcontact;?></b> <small>Queries</small></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- #END# Browser Usage -->
            </div>
              <?php }
                $user = $this->request->session()->read('Auth.User');
                if($user && $user['group_id'] == 5) {
                ?>   
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/events/adminindex'); ?>">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                                <div class="text">
                                    <h5>Active Events : <?php echo $upevent;?></h5>
                                </div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <a href="<?php echo $this->Url->build('/events/waitingevent'); ?>">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h5>Waiting Approval Events :  <?php echo $numbevent;?></h5>
                            </div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/events/adminindex'); ?>">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">forum</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Total Events :<?php echo $numevent;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Events/adminindex'); ?>">
                        <div class="info-box bg-orange hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Today Posted Events: <?php echo $toevent;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row clearfix tickt_info_row">
                <!-- Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>User Details</h2>
                        </div>
                        <div class="body">
                            <div id="bar_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Event Info</h2>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="graph"></div>
                            <div id="line_chart" class="graph" style="display: none;"></div>
                            <div id="area_chart" class="graph" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix tickt_info_row">
                <!-- Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ticket_info_card">
                    <div class="card">
                        <div class="header">
                            <h2>Ticket Details</h2>
                        </div>
                        <div class="body">
                            <div id="bar_ticket" class="graph"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Users/organizerindex'); ?>">
                        <div class="info-box bg-red hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">playlist_add_check</i>
                            </div>
                            <div class="content">
                                    <div class="text">
                                        <h5>Event Organizers : <?php echo $numorg;?></h5>
                                    </div>
                                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Users/emanagerindex'); ?>">
                        <div class="info-box bg-light-blue hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">help</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Event Managers :  <?php echo $numman;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Users/userlist'); ?>">
                        <div class="info-box bg-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">forum</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>No.Of.Users :<?php echo $number;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Events/adminindex'); ?>">
                        <div class="info-box bg-orange hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Past Events: <?php echo $pastevent;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                 <a href="<?php echo $this->Url->build('/users/userlist'); ?>">
                    <div class="card">
                        <div class="body bg-pink font-bold">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                                 Total Users:
                           <!--      12,10,9,6,5,6,10,5,7,5,12,13,7,12,11 -->
                            </div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b><?php echo$newuser?></b> <small>USERS</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b><?php echo $yesuser?></b> <small>USERS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b><?php echo $weekuser?></b> <small>USERS</small></span>
                                </li>
                                <li>
                                    LAST MONTH
                                    <span class="pull-right"><b><?php echo $monthuser?></b> <small>USERS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold text-center">
                                Top Event Organizers
                            </div>
                            <ul class="dashboard-stat-list">
                                <?php for($i=0;  $i < count($top);  $i++) { ?>
                                <li>
                                    <span class="cs_name"><?php echo $top[$i]['fullname'] ?></span> <span class="pull-right"><b><?php echo $top[$i]['CreatedEvents'];?></b> <small>EVENTS</small></span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a href="<?php echo $this->Url->build('/tickets/index'); ?>">
                        <div class="card">
                            <div class="body bg-teal">
                                <div class="font-bold m-b--35 text-center"><!-- ANSWERED TICKETS -->Tickets</div>
                                <ul class="dashboard-stat-list">
                                    <li>
                                        TODAY
                                        <span class="pull-right"><b><?php echo $tictoday;?></b> <small>TICKETS</small></span>
                                    </li>
                                    <li>
                                        YESTERDAY
                                        <span class="pull-right"><b> <?php echo $ticyes;?></b> <small>TICKETS</small></span>
                                    </li>
                                    <li>
                                        LAST WEEK
                                        <span class="pull-right"><b><?php echo $ticweek;?></b> <small>TICKETS</small></span>
                                    </li>
                                    <li>
                                        LAST MONTH
                                        <span class="pull-right"><b><?php echo $ticmonth;?></b> <small>TICKETS</small></span>
                                    </li>
                                    <li>
                                        LAST YEAR
                                        <span class="pull-right"><b><?php echo $ticyr;?></b> <small>TICKETS</small></span>
                                    </li>
                                    <li>
                                        ALL
                                        <span class="pull-right"><b><?php echo $numtic;?></b> <small>TICKETS</small></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix" style="display: none;">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header text-center">
                            <h2>Detailed Infos</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>List</th>
                                            <th>Status</th>
                                            <th>Site</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tickets</td>
                                            <td><span class="label bg-green">Sold</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$numtic?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numtic?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Events</td>
                                            <td><span class="label bg-blue">Posted</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$numevent?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numevent?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Event Organizers</td>
                                            <td><span class="label bg-light-blue">On Hold</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$numorg?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numorg?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>New Users</td>
                                            <td><span class="label bg-orange">Logined</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$number?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$number?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Feedbacks</td>
                                            <td>
                                                <span class="label bg-red">Approached</span>
                                            </td>
                                            <td>Chennai Smile
                                            </td>
                                            <td><p><?php echo$numcontact?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numcontact?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="display: none;">
                    <a href="<?php echo $this->Url->build('/contacts/index'); ?>">
                        <div class="card">
                            <div class="body bg-green">
                                <div class="font-bold m-b--35 text-center"><!-- ANSWERED TICKETS -->Contacts</div>
                                <ul class="dashboard-stat-list">
                                    <li>
                                        TODAY
                                        <span class="pull-right"><b><?php echo $newcontact;?></b> <small>Queries</small></span>
                                    </li>
                                    <li>
                                        YESTERDAY
                                        <span class="pull-right"><b> <?php echo $yescontact;?></b> <small>Queries</small></span>
                                    </li>
                                    <li>
                                        LAST WEEK
                                        <span class="pull-right"><b><?php echo $weekcontact;?></b> <small>Queries</small></span>
                                    </li>
                                    <li>
                                        ALL
                                        <span class="pull-right"><b><?php echo $numcontact;?></b> <small>Queries</small></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- #END# Browser Usage -->
            </div>
              <?php }              
                $user = $this->request->session()->read('Auth.User');
                if($user && $user['group_id'] == 6) {
                ?>   
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                                <div class="text">
                                    <h5>Activated Events : <?php echo $numevent;?></h5>
                                </div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h5>Waiting Approval Events :  <?php echo $numbevent;?></h5>
                            </div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h5>Upcomming Events :<?php echo $upevent;?></h5>
                            </div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h5>ORGANIZERS: <?php echo $numorg;?></h5>
                            </div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                                 Total Organizers:
                            </div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b><?php echo$neworg?></b> <small>Organizers</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b><?php echo $yesorg?></b> <small>Organizers</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b><?php echo $weekorg?></b> <small>Organizers</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">Event Organizers</div>
                            <ul class="dashboard-stat-list">
                                <?php 
                              $n=0 ; 
                            foreach ($users as $user):  $n++;?>
                                <li> <?= $this->Number->format($n) ?>
                                    <?= $user->has('fullname') ? $this->Html->link($user->fullname, ['controller' => 'Users', 'action' => 'view', $user->id]) : '' ?>
                                </li> <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a href="<?php echo $this->Url->build('/Contact/index'); ?>">
                        <div class="card">
                            <div class="body bg-teal">
                                <div class="font-bold m-b--35"><!-- ANSWERED TICKETS --><h3>Contacts</h3></div>
                                <ul class="dashboard-stat-list">
                                    <li>
                                        TODAY
                                        <span class="pull-right"><b><?php echo $newcontact;?></b> <small>Messages</small></span>
                                    </li>
                                    <li>
                                        YESTERDAY
                                        <span class="pull-right"><b> <?php echo $yescontact;?></b> <small>Messages</small></span>
                                    </li>
                                    <li>
                                        LAST WEEK
                                        <span class="pull-right"><b><?php echo $weekcontact;?></b> <small>Messages</small></span>
                                    </li>
                                    <li>
                                        ALL
                                        <span class="pull-right"><b><?php echo $numcontact;?></b> <small>Messages</small></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Detailed Infos</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>List</th>
                                            <th>Status</th>
                                            <th>Site</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ticketing Events</td>
                                            <td><span class="label bg-green">Sold</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$ticevent?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$ticevent?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Events</td>
                                            <td><span class="label bg-blue">Posted</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$numevent?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numevent?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Event Organizers</td>
                                            <td><span class="label bg-light-blue">On Hold</span></td>
                                            <td>Chennai Smile</td>
                                            <td><p><?php echo$numorg?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numorg?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Feedbacks</td>
                                            <td>
                                                <span class="label bg-red">Approached</span>
                                            </td>
                                            <td>Chennai Smile
                                            </td>
                                            <td><p><?php echo$numcontact?></p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numcontact?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="display: none;">
                    <div class="card">
                        <div class="header">
                            <h2>BROWSER USAGE</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- <div id="donut_chart" class="dashboard-donut-chart"></div> -->
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
                  <?php }
                    elseif($user['group_id'] == 2) {
                        ?>   
 <!-- Widgets -->
            <div class="row clearfix">
                 <a href="<?php echo $this->Url->build('/events/organizerevents'); ?>">
                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h5>Activated Events : <?php echo $orgactiveevent;?></h5>
                            </div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div></a> <a href="<?php echo $this->Url->build('/events/organizerevents'); ?>">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h5>Waiting Approval Events :  <?php echo $orgwaitevent;?></h5>
                            </div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div></a> <a href="<?php echo $this->Url->build('/events/organizerevents'); ?>">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h5>Upcomming Events :<?php echo $uporgevent;?></h5>
                            </div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a> 
                <a href="<?php echo $this->Url->build('/events/organizermyevents'); ?>">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h5>Total Events: <?php echo $orgevent;?></h5>
                            </div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="row clearfix">
                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">Event Managers</div>
                            <ul class="dashboard-stat-list"><?php 
                            $n=0 ; 
                   foreach ($managers as $manager):  $n++; ?>
                                <li>
                                    <?= h($manager->fullname) ?>
                                    <span class="pull-right">
                                    <?= h($manager->email) ?>
                                    </span>
                                </li> 
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Users/organizerindex'); ?>">
                        <div class="info-box bg-red hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">playlist_add_check</i>
                            </div>
                            <div class="content">
                                    <div class="text">
                                        <h5>Deleted Events : <?php echo $orgdelevent;?></h5>
                                    </div>
                                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Users/emanagerindex'); ?>">
                        <div class="info-box bg-light-blue hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">help</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Past Events :  <?php echo $pastorgevent;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Users/userlist'); ?>">
                        <div class="info-box bg-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">forum</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Free Events :<?php echo $orgfreeevent;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $this->Url->build('/Events/adminindex'); ?>">
                        <div class="info-box bg-orange hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h5>Ticketing Events: <?php echo $orgpaidevent;?></h5>
                                </div>
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets --> <a href="<?php echo $this->Url->build('/tickets/mytickets'); ?>">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35"><!-- ANSWERED TICKETS -->Tickets</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b><?php echo $tictoday;?></b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b> <?php echo $ticyes;?></b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b><?php echo $ticweek;?></b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST MONTH
                                    <span class="pull-right"><b><?php echo $ticmonth;?></b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST YEAR
                                    <span class="pull-right"><b><?php echo $ticyr;?></b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    ALL
                                    <span class="pull-right"><b><?php echo $orgeventtic;?></b> <small>TICKETS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div></a>
                <!-- #END# Answered Tickets -->
           
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Detailed Infos</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>List</th>
                                            <th>Status</th>
                                            <th>Site</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tickets</td>
                                            <td><span class="label bg-green">Sold</span></td>
                                            <td>Chennai Smile</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$numtic?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Events</td>
                                            <td><span class="label bg-blue">Posted</span></td>
                                            <td>Chennai Smile</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$orgevent?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Paid Events</td>
                                            <td><span class="label bg-light-blue">On Hold</span></td>
                                            <td>Chennai Smile</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$orgpaidevent?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Free Events</td>
                                            <td><span class="label bg-orange">On Hold</span></td>
                                            <td>Chennai Smile</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo$orgfreeevent?>%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="display: none;">
                    <div class="card">
                        <div class="header">
                            <h2>BROWSER USAGE</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- <div id="donut_chart" class="dashboard-donut-chart"></div> -->
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
<?php }?>

        </div>
<script type="text/javascript">
    var lastweek = "<?php echo $weekuser?>";
    var lastmonth = "<?php echo $monthuser?>";
    var newuser = "<?php echo $newuser?>";
    var yestuser = "<?php echo $yesuser?>";

    var activeevents = "<?php echo $upevent;?>";
    var waitingapproval = "<?php echo $numbevent;?>";
    var paidevents = "<?php echo $ticevent?>";
    var freeevents = "<?php echo $freeevent?>";
    var totalevents = "<?php echo $numevent;?>";

    var today_tickets = "<?php echo $tictoday;?>";
    var yesterday_tickets = "<?php echo $ticyes;?>";
    var lastweek_tickets = "<?php echo $ticweek;?>";
    var lastmonth_tickts = "<?php echo $ticmonth;?>";
    var lastyear_tickets ="<?php echo $ticyr;?>";

</script>