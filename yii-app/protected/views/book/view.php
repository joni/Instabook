<?php
$this->breadcrumbs=array(
	'Book'=>array('/book'),
	'View',
);?>
<div style="book view">
<div style="float: left; margin: 10px 10px 0 0">
<?= CHtml::image($book->image) ?>
</div>
<h1><?= $book->title ?>
<?= CHtml::link('+1',array('vote','id'=>$book->google_id,'vote'=>+1)) ?> / 
<?= CHtml::link('-1',array('vote','id'=>$book->google_id,'vote'=>-1)) ?>
</h1>
<h2>By <?=$book->author ?></h2>

<p><?= nl2br($book->description) ?></p>
</div>

<div class="fb-comments" data-href="<?php echo Yii::app()->request->baseUrl; ?>" data-num-posts="10" data-width="910"></div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=140209332712403";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>    