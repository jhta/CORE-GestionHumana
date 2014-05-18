<?php
/* @var $this PublicacionController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Publicacions',
//);
//
//$this->menu=array(
//	array('label'=>'Create Publicacion', 'url'=>array('create')),
//	array('label'=>'Manage Publicacion', 'url'=>array('admin')),
//);
//?>

<!--<h1>Publicaciones</h1>-->

<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <title>Hola</title>
<style type="text/css">
        /* move special fonts to HTML head for better performance */
        @import url('http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700');


        /* custom template */
        html, body {
         height: 100%;
         font-family:'Open Sans',arial,sans-serif;
       }

        a {
          color:#222222;
        }

        .wrapper, .row {
         margin-left:0;
         margin-right:0;
        }

        .wrapper:before, .wrapper:after,
        .column:before, .column:after {
          content: "";
          display: table;
        }

        .wrapper:after,
        .column:after {
          clear: both;
        }

        .column {
          height: 100%;
          overflow: auto;
          *zoom:1;
        }

        .column .padding {
          padding: 20px;
        }

        .box {
          bottom: 0; /* increase for footer use */
          left: 0;
          position: absolute;
          right: 0;
          top: 0;
          background-image:url('http://www.bootply.com/assets/example/bg_suburb.jpg');
          background-size:cover;
          background-attachment:fixed;
        }

        .divider {
          margin-top:32px;
        }

        #main {
          background-color:#fefefe;
        }
        #main .img-circle {
          margin-top:18px;
          height:70px;
          width:70px;
        }

        #sidebar, #sidebar a {
          color:#ffffff;
          background-color:transparent;
          text-shadow:1px 0 1px #888888;
        }
        #sidebar a.logo {
          display:block;
          padding:3px;
          background-color:#fff;
          color:#777777;
          height:40px;
          width:40px;
          margin:15px;
          font-size:26px;
          font-weight:700;
          text-align:center;
          text-decoration:none;
          text-shadow:0 0 0;
        }
        #sidebar-footer {
          position:absolute;bottom:5px;
        }
        #footer {
          margin-bottom:20px;
        }

        /* center and adjust the sidebar contents on smaller devices */
        @media (max-width: 768px) {
          #sidebar,#sidebar a.logo {
            text-align:center;
            margin:0 auto;
            margin-top:30px;
            font-size:26px;
          }
          #sidebar a.logo {
            font-size:50px;
            height:75px;
            width:75px;
            margin-bottom:30px;
          }
        }




        /* bootstrap overrides */

        h1,h2,h3 {
         font-weight:800;
         font-family:'Open Sans',arial,sans-serif;
        }

        .jumbotron {
          background-color:transparent;
        }
        .label-default {
          background-color:#dddddd;
        }
        .page-header {
          margin-top: 55px;
          padding-top: 9px;
          border-top:1px solid #eeeeee;
          font-weight:700;
          text-transform:uppercase;
          letter-spacing:2px;
        }

        .col-sm-9.full {
          width: 100%;
        }

        small.text-muted {
          font-family:courier,courier-new,monospace;
        }

</style>
</head>
<body>
  <div class="wrapper">
    <div class="box">
      <div class="row">

        <!-- sidebar -->
        <div class="column col-xs-3" id="sidebar">
          <a class="logo" href="#">B</a>
          <ul class="nav">
            <li class="active"><a href="#featured">Featured</a>
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

              <div class="col-sm-12" id="featured">   
                <div class="page-header text-muted">
                  Featured
                </div> 
              </div>

              <!--/top story-->
              <div class="row">    
                <div class="col-sm-10">
                  <h3>This is Some Awesome Featured Content</h3>
                  <h4><span class="label label-default">techvisually.com</span></h4><h4>
                  <small class="text-muted">1 hour ago • <a href="#" class="text-muted">Read More</a></small>
                </h4>
              </div>
              <div class="col-sm-2">
                <a href="#" class="pull-right"><img src="http://www.bootply.com/assets/example/bg_sailboat.jpg" class="img-circle"></a>
              </div> 
            </div>
             <div class="row divider">    
           <div class="col-sm-12"><hr></div>
         </div>
           

            <!--/stories-->
            <div class="row">    
              <div class="col-sm-10">
                <h3>Dramatically Raise the Value of Any Piece of Content</h3>
                <h4><span class="label label-default">searchenginewatch.com</span></h4><h4>
                <small class="text-muted">1 hour ago • <a href="#" class="text-muted">Read More</a></small>
              </h4>
            </div>
            <div class="col-sm-2">
              <a href="#" class="pull-right"><img src="http://www.bootply.com/assets/example/bg_sailboat.jpg" class="img-circle"></a>
            </div> 
          </div>

          <div class="row divider">    
           <div class="col-sm-12"><hr></div>
         </div>

         <div class="row">    
          <div class="col-sm-10">
            <h3>14 Useful Sites for Designers</h3>
            <h4><span class="label label-default">devgarage.com</span></h4><h4>
            <small class="text-muted">2 days ago • <a href="#" class="text-muted">Read More</a></small>
          </h4>
        </div>
        <div class="col-sm-2">
          <a href="#" class="pull-right"><img src="http://www.bootply.com/assets/example/bg_sailboat.jpg" class="img-circle"></a>
        </div>
      </div>

      <div class="row divider">    
       <div class="col-sm-12"><hr></div>
     </div>

     <div class="row">    
      <div class="col-sm-10">
        <h3>Bootstrap Builders Get Their Own Playground</h3>
        <h4><span class="label label-default">bootply.com</span></h4><h4>
        <small class="text-muted">3 days ago • <a href="#" class="text-muted">Read More</a></small>
      </h4>
    </div>
    <div class="col-sm-2">
      <a href="#" class="pull-right"><img src="http://www.bootply.com/assets/example/bg_sailboat.jpg" class="img-circle"></a>
    </div>
  </div>

  <div class="row divider">    
   <div class="col-sm-12"><hr></div>
 </div>

 <div class="row">    
  <div class="col-sm-10">
    <h3>How to: Another Fantastical Article</h3>
    <h4><span class="label label-default">bootply.com</span></h4><h4>
    <small class="text-muted">4 days ago • <a href="#" class="text-muted">Read More</a></small>
  </h4>
</div>
<div class="col-sm-2">
  <a href="#" class="pull-right"><img src="http://www.bootply.com/assets/example/bg_sailboat.jpg" class="img-circle"></a>
</div>
</div>

<div class="row divider">    
 <div class="col-sm-12"><hr></div>
</div>

<div class="row">    
  <div class="col-sm-9">
    <h3>Another Fantastical Article of Interest</h3>
    <h4><span class="label label-default">bootply.com</span></h4><h4>
    <small class="text-muted">4 days ago • <a href="#" class="text-muted">Read More</a></small>
  </h4>
</div>
<div class="col-sm-3">
  <a href="#" class="pull-right"><img src="http://www.bootply.com/assets/example/bg_sailboat.jpg" class="img-circle"></a>
</div>
</div>


<div class="col-sm-12">
  <div class="page-header text-muted divider">
    Connect with Us
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
  </div>
</div>

<hr>

<div class="row" id="footer">    
  <div class="col-sm-6">

  </div>
  <div class="col-sm-6">
    <p>
      <a href="#" class="pull-right">©Copyright Inc.</a>
    </p>
  </div>
</div>



</div><!-- /col-9 -->
</div><!-- /padding -->
</div>
<!-- /main -->

</div>
</div>
</div>
</body>
</html>