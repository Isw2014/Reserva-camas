<?php

/**
 * This is the model class for table "items".
 *
 * The followings are the available columns in table 'items':
 * @property string $ite_correl
 * @property string $ite_nombre
 * @property integer $ite_estado
 *
 * The followings are the available model relations:
 * @property Antecedentes[] $antecedentes
 */
class Items extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ite_nombre, ite_estado', 'required'),
			array('ite_estado', 'numerical', 'integerOnly'=>true),
			array('ite_nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ite_correl, ite_nombre, ite_estado', 'safe', 'on'=>'search'),
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
			'antecedentes' => array(self::MANY_MANY, 'Antecedentes', 'items_has_antecedentes(ite_ite_correl, ant_ant_correl)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ite_correl' => 'Codigo',
			'ite_nombre' => 'Nombre',
			'ite_estado' => 'Estado',
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

		$criteria->compare('ite_correl',$this->ite_correl,true);
		$criteria->compare('ite_nombre',$this->ite_nombre,true);
		$criteria->compare('ite_estado',$this->ite_estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Items the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
