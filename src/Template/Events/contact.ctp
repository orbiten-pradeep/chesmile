<style type="text/css">
  .container{
    background:#f2f2f2;
}
.about{
    max-width: 900px;
    margin: 0 auto;
    /*padding: 55px;*/
    box-sizing: border-box;
    background-color:  #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    border: 1px solid #ccc;
    padding-bottom: 230px;
    /*font: bold 14px sans-serif;*/
   /* text-align: center;*/
}

.wrapper{
  padding:166px;
  height:auto;
}
body{
  overflow-x: hidden !important;
  background-color: #f2f2f2 !important;
    font-family: 'Raleway', sans-serif, helvetica !important;
}
.cover-pic {
    height: 200px !important;
    }
.navbar{
  margin-bottom: 0px !important;
}
</style>

      <div class="container-fluid">
        <div class="row">
         <div class="cover-pic">
       
        </div>
      </div>
    </div>

    <div class="wrapper">
    <div class="Container">
      <div class="row text-center">
       <div class="about">
      <!-- <div class="jumbotron text-center"> -->
      <h2> Contact us</h2>

          <div class="col-sm-4">
                  
                             <p class="pull-left">
                             <i class="fa fa-map-marker" aria-hidden="true"></i>
                             Regus Chennai<br> 
                        Level 6, Chennai CitiCentre,<br>
            10/11, Dr.Radhakrishna Salai,<br>
            Chennai, 600 004
            </p>
            <br/>
                             <p class="pull-left">
                             <i class="fa fa-envelope" aria-hidden="true"></i>
                        admin@chennaismile.com</p>
                 
                    </div>
                    <div class="col-sm-8" style="text-align: left;">
                        <?= $this->Form->create('',array('url' => ['controller' => 'Contact','action' => 'add'])) ?>
                          <div class="col-sm-6 form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="Name" placeholder="Enter name" name="Name">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                          </div>
                          <div class="col-sm-12 form-group">
                            <label for="comments">Comments</label>
                            <textarea class="form-control" name ="comments"></textarea>
                          </div>
                        `<button class="btn btn-primary pull-right">Send</button>
                        <?= $this->Form->end() ?>
                    </div>
 
      <!-- <p style="line-height: 40px;"> ChennaiSmile is an eventful platform that brings you the most happening and popular upcoming events in Chennai.

  Hundreds of events happen in our city, and it’s difficult to find them out. From exhibitions to stand-up acts, conferences to workshops, live performances to music festivals, food trails to night life, and many more happening in Chennai. We will help you to experience the best of the city.

  Explore the happening events around us every day and navigate based on your interests, location, time, and availability with a single click.

  Discover all the current and upcoming events happening in your city. Get information about the most popular events, concerts, comedy, nightlife, parties, and much more. 
  </p> -->
<!-- </div> -->
  </div>
    </div>
       </div>
        </div>