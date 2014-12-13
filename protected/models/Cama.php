<?php

/**
 * This is the model class for table "cama".
 *
 * The followings are the available columns in table 'cama':
 * @property string $cam_correl
 * @property string $cam_numero
 * @property integer $cam_estado
 * @property string $cam_sal_correl
 *
 * The followings are the available model relations:
 * @property Sala $camSalCorrel
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
			array('cam_numero, cam_estado, cam_sal_correl', 'required'),
			array('cam_estado', 'numerical', 'integerOnly'=>true),
			array('cam_numero, cam_sal_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cam_correl, cam_numero, cam_estado, cam_sal_correl', 'safe', 'on'=>'search'),
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
			'camSalCorrel' => array(self::BELONGS_TO, 'Sala', 'cam_sal_correl'),
			'paciente' => array(self::MANY_MANY, 'Paciente', 'paciente_has_cama(pac_pac_correl, cam_cam_correl)'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cam_correl' => 'Cama',
			'cam_numero' => 'Numero',
			'cam_estado' => 'Estado',
			'cam_sal_correl' => 'Sala',
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

		$criteria->compare('cam_correl',$this->cam_correl,true);
		$criteria->compare('cam_numero',$this->cam_numero,true);
		$criteria->compare('cam_estado',$this->cam_estado);
		$criteria->compare('cam_sal_correl',$this->cam_sal_correl,true);

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
