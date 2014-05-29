<div class="column col-sm-3 col-xs-0" id="sidebar">
    <a class="logo col-xs-1" href="#" style="margin-right: 0;">C</a>
    <a class="logo col-xs-4 col-xs-offset-1" href="#" style="
    margin-left: 0;
    background: transparent;
    color: white;
">CORE</a>
    
    <legend style="color: white;">Publicaciones con etiqueta <?php echo $tagName;?></legend>
    <ul class="nav">
        
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
            <div class="col-sm-12" id="featured">
               
                <div class="page-header text-muted">
                    Publicaciones con etiqueta <?php echo $tagName;?>
                     <?php echo CHtml::link('Volver',array('publicacion/index'),array('class'=>'btn btn-primary pull-right', 'style'=>'margin-top: -7px;'));?>
                </div> 
            </div>
            <!--Fin Titulo para post-->
<!--            ____________________________________________________________________________________
            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                    CONTENIDO GENERAL
            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
            <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_view',
                    'ajaxUpdate'=>false,
                    'enablePagination'=>false,
                    'pagerCssClass' => 'result-list',
                    'summaryText' => 'Se encontraron '. $pages->itemCount .' ',
                
            )); 
            
            
            $this->widget('CLinkPager', array(
                    'header' => '',
                    'firstPageLabel' => '&lt;&lt;',
                    'prevPageLabel' => '&lt;',
                    'nextPageLabel' => '&gt;',
                    'lastPageLabel' => '&lt;&lt;',
                    'pages' => $pages,
            ));
            ?>
            
            <!--Element-->
               <!--footer-->
               <?php $this->renderPartial('//site/footer');?>
             <!--end Footer-->


        </div><!-- /col-9 -->
    </div><!-- /padding -->
</div>
