<div class="col-xs-3" id="slide-left">
        <div id="edit-perfil">
                <div class="imagen">
                        <img  class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120">
                </div>
                <h3 class="nombre">jeison higuita sanchez</h3>
                <div class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div>
        <div class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Editar Perfil</div>
</div>
<div class="col-xs-9">
        <nav class="navbar navbar-inverse " role="navigation">
                <div class="navbar-right">
                        <div class="pull-right">
                                <a href="#">INDEX</a>
                                <a href="#">SALIR</a>

                        </div>
                </div>
        </nav>

        <div id="graficas">
                <legend><span class="glyphicon glyphicon-stats"></span> Graficas</legend>
                <div class="col-xs-7">
                        <canvas id="canvas" height="400" width="560"></canvas>


                                <script>
//
//                                        var lineChartData = {
//                                                labels : ["January","February","March","April","May","June","July"],
//                                                datasets : [
//
//                                                        {
//                                                                fillColor : "rgba(151,187,205,0.5)",
//                                                                strokeColor : "rgba(151,187,205,1)",
//                                                                pointColor : "rgba(151,187,205,1)",
//                                                                pointStrokeColor : "#fff",
//                                                                data : [28,48,40,19,96,27,100]
//                                                        }
//                                                ]
//
//                                        }
//
//                                var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

                                </script>

                </div>
                <div class="col-xs-5" >
                        <div class="panel panel-default">
                                <div class="panel-heading"><span class="glyphicon glyphicon-comment"></span> Ultimos Comentarios</div>
                                <div class="panel-body">
                                        <div class="comentario-admin">
                                                <small class="text-muted">2013-12-12</small>
                                                <small class="text-muted"> Nombre Post</small>
                                                <p>Hola muy chimbita el post, jeison eres el mejor te amo lindo(100 caracteres)..</p>
                                        </div>
                                        <div class="comentario-admin">
                                                <small class="text-muted">2013-12-12</small>
                                                <small class="text-muted"> Nombre Post</small>
                                                <p>Hola muy chimbita el post, jeison eres el mejor te amo lindo(100 caracteres)..</p>
                                        </div>
                                        <div class="comentario-admin">
                                                <small class="text-muted">2013-12-12</small>
                                                <small class="text-muted"> Nombre Post</small>
                                                <p>Hola muy chimbita el post, jeison eres el mejor te amo lindo(100 caracteres)..</p>
                                        </div>
                                        <div class="comentario-admin">
                                                <small class="text-muted">2013-12-12</small>
                                                <small class="text-muted"> Nombre Post</small>
                                                <p>Hola muy chimbita el post, jeison eres el mejor te amo lindo(100 caracteres)..</p>
                                        </div>
                                        <div class="comentario-admin">
                                                <small class="text-muted">2013-12-12</small>
                                                <small class="text-muted"> Nombre Post</small>
                                                <p>Hola muy chimbita el post, jeison eres el mejor te amo lindo(100 caracteres)..</p>
                                        </div>
                                        <div class="comentario-admin">
                                                <small class="text-muted">2013-12-12</small>
                                                <small class="text-muted"> Nombre Post</small>
                                                <p>Hola muy chimbita el post, jeison eres el mejor te amo lindo(100 caracteres)..</p>
                                        </div>
                                </div>
                        </div>	
                </div>
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
                                            <div class="row">
                                                    <form  action="" method="post">

                                                            <div class="row">
                                                            <input size="30" maxlength="30" class="form-control input-comentario" edit-publicacioneseholder="nombre" required="required" name="Comentario[nombre]" id="Comentario_nombre" type="text" placeholder="Titulo texto">			
                                                            </div>


                                                            <div class="row">
                                                                    <textarea rows="6" cols="50" class="form-control input-comentario" placeholder="Escribe aqui tu comentario" required="required" name="Comentario[comentario]" placeholder="cuerpoTexto" ></textarea>			</div>

                                                            <div class="row buttons">
                                                                    <input class="btn btn-primary" style="margin-top:15px;" type="submit" name="yt0" value="Comentar">	</div>

                                                    </form>
                                            </div>

                                            </div>
                                        </div>

                                    </div>
                                <div class="tab-pane fade in" id="profile">
                                    <h4> Modificar la Mision</h4>
                                    <div class="list-group">
                                                        <div class="col-xs-10 col-xs-offset-1">
                                                                        <form  action="" method="post" class="form-update">

                                                                                <div class="row">
                                                                                        <textarea rows="6" cols="50" class="form-control input-comentario" placeholder="Escribe aqui tu comentario" required="required" name="Comentario[comentario]" ></textarea>			</div>

                                                                                <div class="row buttons">
                                                                                        <input class="btn btn-primary" style="margin-top:15px;" type="submit" name="yt0" value="Comentar">	</div>

                                                                        </form>
                                                                </div>               
                                    </div>
                                </div>
                                <div class="tab-pane fade in" id="messages">
                                        <h4> Modificar la Vision</h4>
                                        <div class="col-xs-10 col-xs-offset-1">								
                                                                <form  action="" method="post" class="form-update">

                                                                        <div class="row">
                                                                                <textarea rows="6" cols="50" class="form-control input-comentario" placeholder="Escribe aqui tu comentario" required="required" name="Comentario[comentario]" ></textarea>			</div>

                                                                        <div class="row buttons">
                                                                                <input class="btn btn-primary" style="margin-top:15px;" type="submit" name="yt0" value="Comentar">	</div>

                                                                </form>
                                                        </div>
                                                 </div>

                            </div>

                        </div>
                    </div>
                </div>

                </div>

                </div>



        </div>
