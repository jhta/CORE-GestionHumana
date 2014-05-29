
<div class="row" id="tabla">
                    <div class="col-xs-8">
                        <table class="table table-striped">
                            <trhead>
                                <th>Nombre</th>
                                <th>Visitas</th>
                                
                            </trhead>
                            <thbody>
                                <?php foreach ($modelP as $i) {?> 
                                <tr>
                                   
                                    <td><?php echo $i->titulo;?></td>
                                    <td><?php echo $i->visitas;?></td>
                                </tr>
                                <?php }?>
                            </thbody>
                      </table>
                    </div>
                </div>
