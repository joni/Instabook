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
