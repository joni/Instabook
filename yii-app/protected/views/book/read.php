<h1><?= $book->title ?> (<span style="color:green">+<?=$book->vote?></span> / <span style="color:red">-<?=$book->n_vote?></span>)
<h2>By <?=$book->author ?>

<span style="color: green"><?= CHtml::link('+1',array('vote','id'=>$book->google_id,'vote'=>+1)) ?> </span> /
<span style="color: red">
<?= CHtml::link('-1',array('vote','id'=>$book->google_id,'vote'=>-1)) ?></a>
</span></h2>
<script type="text/javascript" src="http://books.google.com/books/previewlib.js"></script>
<script type="text/javascript">
GBS_insertEmbeddedViewer('<?=$book->google_id?>',910,500);
</script>

<div class="fb-comments" data-href="<?php echo Yii::app()->request->baseUrl.'/'.$book->google_id; ?>" data-num-posts="10" data-width="910"></div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=140209332712403";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>    
