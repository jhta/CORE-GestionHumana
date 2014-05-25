<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Editar Perfil</h4>
      </div>
      <div class="modal-body col-xs-10 col-xs-offset-1">
		
			<form  action="" method="post">
												
				<div class="row">
				<h4 class="text-center" > Nombre</h4>
				<input size="30" maxlength="30" class="form-control " edit-publicacioneseholder="nombre" required="required" name="Comentario[nombre]" id="Comentario_nombre" value="holi" type="text" placeholder="Titulo texto">			
				</div>
				
				
				<div class="row">
					<h4 class="text-center" > Descripción</h4>
					<textarea rows="6" cols="50" class="form-control " placeholder="Escribe aqui tu comentario" value="holi2" required="required" name="Comentario[comentario]" placeholder="cuerpoTexto" >
						hola como estoy
					</textarea>			
				</div>
				<div class="row" style="margin-top:10px;">
					<span>Foto: </span>
					<span class="glyphicon glyphicon-camera ico-camara " ><input type="file" id="myfile" name="myfile"></span>
					
				</div>

			</form>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
