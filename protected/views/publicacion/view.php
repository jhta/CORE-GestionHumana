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
<div class="column col-xs-9 col-xs-offset-3" id="main">
    <div class="padding">
        <div class="full  text-center container">

            <!-- content -->
<!--            ____________________________________________________________________________________
            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                    CONTENIDO POST
            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
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

            <!--Element-->
               <!--footer-->
               <?php $this->renderPartial('//site/footer');?>
             <!--end Footer-->


        </div><!-- /col-9 -->
    </div><!-- /padding -->
</div>
<!-- /main -->




