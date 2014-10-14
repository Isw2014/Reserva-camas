<?php

/**
 * This is the model class for table "riesgo".
 *
 * The followings are the available columns in table 'riesgo':
 * @property string $rie_id
 * @property integer $rie_control
 * @property integer $rie_balance
 * @property integer $rie_cuidadoOxigenoterapia
 * @property integer $rie_cuidadoAereo
 * @property integer $rie_intervenciones
 * @property integer $rie_cuidadoPiel
 * @property integer $rie_tratamiento
 * @property integer $rie_presenciaElementos
 * @property string $rie_fecha
 * @property string $rie_pac_id
 *
 * The followings are the available model relations:
 * @property Paciente $riePac
 */
class Riesgo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'riesgo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rie_pac_id', 'required'),
			array('rie_control, rie_balance, rie_cuidadoOxigenoterapia, rie_cuidadoAereo, rie_intervenciones, rie_cuidadoPiel, rie_tratamiento, rie_presenciaElementos', 'numerical', 'integerOnly'=>true),
			array('rie_pac_id', 'length', 'max'=>10),
			array('rie_fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rie_id, rie_control, rie_balance, rie_cuidadoOxigenoterapia, rie_cuidadoAereo, rie_intervenciones, rie_cuidadoPiel, rie_tratamiento, rie_presenciaElementos, rie_fecha, rie_pac_id', 'safe', 'on'=>'search'),
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
			'riePac' => array(self::BELONGS_TO, 'Paciente', 'rie_pac_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rie_id' => 'Rie',
			'rie_control' => 'Rie Control',
			'rie_balance' => 'Rie Balance',
			'rie_cuidadoOxigenoterapia' => 'Rie Cuidado Oxigenoterapia',
			'rie_cuidadoAereo' => 'Rie Cuidado Aereo',
			'rie_intervenciones' => 'Rie Intervenciones',
			'rie_cuidadoPiel' => 'Rie Cuidado Piel',
			'rie_tratamiento' => 'Rie Tratamiento',
			'rie_presenciaElementos' => 'Rie Presencia Elementos',
			'rie_fecha' => 'Rie Fecha',
			'rie_pac_id' => 'Rie Pac',
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

		$criteria->compare('rie_id',$this->rie_id,true);
		$criteria->compare('rie_control',$this->rie_control);
		$criteria->compare('rie_balance',$this->rie_balance);
		$criteria->compare('rie_cuidadoOxigenoterapia',$this->rie_cuidadoOxigenoterapia);
		$criteria->compare('rie_cuidadoAereo',$this->rie_cuidadoAereo);
		$criteria->compare('rie_intervenciones',$this->rie_intervenciones);
		$criteria->compare('rie_cuidadoPiel',$this->rie_cuidadoPiel);
		$criteria->compare('rie_tratamiento',$this->rie_tratamiento);
		$criteria->compare('rie_presenciaElementos',$this->rie_presenciaElementos);
		$criteria->compare('rie_fecha',$this->rie_fecha,true);
		$criteria->compare('rie_pac_id',$this->rie_pac_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Riesgo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
