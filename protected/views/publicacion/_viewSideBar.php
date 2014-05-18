<?php

/*
 *Esta vista se utiliza para renderpartial en los post
 * y mostrar el enlace de capa post
 */

//foreach ($publicacionesl as $i) {
//    

?>

<li><a href="#<?php //echo CHtml::link(CHtml::encode($data->titulo), array('view', 'id'=>$data->id)); ?>">
        <?php echo CHtml::encode($data->titulo); ?>
    </a>
</li>
