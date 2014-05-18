
<!-- sidebar -->
<div class="column col-xs-3" id="sidebar">
    <a class="logo col-xs-1" href="#" style="margin-right: 0;">C</a>
    <a class="logo col-xs-4 col-xs-offset-1" href="#" style="
    margin-left: 0;
    background: transparent;
    color: white;
">CORE</a>
    <legend style="color: white;">Publicaciones</legend>
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

