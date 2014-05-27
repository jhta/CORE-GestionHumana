<script>
$(document).ready(function() {
    $('#Blog').click(function(){
        window.open("<?php echo Yii::app()->createAbsoluteUrl("publicacion/index")?>","_blank");
        
    });
    $('#logout').click(function(){
        window.location.href= "<?php echo Yii::app()->createAbsoluteUrl("site/logout");?>";
    });
});
</script>



<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="#home-slider">Home</a></li>
                <li><a href="#work">Nuestro Trabajo</a></li>
                <li><a href="#about">Acerca de Nosotros</a></li>
                <li><a href="#contact">Contactanos</a></li>
                <li><?php echo CHtml::link('Blog', array('publicacion/index'),array('class'=>'External','id'=>'Blog','target'=>'_blank')); ?></li>
                <li><?php 
                    //if(!Yii::app()->user->isGuest) {
                    //    echo CHtml::link('logout', array('site/logout'),array('class'=>'External','id'=>'logout'));
                    //}else{
                    //    echo CHtml::link('login', "#content-login",array('class'=>'External','id'=>'login'));
                    //}   
                    
                
                ?>
                <div class="dropdown">
  <button class="btn dropdown-toggle sr-only" type="button"
          id="dropdownMenu1" data-toggle="dropdown">
    Menú desplegable
    <span class="caret"></span>
  </button>
 
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation">
      <a role="menuitem" tabindex="-1" href="#">Acción</a>
    </li>
    <li role="presentation">
      <a role="menuitem" tabindex="-1" href="#">Otra acción</a>
    </li>
    <li role="presentation">
      <a role="menuitem" tabindex="-1" href="#">Otra acción más</a>
    </li>
    <li role="presentation" class="divider"></li>
    <li role="presentation">
      <a role="menuitem" tabindex="-1" href="#">Acción separada</a>
    </li>
  </ul>
</div></li>
                <!--<li><a id="login" href="#content-loginclass="external">login</a></li>-->
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->
    <!-- Title Page -->
<div id="work">
    <div class="page-alternate">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="title-page">
                        <h2 class="title">GESTIÓN HUMANA</h2>
                        <h3 class="title-description">Consultoría Organizacional Especializada.</h3>
                        <p style="font-size:20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <!--<img class="img-rounded" src="http://blog.codeconutrilife.com/wp-content/uploads/2011/01/dolor-de-cabeza.jpg">-->
                    </div>
                </div>
            </div>

        </div>
    </div>        
    <!-- End Title Page -->

    <!-- Publicaciones -->
    <!- - Start Accordion/Toggle Section -->
    <div  class="page" >
        <div class="container">
            <div class="row">
                <!-- renderizo vista de las ultimas 4 publicaciones-->
                <?php $this->renderPartial('//publicacion/viewIndex',array(
                    'Publicaciones'=>$Publicaciones,
                    'Publicaciones2'=>$Publicaciones2,
                        )); ?>
                
            </div>  
        </div>  

    </div>
<!-- End Publicaciones -->
</div>
<!-- End Our Work Section -->

<!-- About Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Acerca de Nosotros</h2>
                <h3 class="title-description">Aprende Acerca de Nuestro Equipo &amp; Cultura.</h3>
            </div>
        </div>
    </div>  
    <!-- End Title Page -->
    
    <!-- Usuarios -->
    <div class="row">
    	<?php $this->renderPartial('//usuario/viewIndex',array(
                    'Usuarios'=>$Usuarios,
                        )); ?>
            
    </div>
    <!-- End Usiarios -->
</div>
</div>
<!-- End About Section -->


<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Ponte en Contacto</h2>
                <h3 class="title-description">
                    ¿Tienes alguna pregunta?, ¿Necesitas alguna información adicional? Envíanos un correo y lo responderemos lo antes posible
                </h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row" id="contacta">
        
        
        
    	<div class="span9">
            
      
<div id="errorReport"></div>
<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>


