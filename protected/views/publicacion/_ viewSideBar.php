<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<li><a href="<?php echo CHtml::link(CHtml::encode($data->titulo), array('view', 'id'=>$data->id)); ?>"><?php echo CHtml::encode($data->titulo); ?></a></li>
	