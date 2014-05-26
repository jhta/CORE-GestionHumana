<?php
date_default_timezone_set('America/Bogota');
class PublicacionController extends Controller
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
				'actions'=>array('index','view','AllTagPost'),
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id){
            
            $model=$this->loadModel($id);
            $comment= $this->newComment($model);
            $this->render('view',array(
                    'model'=>$model,
                    'comment'=>$comment,
            ));
	}
        /**
	 * Creates a new comment.
	 * This method attempts to create a new comment based on the user input.
	 * If the comment is successfully created, the browser will be redirected
	 * to show the created comment.
	 * @param Post the post that the new comment belongs to
	 * @return Comment the comment instance
	 */
        protected function newComment($post){
		$comment= new Comentario;
		if(isset($_POST['ajax']) && $_POST['ajax']==='comment-form')
		{
			echo CActiveForm::validate($comment);
			Yii::app()->end();
		}
		if(isset($_POST['Comentario'])){
			$comment->attributes= $_POST['Comentario'];
                        $comment->fecha= date("Y-m-d H:i:s");
			if($post->addComment($comment)){
                            Yii::app()->user->setFlash('commentSubmitted','Gracias por tu comentario. Para nosotros es muy importante tu opinión');
                            $this->refresh();
			}
		}
		return $comment;
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate(){
		$model=new Publicacion;
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$this->render('create',array(
			'model'=>$model,
		));
	}
        
        public function actionCrear(){
            if(isset($_POST['titulo'],$_POST['contenido'],$_POST['USUARIO_id']))
		{
			//$model->attributes=$_POST['Publicacion'];
                        
                        $model->titulo= $_POST['titulo'];
                        $model->contenido= $_POST['contenido'];
                        $model->USUARIO_id=$_POST['USUARIO_id'];
                        $model->fecha= date("Y-m-d H:i:s");
                        
                        $images= CUploadedFile::getInstancesByName('files');
                        
                        if(isset($images) && count($images) > 0){
                            $i= 1;
                            foreach ($images as $image => $pic){
                                
                                $carpeta= DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'PostsImages';
                                $directorio= Yii::getPathOfAlias('webroot').$carpeta;
                                $Nombre_foto= $carpeta.DIRECTORY_SEPARATOR.$model->id.'('.($i++).')';
                                $Extension_foto= '.'.$pic->extensionName;
                                
                                if ($pic->saveAs($directorio.DIRECTORY_SEPARATOR.$model->titulo.'('.($i++).')')) {
                                    
                                    $img_add = new Archivo;
                                    
                                    $img_add->nombre = $Nombre_foto; 
                                    $img_add->formato= $Extension_foto;
                                    $img_add->tipo= $pic->type;
                                    $img_add->peso= $pic->size;
                                    $img_add->PUBLICACION_id = $model->id; 
                                    
                                    if(!$img_add->save())echo "<script type='text/javascript'>alert('no está guardando!');</script>";
                                }
                                else{
                                    echo 'Cannot upload!';
                                }
                            }
                    
                        }
                        
			if($model->save()){
                            $arrTags= split('[;]',$_POST['Publicacion']['tags']);
                            foreach($arrTags as $tag){
                                $newTag= new Etiqueta;
                                $newTag->nombre= $tag;
                                if($newTag->save()){
                                    $trend= new Trending;
                                    $trend->ETIQUETA_nombre= $newTag->nombre;
                                    $trend->PUBLICACION_id= $model->id;
                                    $trend->save();
                                }
                            }
                            $this->redirect(array('view','id'=>$model->id));
                        }else{echo'holi2';}
                }else{echo 'holi';}
        }
        public function actionPublicacionIndex(){
            $Criteria = new CDbCriteria();
            $Criteria->limit = 4;
            $Criteria->order = "fecha DESC";
            
            
            $Publicaciones = Publicacion::model()->findAll($Criteria);
            return $Publicaciones;
        }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Publicacion']))
		{
			$model->attributes=$_POST['Publicacion'];
                        if($model->save()){
                            $arrTags= split('[;]',$_POST['Publicacion']['tags']);
                            foreach($arrTags as $tag){
                                $newTag= new Etiqueta;
                                $newTag->nombre= $tag;
                                if($newTag->save()){
                                    $trend= new Trending;
                                    $trend->ETIQUETA_nombre= $newTag->nombre;
                                    $trend->PUBLICACION_id= $model->id;
                                    $trend->save();
                                }
                            }
                            $this->redirect(array('view','id'=>$model->id));
                        }
		}
                
		$this->render('update',array(
			'model'=>$model,
		));
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
            
            //$Criteria2 = new CDbCriteria();
            //$Criteria2->order="fecha DESC";
            
            $count = Publicacion::model()->count();
            $pages = new CPagination($count);
            $pages->setPageSize(10);
            //$result=  Publicacion::model()->findAll($Criteria2);
            $dataProvider=new CActiveDataProvider('Publicacion');
            
            $this->render('index',array(
                    'dataProvider'=>$dataProvider,
                    'pages'=>$pages,

            ));
	}
        
      public function traerLInk($id)
      {
          $usuario= Usuario::model()->findByPk($id);
          return ($usuario->nombre_foto).($usuario->formato_foto);
      }
      
      public function traerNombre($id)
      {
          $usuario= Usuario::model()->findByPk($id);
          return $usuario->nombre;
      }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Publicacion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Publicacion']))
			$model->attributes=$_GET['Publicacion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        /*
         * Shows all post with an specific tag. 
         */
        public function actionAllTagPost($tagName){
            $criteria= new CDbCriteria();
            $criteria->join='INNER JOIN trending ON id = trending.PUBLICACION_id';
            $criteria->condition= 'trending.ETIQUETA_nombre= :ETIQUETA_nombre';
            $criteria->params= array(':ETIQUETA_nombre'=>$tagName);
            //$model= Publicacion::model()->findAll($criteria);
            
            $count = Publicacion::model()->count($criteria);
            $pages = new CPagination($count);
            $pages->setPageSize(10);
            $dataProvider= new CActiveDataProvider(Publicacion::model(), array('criteria'=> $criteria));
            $this->render('tagView',array(
                'tagName'=>$tagName,
                'pages'=>$pages,
                'dataProvider'=>$dataProvider,
            ));
        }
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Publicacion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Publicacion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Publicacion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='publicacion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