<div class="contact-form" >

    
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

	<?php echo $form->errorSummary($model); ?>
        <p class="contact-name">
            <div class="row">
                    <?php //echo $form->labelEx($model,'name'); ?>
                    <?php echo $form->textField($model,'name',
                            array('required'=>true,
                                'id'=>'contact_name',
                                'placeholder'=>'Nombre Completo',
                                )); ?>
                    <?php echo $form->error($model,'name'); ?>
            </div>
        </p>
	<div class="row">
		<?php echo $form->emailField($model,'email',
                        array('required'=>true,
                                'id'=>'contact_email',
                                'placeholder'=>'Correo',
                                )); ?>
                        
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'subject',
                        array('size'=>60,
                            'maxlength'=>128,
                            'required'=>true,
                            'id'=>'contact_subject',
                            'placeholder'=>'Asunto',
                            
                            )
                            
                        ); ?>
		
                    <?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textArea($model,'body',array('rows'=>9,
                    'cols'=>40,
                    'required'=>true,
                    'id'=>'contact_message',
                    'placeholder'=>'Escribe aquí tu mensaje',
                    
                    )); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php  if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode',array('required'=>true)); ?>
		</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
          
		<?php echo CHtml::submitButton('Enviar',array(
                    'id'=>'contact_submit',
                    'class'=>'submit'
                            )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
                </div>
        
        <div class="span3">
        	<div class="contact-details">
        		<h3>Detalles de contacto</h3>
                <ul>
                    <li><a href="#">info@coregestionhumana.com</a></li>
                    <li>(+57)314-615-2596</li>
                    <li>
                        Diego Flórez
                        <br>
                        5240 Medellín, Colombia.
                        <br>
                        Psicologo
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>      
<!-- End Contact Section -->

<!-- Twitter Feed -->
<!-- Socialize -->
<div id="social-area" class="page">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>
                        <li><a href="https://twitter.com/jh7a" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/ccmoralesj" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                        <li><a href="https://plus.google.com/+CristianCamiloMoralesJiménez" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                        <li><a href="http://www.linkedin.com/in/ccmoralesj" title="Follow Me on LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Socialize -->

<!-- Footer -->
<footer>
	<p class="credits">&copy;2014  <a href="http://twitter.com/jh7a" title="">sinSO</a>. Todos los derechos reservados </p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" style="display: block;" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->

<!--Back lightbox login-->

<div id="content-login" class="row">
   
<div class="container">

<!--Login-->    
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        'htmlOptions'=>array(
            'class'=>'form-signin',
        ),
)); ?>
    <h1 class="form-signin-heading text-muted">Login</h1>
		<?php echo $form->textField($modelL,'username',array(
                    'class'=>'form-control input-login',
                    'placeholder'=>'Nombre de usuario',
                    'required'=>true,
                )); ?>
		<?php echo $form->error($modelL,'username'); ?>
                
		<?php echo $form->passwordField($modelL,'password',array(
                    'class'=>'form-control input-login',
                    'placeholder'=>'Contraseña',
                    'required'=>true,
                )); ?>
		<?php echo $form->error($modelL,'password'); ?>
	

	
		<?php echo $form->checkBox($modelL,'rememberMe'); ?>
                <?php echo $form->label($modelL,'rememberMe'); ?>
		<?php echo $form->error($modelL,'rememberMe'); ?>
    </br>

		<?php echo CHtml::submitButton('Login',array(
                    'class'=>'btn btn-lg btn-primary btn-block btn-login',
                )); ?>
	
<?php $this->endWidget(); ?>
</div><!-- form -->
    
<!--    
    <form class="form-signin ">
        <h1 class="form-signin-heading text-muted">Login</h1>
        <input type="text" class="form-control input-login" placeholder="Email address" required="" autofocus="">
        </br><input type="password" class="form-control input-login" placeholder="Password" required="">
        </br><button class="btn btn-lg btn-primary btn-block btn-login" type="submit">
            Login
        </button>
    </form>-->

</div>
</div>
<!--End lightbox login-->
