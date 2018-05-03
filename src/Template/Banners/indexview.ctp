<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Banner'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="banners index large-9 medium-8 columns content">
    <h3><?= __('Banners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caption') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($banners as $banner): ?>
            <tr>
                <td><?= $this->Number->format($banner->id) ?></td>
                <td><?= $banner->has('event') ? $this->Html->link($banner->event->title, ['controller' => 'Events', 'action' => 'view', $banner->event->id]) : '' ?></td>
                <td><?= h($banner->image) ?></td>
                <td><?= h($banner->url) ?></td>
                <td><?= h($banner->caption) ?></td>
                <td><?= $this->Number->format($banner->active) ?></td>
                <td><?= h($banner->created) ?></td>
                <td class="actions">
               <?= $this->Html->link(__('View'), ['action' => 'view', $banner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banner->id]) ?>
                    <?= $this->Form->postLink(__('Activate'), ['action' => 'activate', $banner->id], ['confirm' => __('Are you sure you want to Activate # {0}?', $banner->id)]) ?>
                     <?= $this->Form->postLink(__('Deactivate'), ['action' => 'deactivate', $banner->id], ['confirm' => __('Are you sure you want to Deactivate # {0}?', $banner->id)]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div> -->
<!-- <!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!--jQuery-->

  <!--css-->

  <!-- <style type="text/css">
    *{
      margin:0;
      padding:0;
    }
    .carousel{
      position:absolute;
      left:0px;
      top:0px;
      width:100%;
      height:350px;
      overflow:hidden;
      white-space:nowrap;

    }
    .img{
      float:left;
      position:relative;
      max-width:900px;
      height:auto;
      border:solid red 0px;
    }
  </style>



  <title>Title of the document</title>
  </head>

<body>

 <?php foreach ($banners as $banner): ?>
       
     <div id="carousel" class="carousel">
      <div >
       <div id="img" class="img"><img src="http://www.ttmt.org.uk/slideshow/images/slide-show-1.jpg" /></div>
        <div class="img"> <?php echo $this->Html->image('banners_hme/'.$banner->image, array('width' => '200px', 'height' => '200px')); ?></div>
        <div class="img"> <?php echo $this->Html->image('banners_hme/'.$banner->image, array('width' => '200px', 'height' => '200px')); ?></div>
        <div class="img"> <?php echo $this->Html->image('banners_hme/'.$banner->image, array('width' => '200px', 'height' => '200px')); ?></div>
      <!--  <div class="img"><img src="http://www.ttmt.org.uk/slideshow/images/slide-show-2.jpg" /></div>
       <div class="img"><img src="http://www.ttmt.org.uk/slideshow/images/slide-show-3.jpg" /></div>
       <div class="img"><img src="http://www.ttmt.org.uk/slideshow/images/slide-show-4.jpg" /></div>
 -->   <!--    </div>
    </div><?php endforeach; ?>


<script>

var zxcCarousel={

 Auto:function(id,ms){
  var o=this['zxv'+id],oop=this;
  o?o.to=setTimeout(function(){ oop.rotate(o,true); },ms||500):null;
 },

 Pause:function(id){
  var o=this['zxv'+id];
  if (o){
   clearTimeout(o.to);
   o.auto=false;
  }
 },

 init:function(o){
  var id=o.CarouselID,ms=o.Animation,h=o.AutoHold,srt=o.AutoStart,p=document.getElementById(id),s=p?p.getElementsByTagName('DIV')[0]:null;
  if (s){
   s.style.width='50000px';
   s.style.position='absolute';
   s.style.left='0px';
   var clds=s.childNodes,ary=[],z0=0;
   for (;z0<clds.length;z0++){
    if (clds[z0].nodeType==1){
     ary.push(clds[z0]);
    }
   }
   o.id=id;
   o.p=p;
   o.s=[s,'left'];
   o.ary=ary;
   o.c=0;
   o.ms=typeof(ms)=='number'&&ms>20?ms:1000;
   o.hold=typeof(h)=='number'&&h>20?h:o.ms*4;
   this['zxv'+id]=o;
   typeof(srt)=='number'&&srt>=0?this.Auto(o.id,srt):null;
  }
 },

 rotate:function(o,a){
   this.Pause(o.id);
   o.auto=a===true;
   this.animate(o,o.s,0,-o.ary[o.c].offsetWidth,new Date(),o.ms,o.ary[o.c]);
 },

 animate:function(o,a,f,t,srt,mS,nxt){
  clearTimeout(a[4]);
  var oop=this,ms=new Date()-srt,n=(t-f)/mS*ms+f;
  if (isFinite(n)){
   a[0].style[a[1]]=n+'px';
  }
  if (ms<mS){
   a[4]=setTimeout(function(){ oop.animate(o,a,f,t,srt,mS,nxt); },10);
  }
  else {
   a[0].appendChild(nxt);
   a[0].style[a[1]]='0px';
   o.c=++o.c%o.ary.length;
   o.auto?oop.Auto(o.id,o.hold):null;
  }
 }

}

zxcCarousel.init({
 CarouselID:'carousel',
 Animation:1000,
 AutoHold:2000,
 AutoStart:2000
});
</script>

</body>

</html> -->
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

    <?php $i = 1; ?>
    <?php $item_class = ($i == 1) ? 'item active' : 'item'; ?>
    <div class="<?php echo $item_class; ?>"
        <a href="#">
        <?php foreach ($banners as $banner): 
              $Player = $banner->image;
              echo "banners_hme/" .  $Player . "'";
            ?>
        </a>
    </div>
    <?php $i++; ?>
    <?php endforeach; ?> 

    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div><!-- /.carousel -->

<!-- 
<div id="homepage" class="carousel slide">
    <div class="carousel-inner">

        <?php 
          $flag = 0;
          foreach ($banners as $banner): ?>
          <div class="item <?php echo ($flag==0?"active":"");?>">

          <?php if ($banner->url){ ?>
          <a href="<?php echo $banner->url; ?>"><img src="<?php echo ($banner->image); ?>" alt="<?php echo ($banner->caption); ?>" /></a>
           </div>
          <?php } else { ?>
          <img src="<?php echo ($banner->image); ?>" alt="<?php echo ($banner->caption); ?>" />
          </div>
          <?php } ?>
          <?php 
          $flag=1; 
            endforeach; ?>
           </div> -->