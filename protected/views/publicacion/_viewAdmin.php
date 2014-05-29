

                        <table class="table table-striped table-hover">
                            <trhead>
                                <th><span class="glyphicon glyphicon-th-list"></span> Publicacion</th>
                                <th><span class="glyphicon glyphicon-ok"></span> Visitas</th>
                                
                            </trhead>
                            <thbody>
                                <tr>
                                    <td>PÁGINA PRINCIPAL (Inicio)</td>
                                    <td><?php echo  $cantidad;?></td>
                                </tr>
                                <?php foreach ($Publicaciones as $i) {?> 
                                <tr>
                                   
                                    <td><?php echo CHtml::link($i->titulo, array('/publicacion/view', 'id'=>$i->id));?></td>
                                    <td><?php echo $i->visitas;?></td>
                                </tr>
                                <?php }?>
                                
                            </thbody>
                      </table>
                   
