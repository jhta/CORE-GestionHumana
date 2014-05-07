<?php
/* @var $this EtiquetaController */
/* @var $model Etiqueta */

$this->breadcrumbs=array(
	'Etiquetas'=>array('index'),
	$model->nombre=>array('view','id'=>$model->nombre),
	'Update',
);

$this->menu=array(
	array('label'=>'List Etiqueta', 'url'=>array('index')),
	array('label'=>'Create Etiqueta', 'url'=>array('create')),
	array('label'=>'View Etiqueta', 'url'=>array('view', 'id'=>$model->nombre)),
	array('label'=>'Manage Etiqueta', 'url'=>array('admin')),
);
?>

<h1>Update Etiqueta <?php echo $model->nombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>