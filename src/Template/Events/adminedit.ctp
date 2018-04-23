<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Admin Edit Event</h2>
            </div>

            <!-- Vertical Layout -->
            
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                         <?php
$user = $this->request->session()->read('Auth.User');
if($user && $user['group_id'] == 4) {
//  echo $user['fullname'];
?>   
                           <?= $this->Form->create($event) ?>
            <fieldset>
        <legend><?= __('Edit Event') ?></legend>
<?php
            echo $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>
 <?= __('Ticketing') ?>
 <div class="form-group">
                                
           <?php  $options = ['0' => 'Disabled', '1' => 'Enabled'];

            echo $this->Form->select('register_online', $options);?>
            </div>
            <label for="">Price</label>
                                <div class="form-group">
                                    <div class="form-line">
                                  <!--   <input type="text" class="form-control" id="price" onchange = "myprice()" placeholder = "Price" value=" <?= h($event->price) ?>"> -->
                                        <?php echo $this->Form->input('price',array('div' => false,'oninput' => 'myprice()','class' => 'form-control','label' => false,'placeholder' => 'Price'));?> 
                                    </div>
                                </div> <?= __('Percentage') ?>
                                <div class="form-group">
                                <select id="myList" onchange = "myFunction()">
  <option>Select percentage</option>
  <option>1</option>
  <option>2</option>  
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>  
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>  
  <option>13</option>
  <option>14</option>
  <option>15</option>
</select>
</div>
 <div class="form-group">
 <div class="form-line">
  <?php echo $this->Form->input('commamount',array('type' => 'text', 'readonly' ,'div' => false,'class' => 'form-control','placeholder' => 'Commission Amount'));?>
</div></div>
             <div class="form-group">
             <div class="form-line"> <?php echo $this->Form->input('settamount',array('type' => 'text', 'readonly' ,'div' => false,'class' => 'form-control','placeholder' => 'Settle Amount'));?>
            </div></div>
             <div class="form-group">
             <div class="form-line"><?php echo $this->Form->input('google_map',array('type' => 'text','div' => false,'class' => 'form-control','placeholder' => 'Google_map'));?>
            </div></div>
    </fieldset>
     <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary m-t-15 waves-effect')) ?>
                            <?= $this->Form->end() ?>
</div>
 <?php } elseif($user['group_id'] == 2) {
?>    
 <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
<?php
            echo $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>
 <?= __('Ticketing') ?>
 <div class="form-group">
                                
           <?php  $options = ['0' => 'Disabled', '1' => 'Enabled'];

            echo $this->Form->select('register_online', $options);?>
            </div>
            <label for="">Price</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <?php echo $this->Form->input('price',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Price'));?> 
                                    </div>
 </fieldset>
    <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary m-t-15 waves-effect')) ?>
                            <?= $this->Form->end() ?>
</div>
<?php }?> </div>
                    </div>
                </div>
           
</section>
<script>
function myFunction() {
    var mylist = document.getElementById("myList");
    var ticprice = document.getElementById("price").value;
     var x = mylist.options[mylist.selectedIndex].text/100 * (ticprice);
     var y = (ticprice) - (x);
    
    document.getElementById("commamount").value = x;
    document.getElementById("settamount").value = y;
}
function myprice() {
    var mylist = document.getElementById("myList");
    var ticprice = document.getElementById("price").value;
     var x = mylist.options[mylist.selectedIndex].text/100 * (ticprice);
     var y = (ticprice) - (x);
    
    document.getElementById("commamount").value = x;
    document.getElementById("settamount").value = y;
    
}

</script>