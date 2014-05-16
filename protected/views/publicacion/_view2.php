<div class="post">
	<div class="title">
            <b><?php echo CHtml::encode($data->title); ?></b>
	</div>
        <br/>
	<div class="author">
            publicado por <?php echo $data->USUARIO_id->nombre . ' en ' . date('F j, Y H:i:s ', strtotime($data->fecha)); ?>
	</div>
	<div class="content">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->contenido;
			$this->endWidget();
		?>
	</div>
	<div class="nav">
		<b>Etiquetas:</b>
		<?php //echo implode(', ', $data->tagLinks); ?>
		<br/>
		<?php echo CHtml::link("Comentarios ({$data->cuentaComentarios})",$data->url.'#comentarios'); ?>
	</div>
</div>