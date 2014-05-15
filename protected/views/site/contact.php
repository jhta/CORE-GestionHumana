<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<script>

var validator = new FormValidator('contact-form', [{
    name: 'req',
    display: 'required',    
    rules: 'required'
}, {
    name: 'alphanumeric',
    rules: 'alpha_numeric'
}, {
    name: 'password',
    rules: 'required'
}, {
    name: 'password_confirm',
    display: 'password confirmation',
    rules: 'required|matches[password]'
}, {
    name: 'email',
    rules: 'valid_email',
    depends: function() {
        return Math.random() > .5;
    }
}, {
    name: 'minlength',
    display: 'min length',
    rules: 'min_length[8]'
}], function(errors, event) {
    if (errors.length > 0) {
         var errorString = '';
        
        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            errorString += errors[i].message + '<br />';
        }
        
        $("#errorReport").append(errorString);
    }
});
</script>


<div id="errorReport"></div>
<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>


<div class="contact-form" >

<!--        	<form id="contact-form" class="contact-form" action="#">
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                </p>
                <p class="contact-message">
                	<textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                </p>
                <p class="contact-submit">
                	<a id="contact-submit" class="submit" href="#">Send Your Email</a>
                </p>
                
                <div id="response">
                
                </div>
            </form>-->
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
        
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
            
	),
        'htmlOptions'=>array(
            'name'=>'contact-form'
        ),
)); ?>

	<p class="note">Campos con <span class="required">*</span>, son "Campo Requerido"</p>

	<?php echo $form->errorSummary($model); ?>
        <p class="contact-name">
            <div class="row">
                    <?php //echo $form->labelEx($model,'name'); ?>
                    <?php echo $form->textField($model,'name',
                            array('required'=>true,
                                'id'=>'contact_name',
                                'placeholder'=>'Nombre Completo',
                                'name'=>'name' )); ?>
                    <?php echo $form->error($model,'name'); ?>
            </div>
        </p>
	<div class="row">
		<?php echo $form->emailField($model,'email',
                        array('required'=>true,
                                'id'=>'contact_email',
                                'placeholder'=>'Correo',
                                'name'=>'email')); ?>
                        
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'subject',
                        array('size'=>60,
                            'maxlength'=>128,
                            'required'=>true,
                            'id'=>'contact_subject',
                            'placeholder'=>'Asunto',
                            'name'=>'message'
                            )
                            
                        ); ?>
		
                    <?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textArea($model,'body',array('rows'=>9,
                    'cols'=>40,
                    'required'=>true,
                    'id'=>'contact_message',
                    'placeholder'=>'Escribe aqui tu mensaje',
                    'name'=>'message'
                    )); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php //if(CCaptcha::checkRequirements()): ?>
	<!--<div class="row">-->
		<?php //echo $form->labelEx($model,'verifyCode'); ?>
		<!--<div>-->
		<?php //$this->widget('CCaptcha'); ?>
		<?php //echo $form->textField($model,'verifyCode',array('required'=>true)); ?>
		<!--</div>-->
		<?php //echo $form->error($model,'verifyCode'); ?>
	<!--</div>-->
	<?php //endif; ?>

	<div class="row buttons">
          
		<?php echo CHtml::submitButton('Submit',array(
                    'id'=>'contact_submit',
                    'class'=>'submit'
                            )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>