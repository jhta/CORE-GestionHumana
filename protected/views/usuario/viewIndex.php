<!-- Start Profile -->
    <?php foreach ($Usuarios as $i ) {?>



    	<div class="span4 profile">
        	<div class="image-wrap img-rounded">
                <div class="img-rounded hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb"><?php echo $i['titulo'];?></span>
                </div>
                <img src="http://media.comicbookmovie.com/images/users/uploads/8073/Game_of_Thrones_Ygritte.jpg" alt="John Doe">
            </div>
            <h3 class="profile-name"><?php $i['titulo'];?></h3>
            <p class="profile-description">
                <?php substr($i['descripcion'],0,305)."...";?>
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-dribbble"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Profile -->
        
    <?php }?>
        