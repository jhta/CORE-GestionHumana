
<div class="row" id="tabla">
                    <div class=" col-xs-offset-1 col-xs-8 pad-0">
                        <table class="table table-striped table-hover">
                            <trhead>
                                <th><span class="glyphicon glyphicon-th-list"></span> Publicacion</th>
                                <th><span class="glyphicon glyphicon-ok"></span> Visitas</th>
                                
                            </trhead>
                            <thbody>
                                <?php foreach ($Publicaciones as $i) {?> 
                                <tr>
                                   
                                    <td><?php echo CHtml::link($i->titulo, array('view', 'id'=>$i->id));?></td>
                                    <td><?php echo $i->visitas;?></td>
                                </tr>
                                <?php }?>
                            </thbody>
                      </table>
                    </div>
                </div>
