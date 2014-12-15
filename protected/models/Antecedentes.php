<?php

/**
 * This is the model class for table "antecedentes".
 *
 * The followings are the available columns in table 'antecedentes':
 * @property string $ant_correl
 * @property integer $ant_puntaje
 * @property string $ant_fecha
 * @property string $ant_pac_correl
 *
 * The followings are the available model relations:
 * @property Paciente $antPacCorrel
 * @property Items[] $items
 */
class Antecedentes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'antecedentes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ant_fecha, ant_pac_correl', 'required'),
			array('ant_dependencia', 'numerical', 'integerOnly'=>true),
			array('ant_pac_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ant_correl, ant_dependencia,ant_riesgo,ant_categoria, ant_fecha, ant_pac_correl', 'safe', 'on'=>'search'),
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
			'antPacCorrel' => array(self::BELONGS_TO, 'Paciente', 'ant_pac_correl'),
			'items' => array(self::MANY_MANY, 'Items', 'items_has_antecedentes(ant_ant_correl, ite_ite_correl)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ant_correl' => 'Codigo',
			'ant_dependencia' => 'Puntaje Dependencia',
			'ant_riesgo' => 'Puntaje Riesgo',
			'ant_categoria' => 'Categoria',
			'ant_fecha' => 'Fecha',
			'ant_pac_correl' => 'Paciente',
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

		$criteria->compare('ant_correl',$this->ant_correl,true);
		$criteria->compare('ant_dependencia',$this->ant_dependencia);
		$criteria->compare('ant_riesgo',$this->ant_riesgo);
		$criteria->compare('ant_categoria',$this->ant_categoria);
		$criteria->compare('ant_fecha',$this->ant_fecha,true);
		$criteria->compare('ant_pac_correl',$this->ant_pac_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Antecedentes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
