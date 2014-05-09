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
			'uSUARIO' => array(self::BELONGS_TO, 'Usuario', 'USUARIO_id'),
			'trendings' => array(self::HAS_MANY, 'Trending', 'PUBLICACION_id'),
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
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Publicacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
