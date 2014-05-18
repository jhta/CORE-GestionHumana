<?php

/*
 *Esta vista se utiliza para renderpartial en los post
 * y mostrar el enlace de capa post
 */

foreach ($publicacionesl as $i) {
    

?>

<li><a href="<?php echo CHtml::link(CHtml::encode($i->titulo), array('view', 'id'=>$i->id)); ?>"><?php echo CHtml::encode($i->titulo); ?></a></li>
<?php }?>