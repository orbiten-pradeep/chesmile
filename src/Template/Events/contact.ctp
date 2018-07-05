<div class="container grey lighten-5 mt-3">

    <!--Section heading-->
    <h2 class="section-heading h1 pt-4">Contact us</h2>
    <!--Section description-->
    <p class="section-description">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 col-xl-9">
            <?= $this->Form->create('',array('url' => ['controller' => 'Contact','action' => 'add'])) ?>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
               <!--  <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div> -->
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="center-on-small-only">
                <a class="btn btn-primary">Send</a>
            </div>
            <?= $this->Form->end() ?>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-xl-3">
            <ul class="contact-icons">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>Regus Chennai<br> 
                Level 6, Chennai CitiCentre,<br>
                10/11, Dr.Radhakrishna Salai,<br>
                Chennai, 600 004</p>
                </li>

                <li><i class="fa fa-phone fa-2x"></i>
                    <p>+91 8939666685</p>
                </li>

                <li><i class="fa fa-envelope fa-2x"></i>
                    <p>admin@chennaismile.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
</div>








<!-- <div class="Container">
  <div class="row text-center">
    <div class="d-inline-flex p-5 mt-2" style="background-color: #e2e2e2;margin: 0 auto;">
      <h2> Contact us</h2>
        <div class="col-xs-12 col-sm-12 col-lg-4 p-5">          
            <p class="pull-left">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
                Regus Chennai<br> 
                Level 6, Chennai CitiCentre,<br>
                10/11, Dr.Radhakrishna Salai,<br>
                Chennai, 600 004
                </p>
            <br/>
                             <p class="pull-left pull">
                             <i class="fa fa-envelope" aria-hidden="true"></i>
                        admin@chennaismile.com</p>
                 
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-8 p-5" style="text-align: left;">
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
</div>
</div>
</div> -->



                            


