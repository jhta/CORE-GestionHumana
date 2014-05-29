<div class="col-sm-3 col-xs-12" id="slide-left">
        <div id="edit-perfil">
                <div class="imagen">
                    <?php if($modelU->nombre_foto==NULL){
                        $foto= "https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120";
                        
                    }else{
                        $foto= Yii::app()->request->baseUrl.$modelU->nombre_foto.$modelU->formato_foto;
                    }
                    ?>
                    <img  class="img-circle" src="<?php echo $foto?>">  
                </div>
            <h3 class="nombre"><?php echo $modelU->nombre; ?></h3>
            <h4 class="correo text-center"> <?php echo $modelU->correo; ?></h4>
            <h4 class="titulo text-center"><?php echo $modelU->titulo; ?></h4>
            <div class="descripcion"><?php echo $modelU->descripcion; ?></div>
        </div>
    <div class="btn btn-primary " id="btn-perfil" data-toggle="modal" data-target="#myModal">
        <span class="glyphicon glyphicon-edit"> </span> 
        <span> Editar</span>
    </div>
    
    <div class="btn btn-primary " id="btn-crear" data-toggle="modal" data-target="#myModal2">
        <span class="glyphicon glyphicon-edit"> </span> 
        <span>Crear Usuario</span>
    </div>

    
    <!--<div class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Editar Perfil</div>-->
</div>