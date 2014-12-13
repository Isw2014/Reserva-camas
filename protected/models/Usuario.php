<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $usu_correl
 * @property string $usu_nombre
 * @property string $usu_aPaterno
 * @property string $usu_aMaterno
 * @property string $usu_usuario
 * @property string $usu_clave
 * @property integer $usu_role
 * @property string $usu_rut
 * @property string $usu_mail
 * @property string $usu_esp_correl
 *
 * The followings are the available model relations:
 * @property Especialidad $usuEspCorrel
 * @property Sala[] $salas
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
			array('usu_mail', 'required'),			
			array('usu_nombre, usu_aPaterno, usu_aMaterno', 'length', 'max'=>45),		
			array('usu_rut', 'length', 'max'=>12),
			array('usu_mail', 'length', 'max'=>100),
			array('usu_esp_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usu_correl, usu_nombre, usu_aPaterno, usu_aMaterno, usu_rut, usu_mail, usu_esp_correl', 'safe', 'on'=>'search'),
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
			'usuEspCorrel' => array(self::BELONGS_TO, 'Especialidad', 'usu_esp_correl'),
			'salas' => array(self::MANY_MANY, 'Sala', 'usuario_has_sala(sal_usu_correl, sal_sal_correl)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usu_correl' => 'Id usuario',
			'usu_nombre' => 'Nombre usuario',
			'usu_aPaterno' => 'Ap. Pat.',
			'usu_aMaterno' => 'Ap. Mat.',			
			'usu_rut' => 'Rut usuario',
			'usu_mail' => 'Mail usuario',
			'usu_esp_correl' => 'Especialidad',
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

		//$criteria->compare('usu_correl',$this->usu_correl,true);
		$criteria->compare('usu_nombre',$this->usu_nombre,true);
		$criteria->compare('usu_aPaterno',$this->usu_aPaterno,true);
		$criteria->compare('usu_aMaterno',$this->usu_aMaterno,true);	
		$criteria->compare('usu_rut',$this->usu_rut,true);
		$criteria->compare('usu_mail',$this->usu_mail,true);
		$criteria->compare('usu_esp_correl',$this->usu_esp_correl,true);

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
