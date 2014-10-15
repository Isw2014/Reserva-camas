<?php

/**
 * This is the model class for table "sala".
 *
 * The followings are the available columns in table 'sala':
 * @property string $sal_id
 * @property integer $sal_camasTotales
 * @property integer $sal_camasLibres
 * @property string $sal_numeroSala
 *
 * The followings are the available model relations:
 * @property Cama[] $camas
 */
class Sala extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sala';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sal_camasTotales, sal_camasLibres', 'numerical', 'integerOnly'=>true),
			array('sal_numeroSala', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sal_id, sal_camasTotales, sal_camasLibres, sal_numeroSala', 'safe', 'on'=>'search'),
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
			'camas' => array(self::HAS_MANY, 'Cama', 'cam_sal_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sal_id' => 'Sal',
			'sal_numeroSala' => 'Número de Sala',
			'sal_camasTotales' => 'Total de Camas',
			'sal_camasLibres' => 'Total Camas Libres',
			
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

		$criteria->compare('sal_id',$this->sal_id,true);
		$criteria->compare('sal_camasTotales',$this->sal_camasTotales);
		$criteria->compare('sal_camasLibres',$this->sal_camasLibres);
		$criteria->compare('sal_numeroSala',$this->sal_numeroSala,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sala the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
