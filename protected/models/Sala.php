<?php

/**
 * This is the model class for table "sala".
 *
 * The followings are the available columns in table 'sala':
 * @property string $sal_correl
 * @property string $sal_numero
 * @property integer $sal_totalCamas
 * @property integer $sal_camasDisponibles
 * @property string $sal_are_correl
 *
 * The followings are the available model relations:
 * @property Cama[] $camas
 * @property Area $salAreCorrel
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
			array('sal_numero, sal_are_correl', 'required'),
			array('sal_totalCamas, sal_camasDisponibles', 'numerical', 'integerOnly'=>true),
			array('sal_numero, sal_are_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sal_correl, sal_numero, sal_totalCamas, sal_camasDisponibles, sal_are_correl', 'safe', 'on'=>'search'),
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
			'camas' => array(self::HAS_MANY, 'Cama', 'cam_sal_correl'),
			'salAreCorrel' => array(self::BELONGS_TO, 'Area', 'sal_are_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sal_correl' => 'Sal Correl',
			'sal_numero' => 'Sal Numero',
			'sal_totalCamas' => 'Sal Total Camas',
			'sal_camasDisponibles' => 'Sal Camas Disponibles',
			'sal_are_correl' => 'Sal Are Correl',
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

		$criteria->compare('sal_correl',$this->sal_correl,true);
		$criteria->compare('sal_numero',$this->sal_numero,true);
		$criteria->compare('sal_totalCamas',$this->sal_totalCamas);
		$criteria->compare('sal_camasDisponibles',$this->sal_camasDisponibles);
		$criteria->compare('sal_are_correl',$this->sal_are_correl,true);

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
