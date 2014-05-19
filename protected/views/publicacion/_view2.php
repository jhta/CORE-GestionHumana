<div class="post " >
    <small class="author text-muted text-left">
        publicado por <?php echo $data->USUARIO_id->nombre . ' en ' . date('F j, Y H:i:s ', strtotime($data->fecha)); ?>
    </small>

    <div class="title">
        <legend><?php echo CHtml::encode($data->titulo); ?></legend>
    </div>
    <br/>
    <div class="content " >
            <?php
                    $this->beginWidget('CMarkdown', array('purifyOutput'=>true));
                    echo $data->contenido;
                    $this->endWidget();
            ?>
    </div>
    <div class="nav">
            <!--<b>Etiquetas:</b>-->
            <?php //echo implode(', ', $data->tagLinks); ?>
            <br/>
            <?php //echo CHtml::link("Comentarios ({$data->cuentaComentarios})",$data->url.'#comentarios'); ?>
    </div>
</div>