<?php

/**
 * This is the model class for table "estadistica".
 *
 * The followings are the available columns in table 'estadistica':
 * @property integer $year
 * @property string $month
 * @property int $visitas
 *
 */
class Estadistica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estadistica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('year, month, visitas', 'required'),
			array('year, visitas', 'numerical', 'integerOnly'=>true),
			array('month', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('year. onth, visitas', 'safe', 'on'=>'search'),
		);
	}

	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'year' => 'Año',
			'month' => 'Mes',
                        'visitas' => 'Visitas',
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

		$criteria->compare('year',$this->year);
		$criteria->compare('month',$this->ETIQUETA_nombre);
                $criteria->compare('visitas',$this->visitas);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estadistica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
