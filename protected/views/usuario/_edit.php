<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Editar Perfil</h4>
      </div>
        <script type="text/javascript">
    $(document).ready(function(){        
//    function send(){
//               var data=$("#edit_person-form").serialize();
//               alert("hola");
// 
//                $.ajax({
//                     async: true,
//            cache: false,
//                 type: 'POST',
//                  url: ' <?php echo "'" . CController::createUrl('usuario/update2') . "'"; ?>',
//                 data:data,
////              success:function(data){
////                              alert(data); 
////                            },
////                 error: function(data) { // if error occured
////                       alert("Lo sentimos, se h presentado un error :'(");
////                       
////                  },
//
//                dataType:'html'
//                }).done(function(result) {
//             alert(result);
//            
//        }); 
//        } 
            
            $("#btn-send").click(function(){
                alert("sisas");
            });
            });
        </script>
        
        
       
        <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'edit_person-form',
    'enableAjaxValidation'=>false,
        'htmlOptions'=>array(
                               'onsubmit'=>"return false;",/* Disable normal form submit */
                               'onkeypress'=>" if(event.keyCode == 13){ send(); } " /* Do ajax call when user presses enter key */
                             ),
)); ?>
      <div class="modal-body col-xs-10 col-xs-offset-1">
												
            <div class="row">
            <h4 class="text-center" > Nombre</h4>
            <?php echo $form->textField($modelU,'nombre',
                    array(
                        'size'=>50,
                        'maxlength'=>50,
                        'class'=>'form-control',
                        'required'=>'requiered',
                        'type'=>'text',
                        'value'=> Yii::app()->user->nombre,
                        'placeholder'=>'Nombre'
                        
                        )
                ); ?>
		<?php echo $form->error($modelU,'nombre'); ?>			
            </div>

          <div class="row">
            <h4 class="text-center" > Titulo</h4>
            <?php echo $form->textField($modelU,'titulo',
                    array(
                        'size'=>50,
                        'maxlength'=>50,
                        'class'=>'form-control',
                        'required'=>'requiered',
                        'type'=>'text',
                        'value'=> $modelU->titulo,
                        'placeholder'=>'Titulo'
                        
                        )
                ); ?>
		<?php echo $form->error($modelU,'titulo'); ?>			
            </div>
          
          <div class="row">
            <h4 class="text-center" > Correo</h4>
            <?php echo $form->textField($modelU,'correo',
                    array(
                        'size'=>70,
                        'maxlength'=>70,
                        'class'=>'form-control',
                        'required'=>'requiered',
                        'type'=>'email',
                        'value'=> $modelU->correo,
                        'placeholder'=>'Correo'
                        
                        )
                ); ?>
		<?php echo $form->error($modelU,'correo'); ?>			
            </div>
          
          <div class="row">
            <h4 class="text-center" > Descripcion</h4>
            <?php echo $form->textArea($modelU,'descripcion',
                    array(
                        'rows'=>6,
                        'cols'=>50,
                        'class'=>'form-control',
                        'required'=>'requiered',
                        'type'=>'text',
                        'value'=> $modelU->descripcion,
                        'placeholder'=>'Contenido'
                        
                        )
                ); ?>
		<?php echo $form->error($modelU,'descripcion'); ?>			
            </div>
          

<div class="row">
            <h4 class="text-center" > Foto</h4>
            <?php echo $form->fileField($modelU,'foto'); ?>
            <?php echo $form->error($modelU,'foto'); ?>
        </div>
<!--            <div class="row" style="margin-top:10px;">
                    <span>Foto: </span>
                    <span class="glyphicon glyphicon-camera ico-camara " ><input type="file" id="myfile" name="myfile"></span>
                 
                <input type="file" class="filestyle" data-iconName="glyphicon-camera">

            </div>-->

			      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary btn-edit">Guardar Cambios</button>-->
         <?php echo CHtml::Button('Guardar Cambios',array(
            'id'=>'btn-send',
             'class'=>'btn btn-primary btn-edit',
             )); ?> 
      </div>
        <?php $this->endWidget(); ?>
       
    </div>
  </div>
</div>
