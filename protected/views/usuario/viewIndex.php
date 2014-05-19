<!-- Start Profile -->
    <?php foreach ($Usuarios as $i ) {?>



    	<div class="span4 profile">
        	<div class="image-wrap img-rounded">
                <div class="img-rounded hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb"><?php echo $i['titulo'];?></span>
                </div>
                    <img src= "<?php echo Yii::app()->request->baseUrl.$i['nombre_foto'].$i['formato_foto'];?>" alt="<?php echo $i['nombre'] ?>">
            </div>
            <h3 class="profile-name"><?php echo $i['nombre'];?></h3>
            <p class="profile-description">
                
                <?php echo substr($i['descripcion'],0,305)."...";?>
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Profile -->
        
    <?php }?>
        