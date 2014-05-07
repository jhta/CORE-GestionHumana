<?php
/* @var $this TrendingController */
/* @var $model Trending */

$this->breadcrumbs=array(
	'Trendings'=>array('index'),
	$model->ETIQUETA_nombre,
);

$this->menu=array(
	array('label'=>'List Trending', 'url'=>array('index')),
	array('label'=>'Create Trending', 'url'=>array('create')),
	array('label'=>'Update Trending', 'url'=>array('update', 'id'=>$model->ETIQUETA_nombre)),
	array('label'=>'Delete Trending', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ETIQUETA_nombre),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trending', 'url'=>array('admin')),
);
?>

<h1>View Trending #<?php echo $model->ETIQUETA_nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUBLICACION_id',
		'ETIQUETA_nombre',
	),
)); ?>
