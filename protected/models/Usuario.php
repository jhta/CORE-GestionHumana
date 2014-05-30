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
        public $foto;
        public $contrasena2;
        public $old_pass;
        public $new_pass;
        
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
                        array('foto','file', 'allowEmpty'=>true),
			array('nombre, contrasena, correo, username', 'required', 'message'=>'El campo {attribute} no puede quedar vacío'),
                        array('username','unique', 'message'=>'Este nombre de usuario ya existe'),
                        array('contrasena2','compare','compareAttribute'=>'contrasena','operator'=>'=','message'=>'Las contraseñas no coinciden'),
                        array('nombre, nombre_foto', 'length', 'max'=>50),
                        array('formato_foto', 'length', 'max'=>10),
			array('contrasena, sesion', 'length', 'max'=>150),
			array('correo, titulo, username', 'length', 'max'=>60),
			array('descripcion', 'length', 'max'=>120),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, nombre, contrasena, sesion, correo, descripcion, titulo, nombre_foto, formato_foto', 'safe', 'on'=>'search'),
                        array( 'contrasena2', 'compare', 'compareAttribute' => 'new_pass', 'operator'=>'=', 'message'=>'Las contraseñas no coinciden','on'=>'changePassword'),
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
			'publicaciones' => array(self::HAS_MANY, 'Publicacion', 'USUARIO_id'),
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
        
        public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->sesion) === $this->contrasena;
	}
        
        
        public function generateSalt(){
            return uniqid('',true);
        }
	/**
	 * Generates the password hash.
	 * @param string password
	 * @return string hash
	 */
	public function hashPassword($password,$salt)
	{
		return md5($salt.$password);
	}
        
        
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
                $criteria->compare('nombre_foto',$this->nombre_foto,true);
                $criteria->compare('formato_foto',$this->formato_foto,true);

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
