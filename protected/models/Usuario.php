<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id
 * @property string $nombre
 * @property string $contrasena
 * @property string $sesion
 * @property string $correo
 * @property string $descripcion
 * @property string $titulo
 *
 * The followings are the available model relations:
 * @property Publicacion[] $publicacions
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, contrasena, correo, username', 'required'),
			array('nombre', 'length', 'max'=>50),
			array('contrasena', 'length', 'max'=>25),
			array('sesion', 'length', 'max'=>20),
			array('correo', 'length', 'max'=>60),
			array('descripcion', 'length', 'max'=>120),
			array('titulo', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, nombre, contrasena, sesion, correo, descripcion, titulo', 'safe', 'on'=>'search'),
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
			'publicacions' => array(self::HAS_MANY, 'Publicacion', 'USUARIO_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
                        'username' => 'Nombre de Usuario',
			'nombre' => 'Nombre',
			'contrasena' => 'Contraseña',
			'sesion' => 'Sesión',
			'correo' => 'Correo',
			'descripcion' => 'Descripcion',
			'titulo' => 'Titulo',
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
                $criteria->compare('username',$this->username);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('contrasena',$this->contrasena,true);
		$criteria->compare('sesion',$this->sesion,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('titulo',$this->titulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
