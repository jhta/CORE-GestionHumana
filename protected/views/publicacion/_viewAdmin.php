
<div class="row" id="tabla">
                    <div class="col-xs-8">
                        <table class="table table-striped table-hover">
                            <trhead>
                                <th><span class="glyphicon glyphicon-th-list"></span>Publicacion</th>
                                <th><span class="glyphicon glyphicon-th-ok"></span>Visitas</th>
                                
                            </trhead>
                            <thbody>
                                <?php foreach ($Publicaciones as $i) {?> 
                                <tr>
                                   
                                    <td><?php echo $i->titulo;?></td>
                                    <td><?php echo $i->visitas;?></td>
                                </tr>
                                <?php }?>
                            </thbody>
                      </table>
                    </div>
                </div>
