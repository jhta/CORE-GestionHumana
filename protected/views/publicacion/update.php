<?php
/* @var $this PublicacionController */
/* @var $model Publicacion */

$this->breadcrumbs=array(
	'Publicacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Publicacion', 'url'=>array('index')),
	array('label'=>'Create Publicacion', 'url'=>array('create')),
	array('label'=>'View Publicacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Publicacion', 'url'=>array('admin')),
);
?>
<div id='new-publication' class='col-sm-10 col-sm-offset-1 col-xs-12'>
<Legend>Crear Publicación</legend>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>