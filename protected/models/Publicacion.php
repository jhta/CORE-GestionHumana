<?php

/**
 * This is the model class for table "publicacion".
 *
 * The followings are the available columns in table 'publicacion':
 * @property integer $id
 * @property string $titulo
 * @property string $contenido
 * @property integer $USUARIO_id
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Archivo[] $archivos
 * @property Comentario[] $comentarios
 * @property Usuario $uSUARIO
 * @property Trending[] $trendings
 */
class Publicacion extends CActiveRecord
{
	public $files;
        public $tags;
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'publicacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('files','file','allowEmpty' => true),
			array('titulo, contenido, USUARIO_id, fecha', 'required'),
			array('USUARIO_id', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>50),
			array('contenido', 'length', 'max'=>5000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, titulo, contenido, USUARIO_id, fecha', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'archivos' => array(self::HAS_MANY, 'Archivo', 'PUBLICACION_id'),
			'comentarios' => array(self::HAS_MANY, 'Comentario', 'PUBLICACION_id'),
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'USUARIO_id'),
			'trendings' => array(self::HAS_MANY, 'Trending', 'PUBLICACION_id'),
                        'cuentaComentarios' => array(self::STAT, 'Comentario', 'PUBLICACION_id'),
                        
		);
	}
        
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'titulo' => 'Titulo',
			'contenido' => 'Contenido',
			'USUARIO_id' => 'Autor',
			'fecha' => 'Fecha',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('USUARIO_id',$this->USUARIO_id);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        /**
	 * Adds a new comment to this post.
	 * This method will set status and post_id of the comment accordingly.
	 * @param Comment the comment to be added
	 * @return boolean whether the comment is saved successfully
	 */
	public function addComment($comment){
		$comment->PUBLICACION_id = $this->id;
		return $comment->save();
	}
        
        /**
	 * @return array a list of links that point to the post list filtered by every tag of this post
	 */
	public function getTagLinks(){
		$links= array();
		foreach($this->trendings as $tag)
                    $links[]= '<span class="label label-default">'.CHtml::link(CHtml::encode($tag->ETIQUETA_nombre),array('publicacion/AllTagPost','tagName'=>$tag->ETIQUETA_nombre));
                    //$links[]=CHtml::link(CHtml::encode($tag->ETIQUETA_nombre), array('modelo/controlador', 'parametro'=>$parametro));
		return $links;
	}
        
        /**
	 * @return array a list of links that point to the post list filtered by every tag of this post
	 */
	public function getTagList(){
		$links= array();
		foreach($this->trendings as $tag)
                    $links[]= CHtml::encode($tag->ETIQUETA_nombre);
		return $links;
	}
        
        /* Returns a Plain Text that comes from a HTML text
         * @return Plan Text
         */
        public function getPlainText(){
            include_once(Yii::app()->basePath.'\extensions\html2text\Html2Text.php');
            $html2text = new Html2Text\Html2Text(mb_substr($this->contenido,0,300));
            $texto= $html2text->get_text();
            return $text;
        }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Publicacion the static model class
	 */
        
        /**
	 * @return string the URL that shows the detail of the post
	 */
	public function getUrl(){
		return Yii::app()->createUrl('publicacion/view', array(
			'id'=>$this->id,
			'title'=>$this->titulo,
		));
	}
        
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
