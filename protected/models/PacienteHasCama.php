<?php

/**
 * This is the model class for table "paciente_has_cama".
 *
 * The followings are the available columns in table 'paciente_has_cama':
 * @property string $pac_pac_correl
 * @property string $cam_cam_correl
 * @property string $pac_cam_fecha
 */
class PacienteHasCama extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paciente_has_cama';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pac_pac_correl, cam_cam_correl', 'required'),
			array('pac_pac_correl, cam_cam_correl', 'length', 'max'=>10),
			array('pac_cam_fechaInicio,pac_cam_fechaFin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pac_pac_correl, cam_cam_correl, pac_cam_fecha', 'safe', 'on'=>'search'),
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
			'pac_pac_correl' => 'Paciente',
			'cam_cam_correl' => 'Cama',
			'pac_cam_fechaInicio' => 'Fecha Ingreso',
			'pac_cam_fechaFin' => 'Fecha Alta',
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

		$criteria->compare('pac_pac_correl',$this->pac_pac_correl,true);
		$criteria->compare('cam_cam_correl',$this->cam_cam_correl,true);
		$criteria->compare('pac_cam_fechaInicio',$this->pac_cam_fechaInicio,true);
		$criteria->compare('pac_cam_fechaFin',$this->pac_cam_fechaFin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PacienteHasCama the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
