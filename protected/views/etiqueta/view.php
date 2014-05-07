<?php
/* @var $this EtiquetaController */
/* @var $model Etiqueta */

$this->breadcrumbs=array(
	'Etiquetas'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'List Etiqueta', 'url'=>array('index')),
	array('label'=>'Create Etiqueta', 'url'=>array('create')),
	array('label'=>'Update Etiqueta', 'url'=>array('update', 'id'=>$model->nombre)),
	array('label'=>'Delete Etiqueta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nombre),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Etiqueta', 'url'=>array('admin')),
);
?>

<h1>View Etiqueta #<?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
	),
)); ?>
