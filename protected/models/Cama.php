<?php

/**
 * This is the model class for table "cama".
 *
 * The followings are the available columns in table 'cama':
 * @property string $cam_id
 * @property string $cam_numero
 * @property string $cam_estado
 * @property string $cam_sal_id
 *
 * The followings are the available model relations:
 * @property Sala $camSal
 * @property Paciente[] $pacientes
 */
class Cama extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cama';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cam_sal_id', 'required'),
			array('cam_numero, cam_estado', 'length', 'max'=>20),
			array('cam_sal_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cam_numero, cam_estado, cam_sal_id', 'safe', 'on'=>'search'),
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
			'camSal' => array(self::BELONGS_TO, 'Sala', 'cam_sal_id'),
			'pacientes' => array(self::HAS_MANY, 'Paciente', 'pac_cam_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cam_id' => 'id Cama',
			'cam_numero' => 'Número de la cama',
			'cam_estado' => 'Estado de la cama',
			'cam_sal_id' => 'Sala a la que pertenece',
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

		$criteria->compare('cam_id',$this->cam_id,true);
		$criteria->compare('cam_numero',$this->cam_numero,true);
		$criteria->compare('cam_estado',$this->cam_estado,true);
		$criteria->compare('cam_sal_id',$this->cam_sal_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cama the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
