<?php

/**
 * This is the model class for table "items_has_antecedentes".
 *
 * The followings are the available columns in table 'items_has_antecedentes':
 * @property string $ite_ite_correl
 * @property string $ant_ant_correl
 * @property integer $ite_ant_puntaje
 */
class ItemsHasAntecedentes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'items_has_antecedentes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ite_ite_correl, ant_ant_correl, ite_ant_puntaje', 'required'),
			array('ite_ant_puntaje', 'numerical', 'integerOnly'=>true),
			array('ite_ite_correl, ant_ant_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ite_ite_correl, ant_ant_correl, ite_ant_puntaje', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ite_ite_correl' => 'Codigo Item',
			'ant_ant_correl' => 'Codigo Antecedente',
			'ant_ite_puntaje' =>'',
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

		$criteria->compare('ite_ite_correl',$this->ite_ite_correl,true);
		$criteria->compare('ant_ant_correl',$this->ant_ant_correl,true);
		$criteria->compare('ite_ant_puntaje',$this->ite_ant_puntaje);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ItemsHasAntecedentes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
