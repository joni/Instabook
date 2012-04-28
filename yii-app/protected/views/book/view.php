<?php
$this->breadcrumbs=array(
	'Book'=>array('/book'),
	'View',
);?>
<div style="float: left; margin: 10px">
<?= CHtml::image($book->image) ?>
</div>
<h1><?= $book->title ?></h1>
    <h2>By <?=$book->author ?></h2>

    <p>
<?= CHtml::link('+1',array('vote','id'=>$book->hash,'vote'=>+1)) ?> / 
<?= CHtml::link('-1',array('vote','id'=>$book->hash,'vote'=>-1)) ?>
</p>

<p><?= nl2br($book->description) ?></p>
