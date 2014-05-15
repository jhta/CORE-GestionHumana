<?php

/**
 * This is the model class for table "comentario".
 *
 * The followings are the available columns in table 'comentario':
 * @property integer $id
 * @property string $nombre
 * @property string $comentario
 * @property integer $PUBLICACION_id
 *
 * The followings are the available model relations:
 * @property Publicacion $pUBLICACION
 */
class Comentario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comentario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, comentario, fecha_creacion', 'required'),
			array('PUBLICACION_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>30),
			array('comentario', 'length', 'max'=>2000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha_creacion, nombre, comentario, PUBLICACION_id', 'safe', 'on'=>'search'),
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
			'publicacion' => array(self::BELONGS_TO, 'Publicacion', 'PUBLICACION_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
                        'fecha_creacion'=>'Fecha Creacion',
			'comentario' => 'Comentario',
			'PUBLICACION_id' => 'Publicacion',
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
		$criteria->compare('nombre',$this->nombre,true);
                $criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('comentario',$this->comentario,true);
		$criteria->compare('PUBLICACION_id',$this->PUBLICACION_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        /**
	 * @param Post the post that this comment belongs to. If null, the method
	 * will query for the post.
	 * @return string the permalink URL for this comment
	 */
	public function getUrl($post=null){
		if($post===null)
                    $post=$this->publicacion;
                
		return $post->url.'#c'.$this->id;
	}
        
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comentario the static model class
	 */
        
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
