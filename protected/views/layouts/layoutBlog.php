<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta name="description" content="Insert Your Site Description" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<!-- Main Blog Style -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog.css" rel="stylesheet">

<!-- Optional theme -->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<title>CORE | Gestión Humana</title>

</head>
<body>
<div class="wrapper">
<div class="box">
<div class="row">

<!-- sidebar -->
<div class="column col-xs-3" id="sidebar">
    <a class="logo" href="#">B</a>
    <ul class="nav">
        <li class="active"><a href="#featured">Publicaciones</a>
        </li>
        <li><a href="#stories">Stories</a>
        </li>
    </ul>
    <ul class="nav hidden-xs" id="sidebar-footer">
        <li>
            <a href="http://www.bootply.com"><h3>Basis</h3>Made with <i class="glyphicon glyphicon-heart-empty"></i> by Bootply</a>
        </li>
    </ul>
</div>
<!-- /sidebar -->

<!-- main -->
<div class="column col-xs-9" id="main">
    <div class="padding">
        <div class="full col-sm-9">

            <!-- content -->
            <!--Titulo para post-->
            <div class="col-sm-12" id="featured">   
                <div class="page-header text-muted">
                    Featured
                </div> 
            </div>
            <!--Fin Titulo para post-->
            ____________________________________________________________________________________
<!--            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                    CONTENIDO GENERAL
            ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
            <?php echo $content; ?>



            <!--Element-->
            <!--Contacto-->
            <div class="col-sm-12">
                <div class="page-header text-muted divider">
                    Conectate con nosotros
                </div>
            </div>
            <!--Social-->
            <div class="row">
                <div class="col-sm-6">
                    <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                </div>
            </div>
            <!--End Social-->
            <hr>
            <!--FOoter-->
            <div class="row" id="footer">    
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <p>
                        <a href="#" class="pull-right">©Copyright Inc.</a>
                    </p>
                </div>
            </div>
             <!--end Footer-->


        </div><!-- /col-9 -->
    </div><!-- /padding -->
</div>
<!-- /main -->

</div>
</div>
</div>
</body>
</html>