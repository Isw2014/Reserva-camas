<?php

/**
 * This is the model class for table "especialidad".
 *
 * The followings are the available columns in table 'especialidad':
 * @property string $esp_id
 * @property string $esp_nombre
 * @property string $esp_descripcion
 *
 * The followings are the available model relations:
 * @property Paciente[] $pacientes
 * @property Usuario[] $usuarios
 */
class Especialidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'especialidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('esp_nombre', 'length', 'max'=>20),
			array('esp_descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('esp_nombre, esp_descripcion', 'safe', 'on'=>'search'),
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
			'pacientes' => array(self::HAS_MANY, 'Paciente', 'pac_esp_id'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'usu_esp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'esp_id' => 'Esp',
			'esp_nombre' => 'Nombre de Especialidad',
			'esp_descripcion' => 'Descripción de Especialidad',
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

		$criteria->compare('esp_id',$this->esp_id,true);
		$criteria->compare('esp_nombre',$this->esp_nombre,true);
		$criteria->compare('esp_descripcion',$this->esp_descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Especialidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
