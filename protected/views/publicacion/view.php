<?php
/* @var $this PublicacionController */
/* @var $model Publicacion */

$this->breadcrumbs=array(
	'Publicacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Publicacion', 'url'=>array('index')),
	array('label'=>'Create Publicacion', 'url'=>array('create')),
	array('label'=>'Update Publicacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Publicacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Publicacion', 'url'=>array('admin')),
);
?>

<h1>View Publicacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
		'contenido',
		'USUARIO_id',
		'fecha',
	),
)); ?>

<div id="comentarios">
    <h3>Leave a Comment</h3>

    <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
            <div class="flash-success">
                    <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
            </div>
    <?php else: ?>
            <?php $this->renderPartial('/comentario/_form',array(
                    'model'=>$comment,
            )); ?>
    <?php endif; ?>
</div>
