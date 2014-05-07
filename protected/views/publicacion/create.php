<?php
/* @var $this PublicacionController */
/* @var $model Publicacion */

$this->breadcrumbs=array(
	'Publicacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Publicacion', 'url'=>array('index')),
	array('label'=>'Manage Publicacion', 'url'=>array('admin')),
);
?>

<h1>Create Publicacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>