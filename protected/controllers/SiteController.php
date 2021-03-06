<?php
date_default_timezone_set('America/Bogota');
class SiteController extends Controller
{
    

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xF2E3D4,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
        
                
        public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','error','login','logout'),
				'users'=>array('*'),
			),
			array('allow', 
				'actions'=>array('Admin','CambiarGeneral','CambiarMision','CambiarVision'),
				'users'=>array('@'),
                                
			),
			array('deny',  // deny all users
				'users'=>array('*'),
                                'deniedCallback' => $this->redirect(Yii::app()->createAbsoluteUrl('site/index')),
			),
		);
	}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex(){
            // The next lines calculates the visits to the website 
            $modelI= Informacion::model()->findByPk(1);
            $modelI->total_clicks = $modelI->total_clicks + 1;
            $modelI->save();
            
            //Visits per month
            $estadistica= new Estadistica;
            
            $mensual= new CDbCriteria();
            $mensual->condition= 'year= :year AND month = :month';
            $mensual->params= array(':year'=>date("Y"),':month'=>date("F"));
            if(Estadistica::model()->exists($mensual)){
                $estadistica= Estadistica::model()->find($mensual);
                $estadistica->visitas= $estadistica->visitas + 1;
                $estadistica->save();
            }else{
                $estadistica->year= date("Y");
                $estadistica->month= date("F");
                $estadistica->numMonth= date("n");
                $estadistica->visitas= 1;
                $estadistica->save();
            }
            //Criteria for publication's 
                $Criteria = new CDbCriteria();
                $Criteria->limit = 2;
                $Criteria->order = "fecha DESC";
                //get 4 Publicaciones
                $Publicaciones = Publicacion::model()->findAll($Criteria);
                $Criteria2 = new CDbCriteria();
                $Criteria2->limit = 2;
                $Criteria2->offset=2;
                $Criteria2->order = "fecha DESC";
                //get 4 Publicaciones
                $Publicaciones2 = Publicacion::model()->findAll($Criteria2);
                
                //get all Usuarios
                $Usuarios = Usuario::model()->findAll();
		
                $modelL=new LoginForm;
                
                $modelIn= Informacion::model()->findByPk(1);
                

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($modelL);
			Yii::app()->end();
		}

		// collect user input data
                // Always remeber yo cant ECHO befor LogIn Finishes it issue
                // If you echo befor the redirect, then the LogIn fails
		if(isset($_POST['LoginForm'])){        
			$modelL->attributes= $_POST['LoginForm'];
                        
			// validate user input and redirect to the previous page if valid
                        
			if($modelL->validate() && $modelL->login()){
                            $this->redirect(Yii::app()->createAbsoluteUrl('site/admin'));
                            
                            
                        }else{
                            echo "<script type='text/javascript'>alert('no valida');</script>";
                        }
				
		}
		// display the login form
		//$this->render('login',array('model'=>$model));
                
                
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
                $model=new ContactForm;
                if(isset($_POST['ContactForm']))
		{
                    //echo "<script type='text/javascript'>alert('Gonorreas3');</script>";    
                                
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
                                echo "<script type='text/javascript'>alert('Tu mensaje a sido enviado :D');</script>";    
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				
                                //Yii::app()->user->setFlash('contact','Todo bien, todo bonito, solo nacional a morir, solo verdolaga, un 3-0 si dios quiere');
//                                $this->refresh();
			}else{
                            //echo "<script type='text/javascript'>alert('Gonorreas2');</script>";    
                        }
                        
                        
                    }else
                        {
                        
                    }
                
                
		$this->render('index',array(
                    'model'=>$model,
                    'modelL'=>$modelL,
                    'modelIn'=>$modelIn,
                    'Publicaciones'=>$Publicaciones,
                    'Publicaciones2'=>$Publicaciones2,
                    'Usuarios'=>$Usuarios,
                        ));
                    
	}

	/**
	 * This is the action to handle external exceptions.
	 */
        
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
//		$model=new ContactForm;
//                print_r("hola socio 2");
//		if(isset($_POST['ContactForm']))
//		{
//                    print_r("hola socio");
//                                
//			$model->attributes=$_POST['ContactForm'];
//			if($model->validate())
//			{
//				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
//				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
//				$headers="From: $name <{$model->email}>\r\n".
//					"Reply-To: {$model->email}\r\n".
//					"MIME-Version: 1.0\r\n".
//					"Content-Type: text/plain; charset=UTF-8";
//
//				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
//				$this->redirect("google.com");
//                                //Yii::app()->user->setFlash('index','Todo bien, todo bonito, solo nacional a morir, solo verdolaga, un 3-0 si dios quiere');
//                                //$this->refresh();
//			}
//                        
//                        
//                    }else{
//                        print_r("nada");
//                    }
		//$this->renderPartial('contact',array('model'=>$model));
	}

        public function actionAdmin()
	{   $Criteria = new CDbCriteria();
            $Criteria->order="fecha DESC";
            $Criteria->limit=15;
            $UComentarios= Comentario::model()->findAll($Criteria);
            
            $modelU= Usuario::model()->findByPk(Yii::app()->user->id);
            $this->layout='//layouts/column3';
            $modelI= Informacion::model()->findByPk(1);
            
            $model= new Usuario;
            // Meter aquí los isset de cada post que sea necesario
            //Crieria for PUblication in Admin
            $CriteriaP= new CDbCriteria();
            $CriteriaP->order="visitas DESC";
            $Publicaciones= Publicacion::model()->findAll($CriteriaP);
            
            $criteria2= new CDbCriteria();
            $criteria2->select= 'month, visitas';
            $criteria2->condition='year = :year';
            $criteria2->params= array(':year'=> date("Y"));
            $criteria2->order= 'numMonth ASC';
            $analytic= Estadistica::model()->findAll($criteria2);
            
            foreach($analytic as $dato){
                $mes[]= $dato->month;
                $visita[]= ((int) $dato->visitas )/ 2;
            }
            $jsonMes= json_encode($mes);
            $jsonVis= json_encode($visita);
            
            
            $s = Yii::app()->createController('Usuario'); //returns array containing controller instance and action index.
            $s = $s[0];
            $s->performAjaxValidation($model);
            if(isset($_POST['Usuario'])){
                if(isset($_POST['Usuario']['foto'])) $model->foto = CUploadedFile::getInstance($model,'foto');
                $Nombre_foto='';
                $Extension_foto='';
                if(isset($model->foto)){
                    $carpeta= DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'profilePictures';
                    $directorio= Yii::getPathOfAlias('webroot').$carpeta;
                    $Nombre_foto= $carpeta.DIRECTORY_SEPARATOR.Yii::app()->user->id;
                    $Extension_foto= '.'.$model->foto->extensionName;
                }

                $model->attributes= $_POST['Usuario'];
                $model->contrasena= $model->hashPassword($_POST['Usuario']['contrasena'],$session= $model->generateSalt());
                $model->contrasena2= $model->hashPassword($_POST['Usuario']['contrasena2'],$session);
                $model->sesion= $session;
                $model->nombre_foto= $Nombre_foto;
                $model->formato_foto= $Extension_foto;

                if($model->save()){
                    if(isset($model->foto)) 
                        $model->foto->saveAs($directorio.DIRECTORY_SEPARATOR.Yii::app()->user->id.$Extension_foto);
                    Yii::app()->user->setFlash('usercreate','El usuario se ha creado de manera correcta!');
                    $this->refresh();
                }	
            }
            
            $this->render('admin',
                    array(
                        'modelU'=>$modelU,
                        'UComentarios'=>$UComentarios,
                        'modelI'=>$modelI,
                        'model'=>$model,
                        'jsonMes'=>$jsonMes,
                        'jsonVis'=>$jsonVis,
                        'Publicaciones'=>$Publicaciones,
                        
                ));
	}

        /*
         * Changes the general information of the index
         * 
         */
        public function actionCambiarGeneral(){
            if(isset($_POST['titulo']) || isset($_POST['descripcion']) || isset($_POST['mision']) || isset($_POST['vision'])){
                $modelI= Informacion::model()->findByPk(1);
                
                if(isset($_POST['descripcion']))
                    $modelI->descripcion= $_POST['descripcion'];

                if(isset($_POST['titulo']))
                    $modelI->titulo= $_POST['titulo'];
                
                if(isset($_POST['mision']))
                    $modelI->mision= $_POST['mision'];
                
                if(isset($_POST['vision']))
                    $modelI->vision= $_POST['vision'];
                
                if($modelI->save()){
                    Yii::app()->user->setFlash('informationchange','La información ha sido actualizada correctamente');
                       
                }
            }
        }
        
        /*
         * Changes the mision of the company in the index page
         * 
         */
        public function actionCambiarMision(){
            if(isset($_POST['mision'])){
                $model= Informacion::model()->findByPk(1);
                
                
            }
        }
        /*
         * Changes the mision of the company in the index page
         * 
         */
        public function actionCambiarVision(){
            if(isset($_POST['vision'])){
                $model= Informacion::model()->findByPk(1);
                
                
            }
        }
        
	/**
	 * Displays the login page
	 */
	
        public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
                            {
                                $this->redirect(array('admin'));
                                
                            }
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
