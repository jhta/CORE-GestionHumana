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

<script>//
//$(document).ready(function(){
//    $("#delete").click(
//            $("#myModal2").fadeIn();
//                );
//});
//</script>
<!-- Modal -->


<div id="myModal2" class="modal hide fade" style="display: none; ">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">×</button>
              <h3>Modal Heading</h3>
            </div>
            <div class="modal-body">
              <h4>Text in a modal</h4>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

              <h4>Popover in a modal</h4>
              <p>This <a href="#" class="btn popover-test" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on hover.</p>

              <h4>Tooltips in a modal</h4>
              <p><a href="#" class="tooltip-test" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

              <hr>

              <h4>Overflowing text to show optional scrollbar</h4>
              <p>We set a fixed <code>max-height</code> on the <code>.modal-body</code>. Watch it overflow with all this extra lorem ipsum text we've included.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn" data-dismiss="modal">Close</a>
              <a href="#" class="btn btn-primary">Save changes</a>
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
            <!--<button class="btn btn-primary pull-right" id="delete" type="button" style="margin-right:10px; " data-toggle="modal" data-target="#myModal2">-->
<!--           
                <span class="glyphicon glyphicon-trash" >Puta</span>
            </button>
          </div>-->
 <a data-toggle="modal" href="#myModal2" class="btn btn-primary btn-large">Launch demo modal</a>

        
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




