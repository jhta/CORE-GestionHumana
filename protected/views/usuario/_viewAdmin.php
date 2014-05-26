<div class="col-xs-3" id="slide-left">
        <div id="edit-perfil">
                <div class="imagen">
                        <img  class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120">
                </div>
            <h3 class="nombre"><?php echo Yii::app()->user->nombre; ?></h3>
                <div class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div>
    <div class="btn btn-primary " id="btn-perfil" data-toggle="modal" data-target="#myModal">
  <span class="glyphicon glyphicon-edit"> </span> 
  <span> Editar</span>
</div>
    
    <!--<div class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Editar Perfil</div>-->
</div>