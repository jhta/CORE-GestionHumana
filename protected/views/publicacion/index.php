<script>
$(document).ready(function(){
    var options = {
  valueNames: [ 'Stitulo','Snombre' ]
};
var searchP = new List('searchP', options');
});
</script>   
<div id="searchP">

<!-- sidebar -->
<div class="column col-sm-3 col-xs-0" id="sidebar">
    <a class="logo col-xs-1" href="#" style="margin-right: 0;">C</a>
    <a class="logo col-xs-4 col-xs-offset-1" href="#" style="
    margin-left: 0;
    background: transparent;
    color: white;
">CORE</a>
    <legend style="color: white;">Publicaciones</legend>
<!--    <div >
                    <input type="text" class="search form-control " placeholder="buscar Publicacion.." >
                    </div>-->
                   
    <ul class="nav ">
        
        <?php  $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_viewSideBar',
                    'summaryText' => 'Se encontraron '. $pages->itemCount .' ',
            ));
//            $this->renderPartial('_viewSideBar', array(
//            'publicacionesl' => $publicacionesl,
//            ));
        ?>
    </ul>
    <ul class="nav hidden-xs" id="sidebar-footer">
        <li>
            
        </li>
    </ul>
</div>
<!-- /sidebar -->

<!-- main -->
<div class="column2 col-sm-9 col-xs-12" id="main">
    <div class="padding">
        <div class="full col-sm-9">
           
            <!-- content -->
            <!--Titulo para post-->
            <div class="col-sm-12 col-xs-12" id="featured">   
                <div class="page-header text-muted">
                    Publicaciones
                        <?php
                    if(!Yii::app()->user->isGuest) {
                    echo CHtml::link('Publicar', array('publicacion/create'),array('class'=>'btn btn-primary pull-right','style'=>'margin: -7px;letter-spacing: 0px;'));
                    echo CHtml::link('Administración', array('site/admin'),array('class'=>'btn btn-primary pull-right','style'=>'margin: -7px;letter-spacing: 0px; margin-right:10px;'));
                    }?>
                    <!--<div class="btn btn-primary pull-right" style="
                        margin: -7px;
                        letter-spacing: 0px;
                    ">Nueva Publicación</div>-->
                </div> 
            </div>
            <!--Fin Titulo para post-->
<!--            ____________________________________________________________________________________
            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                    CONTENIDO GENERAL
            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<ul class="list">
                <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_view',
                    
                    'pagerCssClass' => 'result-list',
                    'summaryText' => 'Se encontraron '. $pages->itemCount .' ',
                
            )); 

            ?>
            </ul>
            <!--Element-->
               <!--footer-->
               <?php //$this->renderPartial('//site/footer');?>
             <!--end Footer-->


        </div><!-- /col-9 -->
    </div><!-- /padding -->
</div>
<!-- /main -->

    </div >
