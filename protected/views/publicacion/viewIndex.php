<div class="title-page">
                    <h2 class="title">Ultimos Post</h2>
               </div>
                <div class="span6">
                  
                    
                    <!-- Start Accordion -->
                    <div class="accordion" id="toogleArea">
                        <?php foreach ($Publicaciones as $i) {
    
                        ?>
                        <div class="accordion-group">
                            <div class="accordion-heading accordionize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea">
                                    <?php echo $i['titulo']?>
                                    <span class="font-icon-arrow-simple-down"></span>
                                </a>
                            </div>
                            <div id="oneArea" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <?php echo mb_substr($i['contenido'], 0,300); ?>
                                
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        
                    </div>
                    <!-- End Accordion -->
                </div>
                 
                <div class="span6">
                  
                    
                    <!-- Start Accordion -->
                    <div class="accordion" id="accordionArea">
                        <?php foreach ($Publicaciones2 as $i) {
    
                        ?>
                        <div class="accordion-group">
                            <div class="accordion-heading accordionize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea">
                                    <?php echo $i['titulo']?>
                                    <span class="font-icon-arrow-simple-down"></span>
                                </a>
                            </div>
                            <div id="oneArea" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    
                                    <?php echo mb_substr($i['contenido'], 0,300);?>
                                  
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        
                    </div>
                    <!-- End Accordion -->
                </div>
                    