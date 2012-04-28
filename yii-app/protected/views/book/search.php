<?php
$this->breadcrumbs=array(
	'Book'=>array('/book'),
	'Search',
);?>
<h1>Search books</h1>

<div class="form">
<? $form = $this->beginWidget('CActiveForm') ?>
<?= $form->errorSummary($model) ?>
<?= $form->textField($model, 'query') ?>
<?= CHtml::submitButton('Search') ?>
<? $this->endWidget() ?>
</div>

<? if (!empty($books)): ?>
<div class="book list">
<? foreach ($books->toArray() as $book): ?>
<div>
<div style="float: left; margin: 10px">
<?= CHtml::image($book->image) ?>
</div>
<h2>
<?=CHtml::link($book->title, array('view', 'id'=>$book->hash)) ?> - 
<?= CHtml::link('+1', 
    array('book/vote','id'=>md5($book->google_link), 'vote'=>+1)); ?>
</h2>
<p><?= $book->author ?> <?= $book->category ?></p>
<p><?= nl2br($book->description) ?></p>
</div>
<? endforeach ?>
</div>
<? endif; ?>
