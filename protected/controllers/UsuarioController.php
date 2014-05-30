<?php

class UsuarioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete','update2','admin','ChangePass'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Usuario;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		

	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel(Yii::app()->user->id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

                if(isset($_POST['Usuario'])){
                    if(isset($_POST['Usuario']['foto'])) $model->foto = CUploadedFile::getInstance($model,'foto');
                    $Nombre_foto= $model->nombre_foto;
                    $Extension_foto= $model->formato_foto;
                    if(isset($model->foto)){
                        $carpeta= DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'profilePictures';
                        $directorio= Yii::getPathOfAlias('webroot').$carpeta;
                        $Nombre_foto= $carpeta.DIRECTORY_SEPARATOR.Yii::app()->user->id;
                        $Extension_foto= '.'.$model->foto->extensionName;
                        if($model->nombre_foto != '')
                            unlink(Yii::getPathOfAlias('webroot') . DIRECTORY_SEPARATOR . $model->nombre_foto . $model->formato_foto);
                    }

                    $model->attributes=$_POST['Usuario'];
                    $model->contrasena2= $model->contrasena;
                    $model->nombre_foto= $Nombre_foto;
                    $model->formato_foto= $Extension_foto;  

                    if($model->save()){
                        if(isset($model->foto)) 
                            $model->foto->saveAs($directorio.DIRECTORY_SEPARATOR.Yii::app()->user->id.$Extension_foto);
                        $this->redirect(Yii::app()->createAbsoluteUrl('site/admin'));
                        //$this->redirect(array('view','id'=>$model->id));
                    }else { echo var_dump($model);}
                }
	}
        
       
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate2($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

                if(isset($_POST['Usuario'])){
                    echo "<script>alert('funciona'); </script>";
                }else{
                $this->renderPartial('_edit',array(
                    'modelU'=>$model,
                ));
                }

		
	}
        /*
         * Changes a User's password 
         * If the change is successful, the browser will be redirected to the 'admin' page
         * 
         */
        public function actionChangePass(){
            $model= $this->loadModel(Yii::app()->user->id);
            
            if(isset($_POST['Usuario'])){
                if($model->validatePassword($_POST['Usuario']['old_pass'])){
                    $session= $model->generateSalt();
                    $model->contrasena= $model->hashPassword($_POST['Usuario']['new_pass'],$session);
                    $model->repeat_pass= $model->hashPassword($_POST['Usuario']['repeat_pass'],$session);
                    $model->contrasena2= $model->repeat_pass;
                    $model->new_pass= $model->hashPassword($_POST['Usuario']['new_pass'],$session);
                    $model->sesion= $session;
                    if($model->save()){
                        Yii::app()->user->setFlas('passChange','La contraseña se ha cambiado correctamente');
                        $this->redirect(Yii::app()->createAbsoluteUrl ('site/admin'));
                    }
                
                }else{
                    //Yii::app()->user->setFlas('passChange','La contraseña se ha cambiado correctamente');
                    $this->redirect(Yii::app()->createAbsoluteUrl ('site/admin'));
                }
            }
           
        }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Usuario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Usuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Usuario']))
			$model->attributes=$_GET['Usuario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Usuario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Usuario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Usuario $model the model to be validated
	 */
	public function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
