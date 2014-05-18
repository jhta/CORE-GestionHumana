<?php

/*
 *Esta vista se utiliza para renderpartial en los post
 * y mostrar el enlace de capa post
 */

//foreach ($publicacionesl as $i) {
//    

?>

<li class="sideBar-link"><?php echo substr(CHtml::link(CHtml::encode($data->titulo), array('view', 'id'=>$data->id)),0,40); ?>
        <?php //echo CHtml::encode($data->titulo); ?>
    
    <span class="label label-default pull-right" style="
    background: #cccc99;
"><?php echo substr(CHtml::encode($data->fecha),0,10) ; ?></span>
</li>
