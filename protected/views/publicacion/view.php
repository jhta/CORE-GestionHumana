<?php
/* @var $this PublicacionController */
/* @var $model Publicacion */

//$this->breadcrumbs=array(
//	'Publicacions'=>array('index'),
//	$model->titulo,
//);
//$this->pageTitle=$model->titulo;
//$this->menu=array(
//	array('label'=>'List Publicacion', 'url'=>array('index')),
//	array('label'=>'Create Publicacion', 'url'=>array('create')),
//	array('label'=>'Update Publicacion', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Publicacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Publicacion', 'url'=>array('admin')),
//);
?>

<!-- sidebar -->
<!--<div class="column col-xs-3" id="sidebar">
    <a class="logo col-xs-1" href="#" style="margin-right: 0;">C</a>
    <a class="logo col-xs-4 col-xs-offset-1" href="#" style="
    margin-left: 0;
    background: transparent;
    color: white;
">CORE</a>
    <legend style="color: white;">Publicaciones</legend>
    <ul class="nav">
        
        
    </ul>
    <ul class="nav hidden-xs" id="sidebar-footer">
        <li>
            <a href="http://www.bootply.com"><h3>SINSO S.A</h3></a>
        </li>
    </ul>
</div>-->
<!-- /sidebar -->

<!-- main -->
<div class="column col-xs-8 col-xs-offset-2 contenedor-post"  id="main">
    <div class="padding">
        <?php echo CHtml::link('Volver',array('publicacion/index'),array('class'=>'btn pull-left btn-primary'));?>
        <div class="full col-sm-9 text-center container-fluid">

            <!-- content -->
<!--            ____________________________________________________________________________________
            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                    CONTENIDO POST
            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
            <?php $this->renderPartial('_view2', array(
                    'data'=>$model,
            )); ?>

            <p></p>
            <div id="comentarios" class="text-left">
                <?php if($model->cuentaComentarios>=1): ?>
                        <label class="text-left">
                            <?php echo $model->cuentaComentarios > 1 ? $model->cuentaComentarios . ' comentarios:' : 'Un comentario:'; ?>
                        </label>

                        <?php $this->renderPartial('_comentarios',array(
                                'post'=>$model,
                                'comentarios'=>$model->comentarios,
                        )); ?>
                <?php endif; ?>

                <h4>Déjanos un comentario!</h4>

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

            <!--Element-->
               <!--footer-->
               <?php $this->renderPartial('//site/footer');?>
             <!--end Footer-->


        </div><!-- /col-9 -->
    </div><!-- /padding -->
</div>
<!-- /main -->




