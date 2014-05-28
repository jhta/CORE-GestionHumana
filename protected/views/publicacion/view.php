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
<!-- /sidebarr -->

<!--<script>
$(document).ready(function(){
    $("#delete").click();
});
</script>-->
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       
      </div>
      <div class="modal-body">
          <div class="alert alert-warning">Esta seguro que desea eliminar este post?</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <!--<button type="button" class="btn btn-primary">Eliminar</button>-->
        <?php  echo CHtml::link(Eliminarl,  array('publicacion/delete', 'id'=>$model->id),array('type'=>'button' ,'class'=>'btn btn-primary '));?>
      </div>
    </div>
  </div>
</div>

<!-- main -->
<div class="column col-sm-8 col-sm-offset-2 col-xs-12 contenedor-post"  id="main">
    <div class="padding">
        <div class="nav navbar ">
        <?php 
         $sisas='<span class="glyphicon glyphicon-arrow-left">Volver</span>';
          $pencil='<span class="glyphicon glyphicon-pencil">Editar</span>';
        echo CHtml::link($sisas,array('publicacion/index'),array('class'=>'btn pull-left btn-primary'));
       
                   
                    if(!Yii::app()->user->isGuest) {
                        echo CHtml::link($pencil,  array('publicacion/update', 'id'=>$model->id),array('class'=>'btn btn-primary pull-right'));
                   
                    }?>
            <button class="btn btn-primary pull-right" id="delete"style="margin-right:10px; <?php  if(Yii::app()->user->isGuest) { echo 'display:none;';} ?>" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-trash" >Eliminar</span></button>
          </div>
        
        <div class="full col-sm-9 text-center col-xs-12 container-fluid">

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




