<div class="post " >
    <small class="author text-muted ">
        publicado por <?php echo $this-> traerNombre($data->USUARIO_id); ?>
    </small><br>
    <small class="text-muted"><?php echo  date('F j, Y H:i:s ', strtotime($data->fecha))?></small>

    <div class="title">
        <legend><?php echo CHtml::encode($data->titulo); ?></legend>
    </div>
    <br/>
    
    <div class="content contenido-blog" onmousedown="return false;"
oncontextmenu="return false;"
onselectstart="return false;" >
        
            <?php
                    $this->beginWidget('CMarkdown', array('purifyOutput'=>true));
                    echo $data->contenido;
                    $this->endWidget();
            ?>
    
    </div>
    
</div>