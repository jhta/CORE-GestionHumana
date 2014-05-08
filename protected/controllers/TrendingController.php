<?php

class TrendingController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Trending');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionCreate()
	{
	    $model=new Trending;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['Trending']))
	    {
	        $model->attributes=$_POST['Trending'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','PUBLICACION_id'=>$model->PUBLICACION_id, 'ETIQUETA_nombre'=>$model->ETIQUETA_nombre));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($PUBLICACION_id, $ETIQUETA_nombre)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($PUBLICACION_id, $ETIQUETA_nombre)->delete();
			}
			catch(Exception $e) 
			{
				$this->showError($e);
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionUpdate($PUBLICACION_id, $ETIQUETA_nombre)
	{
		$model=$this->loadModel($PUBLICACION_id, $ETIQUETA_nombre);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Trending']))
		{
			$model->attributes=$_POST['Trending'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'PUBLICACION_id'=>$model->PUBLICACION_id, 'ETIQUETA_nombre'=>$model->ETIQUETA_nombre));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new Trending('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Trending']))
			$model->attributes=$_GET['Trending'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($PUBLICACION_id, $ETIQUETA_nombre)
	{		
		$model=$this->loadModel($PUBLICACION_id, $ETIQUETA_nombre);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($PUBLICACION_id, $ETIQUETA_nombre)
	{
		$model=Trending::model()->findByPk(array('PUBLICACION_id'=>$PUBLICACION_id, 'ETIQUETA_nombre'=>$ETIQUETA_nombre));
		if($model==null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function saveModel($model)
	{
		try
		{
			$model->save();
		}
		catch(Exception $e)
		{
			$this->showError($e);
		}		
	}

	function showError(Exception $e)
	{
		if($e->getCode()==23000)
			$message = "This operation is not permitted due to an existing foreign key reference.";
		else
			$message = "Invalid operation.";
		throw new CHttpException($e->getCode(), $message);
	}		
}