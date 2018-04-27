<div class="Container">
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
</div>
