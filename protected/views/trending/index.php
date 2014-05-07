<?php
/* @var $this TrendingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trendings',
);

$this->menu=array(
	array('label'=>'Create Trending', 'url'=>array('create')),
	array('label'=>'Manage Trending', 'url'=>array('admin')),
);
?>

<h1>Trendings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
