<div class="col-xs-3" id="slide-left">
        <div id="edit-perfil">
                <div class="imagen">
                    <?php if($modelU->nombre_foto==NULL){
                        $foto= "https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120";
                        
                    }else{
                        $foto= Yii::app()->request->baseUrl.$modelU->nombre_foto.".".$modelU->formato_foto;
                    }
                    ?>
                    <img  class="img-circle" src="<?php echo $foto?>">
                </div>
            <h3 class="nombre"><?php echo Yii::app()->user->nombre; ?></h3>
            <div class="descripcion"><?php echo $modelU->descripcion; echo Yii::app()->user->id; ?></div>
        </div>
    <div class="btn btn-primary " id="btn-perfil" data-toggle="modal" data-target="#myModal">
  <span class="glyphicon glyphicon-edit"> </span> 
  <span> Editar</span>
</div>
    
    <!--<div class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Editar Perfil</div>-->
</div>