<?php

/**
 * This is the model class for table "trending".
 *
 * The followings are the available columns in table 'trending':
 * @property integer $PUBLICACION_id
 * @property string $ETIQUETA_nombre
 *
 * The followings are the available model relations:
 * @property Publicacion $pUBLICACION
 * @property Etiqueta $eTIQUETANombre
 */
class Trending extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trending';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUBLICACION_id, ETIQUETA_nombre', 'required'),
			array('PUBLICACION_id', 'numerical', 'integerOnly'=>true),
			array('ETIQUETA_nombre', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PUBLICACION_id, ETIQUETA_nombre', 'safe', 'on'=>'search'),
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
			'etiquetaNombre' => array(self::BELONGS_TO, 'Etiqueta', 'ETIQUETA_nombre'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PUBLICACION_id' => 'Publicacion',
			'ETIQUETA_nombre' => 'Etiqueta Nombre',
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

		$criteria->compare('PUBLICACION_id',$this->PUBLICACION_id);
		$criteria->compare('ETIQUETA_nombre',$this->ETIQUETA_nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trending the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
