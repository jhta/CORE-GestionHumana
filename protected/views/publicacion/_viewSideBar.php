<?php

/*
 *Esta vista se utiliza para renderpartial en los post
 * y mostrar el enlace de capa post
 */

//foreach ($publicacionesl as $i) {
//    

?>

<li><?php echo CHtml::link(CHtml::encode($data->titulo), array('view', 'id'=>$data->id)); ?>">
        <?php //echo CHtml::encode($data->titulo); ?>
    
    <span class="label label-default pull-right" style="
    background: #cccc99;
"><?php echo CHtml::encode($data->fecha); ?></span>
</li>
