<?php
$this->breadcrumbs=array(
	'Book'=>array('/book'),
	'View',
);?>
<h1><?= $book->title ?></h1>

    <p><?= CHtml::link('+1', array('vote', 'id'=>$book->hash, 'vote'=>+1)) ?> / 
<?= CHtml::link('-1', array('vote', 'id'=>$book->hash, 'vote'=>-1)) ?></a>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
