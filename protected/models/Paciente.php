<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property string $pac_id
 * @property string $pac_categoria
 * @property string $pac_estado
 * @property string $pac_cam_id
 *
 * The followings are the available model relations:
 * @property Dependencia[] $dependencias
 * @property Cama $pacCam
 * @property Riesgo[] $riesgos
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
			array('pac_cam_id', 'required'),
			array('pac_categoria', 'length', 'max'=>45),
			array('pac_estado', 'length', 'max'=>20),
			array('pac_cam_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pac_id, pac_categoria, pac_estado, pac_cam_id', 'safe', 'on'=>'search'),
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
			'dependencias' => array(self::HAS_MANY, 'Dependencia', 'dep_pac_id'),
			'pacCam' => array(self::BELONGS_TO, 'Cama', 'pac_cam_id'),
			'riesgos' => array(self::HAS_MANY, 'Riesgo', 'rie_pac_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pac_id' => 'Pac',
			'pac_categoria' => 'Pac Categoria',
			'pac_estado' => 'Pac Estado',
			'pac_cam_id' => 'Pac Cam',
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

		$criteria->compare('pac_id',$this->pac_id,true);
		$criteria->compare('pac_categoria',$this->pac_categoria,true);
		$criteria->compare('pac_estado',$this->pac_estado,true);
		$criteria->compare('pac_cam_id',$this->pac_cam_id,true);

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
