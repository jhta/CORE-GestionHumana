  <div class="col-sm-5 col-xs-12" >
                        <div class="panel panel-default">
                                <div class="panel-heading"><span class="glyphicon glyphicon-comment"></span> Ultimos Comentarios</div>
                                <div class="panel-body">
                                    <?php foreach ($UComentarios as $i) {
                                        
                                     ?>
                                        <div class="comentario-admin">
                                            <small class="text-muted"> <?php echo $i->fecha; ?></small>
                                            <small class="text-muted"> <?php echo $i->nombre; ?></small>
                                            <p><?php echo substr($i->comentario, 0, 100) ?>..</p>
                                        </div>
                                    <?php }?>    
                                        
                                </div>
                        </div>	
                </div>