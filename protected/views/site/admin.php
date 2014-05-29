<!-- Modal Para editar perfil-->
<?php/* $this->renderPartial('//usuario/_edit', array(
     'modelU' => $modelU,
       'id'=> $modelU->id,
    ));?>
<!-- Modal para crear usuario -->
<?php $this->renderPartial('//usuario/_form', array(
     'model' => $model,
    ));?>
<!-- Informacion de perfil en columna de la izquierda-->
<?php $this->renderPartial('//usuario/_viewAdmin', array(
     'modelU' => $modelU,
     
    ));*/?>

<div class="col-sm-9 col-xs-12" id="slide-right">
        <nav class="navbar navbar-inverse " role="navigation">
                <div class="navbar-right ">
                        <div class="pull-right">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>">INDEX</a>
                                <a href="<?php echo Yii::app()->createAbsoluteUrl('site/logout'); ?>">SALIR</a>

                        </div>
                </div>
        </nav>

          <div id="Publicaciones">
                <legend><span class="glyphicon glyphicon-list"></span> Publicaciones</legend>
               
                   
                 <div class="row" id="tabla">
                    <div class="  col-ms-8  col-xs-12 pad-0">
                <?php
                /*
                 * RenderPartial for view visits X publication's
                 */
                    $this->renderPartial('//publicacion/_viewAdmin', array(
                        'Publicaciones' => $Publicaciones,
                        'cantidad'=>floor( ($modelI->total_clicks)/2),
                    ));
                    ?>
                         </div>
                     <div class="col-sm-3 col-xs-12">
                            <?php
                    
                    echo CHtml::link('Nueva Publicacion', array('publicacion/create'),array('class'=>'btn btn-primary pull-left'));
                    ?>
                         
                     </div>
                </div>
                   
               
        </div>
        <div id="graficas">
                <legend><span class="glyphicon glyphicon-stats"></span> Graficas</legend>
                <div class="col-sm-7 col-xs-12">
                        <canvas id="canvas" height="400" width="560"></canvas>


                                <script>
//                                  
                                        var lineChartData = {
                                                labels : <?php echo $jsonMes; ?>,
                                                datasets : [

                                                        {
                                                                fillColor : "rgba(151,187,205,0.5)",
                                                                strokeColor : "rgba(151,187,205,1)",
                                                                pointColor : "rgba(151,187,205,1)",
                                                                pointStrokeColor : "#fff",
                                                                data : <?php echo $jsonVis; ?>
                                                        }
                                                ]

                                        }

                                var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

                                </script>

                </div>
              <!-- Modal Para editar perfil-->
<?php $this->renderPartial('//comentario/_viewAdmin', array(
     'UComentarios' => $UComentarios,
    ));?>
        </div>
        <div id="edit-index">
                <legend><span class="glyphicon glyphicon-wrench"></span> Administracion</legend>
                <div>
                        <div class="container">


                    <div class="row">

                        <div class="col-sm-9 col-md-10">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-th-list">
                                </span>General</a></li>
                                <li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span>
                                    Mision</a></li>
                                <li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span>
                                    Vision</a></li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4> Modificar el texto del Index</h4>
                                    <div class="list-group">
                                            <div class="col-xs-10 col-xs-offset-1">
                                            <?php if(Yii::app()->user->hasFlash('informationchange')): ?>
                                                <div class="flash-success">
                                                        <?php echo Yii::app()->user->getFlash('informationchange'); ?>
                                                </div>
                                            <?php else:?>
                                                <div class="row">
                                                    <?php $form=$this->beginWidget('CActiveForm', array(
                                                            'id'=>'general-form',
                                                            'enableAjaxValidation'=>false,
                                                    )); ?>
                                                            <div class="row">
                                                                <?php echo $form->textField($modelI,'titulo',
                                                                        array('size'=>30,
                                                                            'maxlength'=>70,
                                                                            'class'=>'form-control input-comentario',
                                                                            'placeholder'=>'Titulo a mostrar en el index',

                                                                            )); ?>
                                                                <?php echo $form->error($modelI,'titulo'); ?>
                                                            </div>


                                                            <div class="row">
                                                                <?php echo $form->textArea($modelI,'descripcion',
                                                                        array('rows'=>6,
                                                                            'cols'=>50,
                                                                            'class'=>'form-control input-comentario',
                                                                            'placeholder'=>'Escribe aqui la descripción que saldrá en el index',

                                                                            )); ?>
                                                                <?php echo $form->error($modelI,'descripcion'); ?>
                                                            </div>
                                                            <div class="row buttons">
                                                                <?php echo CHtml::submitButton('Modificar',array('class'=>'btn btn-primary','style'=>'margin-top:15px;')); ?>
                                                            </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                <div class="tab-pane fade in" id="profile">
                                    <h4> Modificar la Mision</h4>
                                    <div class="list-group">
                                        <div class="col-xs-10 col-xs-offset-1">
                                            <div class="row">
                                                    
                                                    <div class="row">
                                                        <?php echo $form->textArea($modelI,'mision',
                                                                array('rows'=>6,
                                                                    'cols'=>50,
                                                                    'class'=>'form-control input-comentario',
                                                                    'placeholder'=>'Escribe aqui la misión de la empresa',

                                                                    )); ?>
                                                        <?php echo $form->error($modelI,'mision'); ?>
                                                    </div>
                                                    <div class="row buttons">
                                                        <?php echo CHtml::submitButton('Modificar',array('class'=>'btn btn-primary','style'=>'margin-top:15px;')); ?>
                                                    </div>
                                            </div>
                                        </div>               
                                    </div>
                                </div>
                                <div class="tab-pane fade in" id="messages">
                                        <h4> Modificar la Vision</h4>
                                        <div class="col-xs-10 col-xs-offset-1">								
                                            <div class="row">
                                                    <div class="row">
                                                            <?php echo $form->textArea($modelI,'vision',
                                                                    array('rows'=>6,
                                                                        'cols'=>50,
                                                                        'class'=>'form-control input-comentario',
                                                                        'placeholder'=>'Escribe aqui la visión de la empresa',

                                                                        )); ?>
                                                            <?php echo $form->error($modelI,'vision'); ?>
                                                        </div>
                                                        <div class="row buttons">
                                                            <?php echo CHtml::submitButton('Modificar',array('class'=>'btn btn-primary','style'=>'margin-top:15px;')); ?>
                                                        </div>
                                                    <?php $this->endWidget(); ?>
                                                </div>
                                            <?php endif ?>
                                        </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                </div>

                </div>



        </div>
<!-- Button trigger modal -->
