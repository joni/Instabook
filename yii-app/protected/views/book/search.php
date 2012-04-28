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

<div class="book list">
<? foreach ($books->toArray() as $book): ?>
<div>
<h2>
<?=CHtml::link($book->title, $book->google_link) ?> - 
<?= CHtml::link('Recommend!', 
    array('book/recommend','book'=>md5($book->google_link))); ?>
</h2>
<p><?= $book->author ?> <?= $book->category ?></p>
<p><?= nl2br($book->description) ?></p>
</div>
<? endforeach ?>
</div>
