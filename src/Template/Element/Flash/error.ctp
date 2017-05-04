<!-- <?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div> -->
<style type="text/css">
  .modal-content{
    border-radius: 0px !important;
    border: 1px solid #999 !important;
    box-shadow: 0 0px 0px rgba(0,0,0,.5) !important;
    background-color: #474747;
    color: #f2f2f2;
     height: 150px;
      width: 500px;
     left: 50px;
  }

  .close{
    text-shadow: none !important;
    opacity: 3 !important;
  }

  .closebtn{
    color: white !important;
    background-color: #4abac5 !important;
    border: none !important;
    border-radius: 0px !important;
    margin-top: -30px;
  }

  @media only screen and (min-width: 320px)
  and (max-width: 460px){
    .modal-content{
       height: auto;
      width: auto;
     left: auto;
     font-size: 13px;
    }

  }
  @media only screen and (max-width: 320px)
  {
    .modal-content{
     font-size: 11px;
    }

  }

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>







  <div class="container">
  <!-- Trigger the modal with a button -->
 <!--  <button type="button" class="btn btn-info btn-lg" id="alertbox">Click here</button> -->

  <!-- Modal -->
  <div class="modal fade" id="logout" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="border-bottom: none;">
          <button type="button" class="close" data-dismiss="modal" style="color: #4abac5 !important;">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body" style="text-align: center;">
          <p ><?= h($message) ?></p>
        </div>
        <div class="modal-footer" style="border-top: none;">
          <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- <?php //echo $this->Html->script(['jquery.validate.min']); ?> -->

<script type="text/javascript">

    // $(window).on('load',function(){
    //     $('#logout').modal('show');
    // });
    </script>