<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $usu_id
 * @property string $usu_nombre
 * @property string $usu_apellidoMat
 * @property string $usu_apellidoPat
 * @property string $usu_rut
 * @property string $usu_especialidad
 * @property string $usu_password
 * @property string $usu_username
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usu_apellidoMat, usu_apellidoPat, usu_password, usu_username', 'required'),
			array('usu_nombre, usu_rut, usu_especialidad, usu_password, usu_username', 'length', 'max'=>45),
			array('usu_apellidoMat, usu_apellidoPat', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usu_nombre, usu_apellidoMat, usu_apellidoPat, usu_rut, usu_especialidad', 'safe', 'on'=>'search'),
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
			'usu_id' => 'Usu',
			'usu_nombre' => 'Nombre de usuario',
			'usu_apellidoMat' => 'Apellido paterno de usuario',
			'usu_apellidoPat' => 'Apellido materno de usuario',
			'usu_rut' => 'Rut de usuario',
			'usu_especialidad' => 'Especialidad del usuario',
			'usu_password' => 'Contraseña del usuario',
			'usu_username' => 'Nombre cuenta del usuario',
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

		$criteria->compare('usu_id',$this->usu_id,true);
		$criteria->compare('usu_nombre',$this->usu_nombre,true);
		$criteria->compare('usu_apellidoMat',$this->usu_apellidoMat,true);
		$criteria->compare('usu_apellidoPat',$this->usu_apellidoPat,true);
		$criteria->compare('usu_rut',$this->usu_rut,true);
		$criteria->compare('usu_especialidad',$this->usu_especialidad,true);
		$criteria->compare('usu_password',$this->usu_password,true);
		$criteria->compare('usu_username',$this->usu_username,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
