<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property string $pac_correl
 * @property string $pac_nombre
 * @property string $pac_aPaterno
 * @property string $pac_aMaterno
 * @property string $pac_estado
 * @property integer $pac_puntaje
 * @property string $pac_rut
 * @property string $pac_esp_correl
 * @property string $pac_cam_correl
 * @property string $pac_codigo
 *
 * The followings are the available model relations:
 * @property Antecedentes[] $antecedentes
 * @property Cama $pacCamCorrel
 * @property Especialidad $pacEspCorrel
 */
class Paciente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pac_esp_correl, pac_cam_correl', 'required'),
			array('pac_puntaje', 'numerical', 'integerOnly'=>true),
			array('pac_nombre, pac_aPaterno, pac_aMaterno, pac_estado', 'length', 'max'=>45),
			array('pac_rut', 'length', 'max'=>12),
			array('pac_esp_correl, pac_cam_correl', 'length', 'max'=>10),
			array('pac_codigo', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pac_correl, pac_nombre, pac_aPaterno, pac_aMaterno, pac_estado, pac_puntaje, pac_rut, pac_esp_correl, pac_cam_correl, pac_codigo', 'safe', 'on'=>'search'),
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
			'antecedentes' => array(self::HAS_MANY, 'Antecedentes', 'ant_pac_correl'),
			'pacCamCorrel' => array(self::BELONGS_TO, 'Cama', 'pac_cam_correl'),
			'pacEspCorrel' => array(self::BELONGS_TO, 'Especialidad', 'pac_esp_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pac_correl' => 'Codigo',
			'pac_nombre' => 'Nombre',
			'pac_aPaterno' => 'Apellido Paterno',
			'pac_aMaterno' => 'Apellido Materno',
			'pac_estado' => 'Estado',
			'pac_puntaje' => 'Puntaje',
			'pac_rut' => 'Rut',
			'pac_esp_correl' => 'Especialidad',
			'pac_cam_correl' => 'Cama',
			'pac_codigo' => 'Codigo Barra',
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

		$criteria->compare('pac_correl',$this->pac_correl,true);
		$criteria->compare('pac_nombre',$this->pac_nombre,true);
		$criteria->compare('pac_aPaterno',$this->pac_aPaterno,true);
		$criteria->compare('pac_aMaterno',$this->pac_aMaterno,true);
		$criteria->compare('pac_estado',$this->pac_estado,true);
		$criteria->compare('pac_puntaje',$this->pac_puntaje);
		$criteria->compare('pac_rut',$this->pac_rut,true);
		$criteria->compare('pac_esp_correl',$this->pac_esp_correl,true);
		$criteria->compare('pac_cam_correl',$this->pac_cam_correl,true);
		$criteria->compare('pac_codigo',$this->pac_codigo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
