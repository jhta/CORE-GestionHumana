<?php
/* @var $this TrendingController */
/* @var $model Trending */

$this->breadcrumbs=array(
	'Trendings'=>array('index'),
	$model->ETIQUETA_nombre=>array('view','id'=>$model->ETIQUETA_nombre),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trending', 'url'=>array('index')),
	array('label'=>'Create Trending', 'url'=>array('create')),
	array('label'=>'View Trending', 'url'=>array('view', 'id'=>$model->ETIQUETA_nombre)),
	array('label'=>'Manage Trending', 'url'=>array('admin')),
);
?>

<h1>Update Trending <?php echo $model->ETIQUETA_nombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>