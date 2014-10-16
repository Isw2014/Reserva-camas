<?php

/**
 * This is the model class for table "antecedentes".
 *
 * The followings are the available columns in table 'antecedentes':
 * @property string $ant_id
 * @property integer $ant_control
 * @property integer $ant_balance
 * @property integer $ant_cuidadoOxigenoterapia
 * @property integer $ant_cuidadoAereo
 * @property integer $ant_intervenciones
 * @property integer $ant_cuidadoPiel
 * @property integer $ant_tratamiento
 * @property integer $ant_presenciaElementos
 * @property string $ant_fecha
 * @property string $ant_pac_id
 * @property integer $ant_cambioRopa
 * @property integer $ant_movilizacion
 * @property integer $ant_cuidadosAlimentacion
 * @property integer $ant_cuidadosEliminacion
 * @property integer $ant_apoyo
 * @property integer $ant_vigilancia
 *
 * The followings are the available model relations:
 * @property Paciente $antPac
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
			array('ant_pac_id, ant_cambioRopa, ant_movilizacion, ant_cuidadosAlimentacion, ant_cuidadosEliminacion, ant_apoyo, ant_vigilancia', 'required'),
			array('ant_control, ant_balance, ant_cuidadoOxigenoterapia, ant_cuidadoAereo, ant_intervenciones, ant_cuidadoPiel, ant_tratamiento, ant_presenciaElementos, ant_cambioRopa, ant_movilizacion, ant_cuidadosAlimentacion, ant_cuidadosEliminacion, ant_apoyo, ant_vigilancia', 'numerical', 'integerOnly'=>true),
			array('ant_pac_id', 'length', 'max'=>10),
			array('ant_fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ant_id, ant_control, ant_balance, ant_cuidadoOxigenoterapia, ant_cuidadoAereo, ant_intervenciones, ant_cuidadoPiel, ant_tratamiento, ant_presenciaElementos, ant_fecha, ant_pac_id, ant_cambioRopa, ant_movilizacion, ant_cuidadosAlimentacion, ant_cuidadosEliminacion, ant_apoyo, ant_vigilancia', 'safe', 'on'=>'search'),
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
			'antPac' => array(self::BELONGS_TO, 'Paciente', 'ant_pac_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ant_id' => 'Ant',
			'ant_control' => 'Control Diario de signos vitales',
			'ant_balance' => 'Balance Hídrico',
			'ant_cuidadoOxigenoterapia' => 'Cuidados en Oxigenoterapia',
			'ant_cuidadoAereo' => 'Cuidados diarios de la Vía Aérea',
			'ant_intervenciones' => 'Intervenciones Profesionales',
			'ant_cuidadoPiel' => 'Cuidados de Piel y Curaciones',
			'ant_tratamiento' => 'Administración de Tratamiento Farmacológico',
			'ant_presenciaElementos' => 'Presencia de Elementos Invasivos',
			'ant_cambioRopa' => 'Cuidados en Confort y Bienestar: Cambio ropa',
			'ant_movilizacion' => 'Cuidados en Confort y Bienestar: Movilización',
			'ant_cuidadosAlimentacion' => 'Cuidados en Alimentación',
			'ant_cuidadosEliminacion' => 'Cuidados en Eliminación',
			'ant_apoyo' => 'Apoyo Psicosocial y Emocional',
			'ant_vigilancia' => 'Vigilancia',
			'ant_fecha' => 'Fecha de registro',
			'ant_pac_id' => 'Paciente',
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

		$criteria->compare('ant_id',$this->ant_id,true);
		$criteria->compare('ant_control',$this->ant_control);
		$criteria->compare('ant_balance',$this->ant_balance);
		$criteria->compare('ant_cuidadoOxigenoterapia',$this->ant_cuidadoOxigenoterapia);
		$criteria->compare('ant_cuidadoAereo',$this->ant_cuidadoAereo);
		$criteria->compare('ant_intervenciones',$this->ant_intervenciones);
		$criteria->compare('ant_cuidadoPiel',$this->ant_cuidadoPiel);
		$criteria->compare('ant_tratamiento',$this->ant_tratamiento);
		$criteria->compare('ant_presenciaElementos',$this->ant_presenciaElementos);
		$criteria->compare('ant_fecha',$this->ant_fecha,true);
		$criteria->compare('ant_pac_id',$this->ant_pac_id,true);
		$criteria->compare('ant_cambioRopa',$this->ant_cambioRopa);
		$criteria->compare('ant_movilizacion',$this->ant_movilizacion);
		$criteria->compare('ant_cuidadosAlimentacion',$this->ant_cuidadosAlimentacion);
		$criteria->compare('ant_cuidadosEliminacion',$this->ant_cuidadosEliminacion);
		$criteria->compare('ant_apoyo',$this->ant_apoyo);
		$criteria->compare('ant_vigilancia',$this->ant_vigilancia);

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
