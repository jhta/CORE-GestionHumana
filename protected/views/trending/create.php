<?php
/* @var $this TrendingController */
/* @var $model Trending */

$this->breadcrumbs=array(
	'Trendings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trending', 'url'=>array('index')),
	array('label'=>'Manage Trending', 'url'=>array('admin')),
);
?>

<h1>Create Trending</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>