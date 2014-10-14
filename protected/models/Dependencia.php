<?php

/**
 * This is the model class for table "dependencia".
 *
 * The followings are the available columns in table 'dependencia':
 * @property string $dep_id
 * @property integer $dep_cambioRopa
 * @property integer $dep_movilizacion
 * @property integer $dep_cuidadosAlimentacion
 * @property integer $dep_cuidadosEliminacion
 * @property integer $dep_apoyo
 * @property integer $dep_vigilancia
 * @property string $dep_fecha
 * @property string $dep_pac_id
 *
 * The followings are the available model relations:
 * @property Paciente $depPac
 */
class Dependencia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dependencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dep_pac_id', 'required'),
			array('dep_cambioRopa, dep_movilizacion, dep_cuidadosAlimentacion, dep_cuidadosEliminacion, dep_apoyo, dep_vigilancia', 'numerical', 'integerOnly'=>true),
			array('dep_pac_id', 'length', 'max'=>10),
			array('dep_fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('dep_id, dep_cambioRopa, dep_movilizacion, dep_cuidadosAlimentacion, dep_cuidadosEliminacion, dep_apoyo, dep_vigilancia, dep_fecha, dep_pac_id', 'safe', 'on'=>'search'),
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
			'depPac' => array(self::BELONGS_TO, 'Paciente', 'dep_pac_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dep_id' => 'Dep',
			'dep_cambioRopa' => 'Dep Cambio Ropa',
			'dep_movilizacion' => 'Dep Movilizacion',
			'dep_cuidadosAlimentacion' => 'Dep Cuidados Alimentacion',
			'dep_cuidadosEliminacion' => 'Dep Cuidados Eliminacion',
			'dep_apoyo' => 'Dep Apoyo',
			'dep_vigilancia' => 'Dep Vigilancia',
			'dep_fecha' => 'Dep Fecha',
			'dep_pac_id' => 'Dep Pac',
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

		$criteria->compare('dep_id',$this->dep_id,true);
		$criteria->compare('dep_cambioRopa',$this->dep_cambioRopa);
		$criteria->compare('dep_movilizacion',$this->dep_movilizacion);
		$criteria->compare('dep_cuidadosAlimentacion',$this->dep_cuidadosAlimentacion);
		$criteria->compare('dep_cuidadosEliminacion',$this->dep_cuidadosEliminacion);
		$criteria->compare('dep_apoyo',$this->dep_apoyo);
		$criteria->compare('dep_vigilancia',$this->dep_vigilancia);
		$criteria->compare('dep_fecha',$this->dep_fecha,true);
		$criteria->compare('dep_pac_id',$this->dep_pac_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dependencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
