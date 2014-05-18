<?php
/* @var $this PublicacionController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Publicacions',
//);
//
//$this->menu=array(
//	array('label'=>'Create Publicacion', 'url'=>array('create')),
//	array('label'=>'Manage Publicacion', 'url'=>array('admin')),
//);
?>


<!-- sidebar -->
<div class="column col-xs-3" id="sidebar">
    <a class="logo" href="#">B</a>
    <legend>Posts</legend>
    <ul class="nav">
        
        <?php  $this->widget('zii.widg  ets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_viewSideBar',
            ));
//            $this->renderPartial('_viewSideBar', array(
//            'publicacionesl' => $publicacionesl,
//            ));
        ?>
    </ul>
    <ul class="nav hidden-xs" id="sidebar-footer">
        <li>
            <a href="http://www.bootply.com"><h3>SINSO S.A</h3></a>
        </li>
    </ul>
</div>
<!-- /sidebar -->

<!-- main -->
<div class="column col-xs-9" id="main">
    <div class="padding">
        <div class="full col-sm-9">

            <!-- content -->
            <!--Titulo para post-->
            <div class="col-sm-12" id="featured">   
                <div class="page-header text-muted">
                    Publicaciones
                </div> 
            </div>
            <!--Fin Titulo para post-->
            ____________________________________________________________________________________
<!--            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                    CONTENIDO GENERAL
            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
            <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_view',
            )); ?>



            <!--Element-->
            <!--Contacto-->
            <div class="col-sm-12">
                <div class="page-header text-muted divider">
                    Conectate con nosotros
                </div>
            </div>
            <!--Social-->
            <div class="row">
                <div class="col-sm-6">
                    <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                </div>
            </div>
            <!--End Social-->
            <hr>
            <!--FOoter-->
            <div class="row" id="footer">    
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <p>
                        <a href="#" class="pull-right">©Copyright Inc.</a>
                    </p>
                </div>
            </div>
             <!--end Footer-->


        </div><!-- /col-9 -->
    </div><!-- /padding -->
</div>
<!-- /main -->

