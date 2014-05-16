<?php
/* @var $this PublicacionController */
/* @var $model Publicacion */

$this->breadcrumbs=array(
	'Publicacions'=>array('index'),
	$model->titulo,
);
$this->pageTitle=$model->titulo;
$this->menu=array(
	array('label'=>'List Publicacion', 'url'=>array('index')),
	array('label'=>'Create Publicacion', 'url'=>array('create')),
	array('label'=>'Update Publicacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Publicacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Publicacion', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_view2', array(
	'data'=>$model,
)); ?>

<p></p>
<div id="comentarios">
    <?php if($model->cuentaComentarios>=1): ?>
            <h3>
                <?php echo $model->cuentaComentarios > 1 ? $model->cuentaComentarios . ' comentarios' : 'Un comentario'; ?>
            </h3>

            <?php $this->renderPartial('_comentarios',array(
                    'post'=>$model,
                    'comentarios'=>$model->comentarios,
            )); ?>
    <?php endif; ?>
    
    <h3>Dejanos un comentario</h3>

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
