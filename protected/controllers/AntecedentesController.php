<?php

class AntecedentesController extends Controller
{
	/**
	* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	* using two-column layout. See 'protected/views/layouts/column2.php'.
	*/
	public $layout='//layouts/column2';

	/**
	* @return array action filters
	*/
	public function filters()
   	{
      return array(array('CrugeAccessControlFilter'));
  	}

	/**
	* Specifies the access control rules.
	* This method is used by the 'accessControl' filter.
	* @return array access control rules
	*/
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	* Displays a particular model.
	* @param integer $id the ID of the model to be displayed
	*/
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	* Creates a new model.
	* If creation is successful, the browser will be redirected to the 'view' page.
	*/
	public function actionCreate($id)
	{
		$model=new Antecedentes;
		$perso=Paciente::model()->findByPk($id);
		$var=new Antecedentes;
		$vaq=new Antecedentes;
		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);
		if(isset($_POST['Antecedentes']))
		{
			$model->attributes=$_POST['Antecedentes'];
			$model->ant_pac_correl=$id;
			if(isset($_POST['Grupo'])){
				$array=Items::model()->findAllByAttributes(array('ite_estado'=>"Activo"));
				$model->save();
				foreach ($array as $key) {
					$modelo=new ItemsHasAntecedentes;
					$modelo->ant_ant_correl=$model->ant_correl;
					$modelo->ite_ite_correl=$key->ite_correl;
					$modelo->ant_ite_puntaje=($_POST['Grupo'][$key->ite_correl]);
					if ($modelo->ant_ite_puntaje==null)
						$modelo->ant_ite_puntaje=0;
					if($modelo->save()){
						if($key->ite_tipo=="Dependencia")
							$model->ant_dependencia=$model->ant_dependencia+ $modelo->ant_ite_puntaje;
						if($key->ite_tipo=="Riesgo")
							$model->ant_riesgo=$model->ant_riesgo+ $modelo->ant_ite_puntaje;
					}
				}
				$model->ant_categoria=$this->calculaRiesgo($model->ant_riesgo)[1].$this->calculaDependencia($model->ant_dependencia)[1];
			}
			$vaq->ant_fecha=('0000-00-00');
			$var=Antecedentes::model()->findAllByAttributes(array('ant_pac_correl' =>$id ));
			foreach ($var as $key) {
				if (($key->ant_fecha>$vaq->ant_fecha)&($key->ant_categoria!=null)) {
					$perso->pac_categoria=$key->ant_categoria;
				}
			}
			if ($perso->save()) {

				var_dump($perso);
				die();
			}
			//echo "no paso";
			//die();
			if($model->save())
				$this->redirect(array('view','id'=>$model->ant_correl));
		}
		$Lista=new Antecedentes('search');
		$Lista->unsetAttributes();
		$Lista->ant_pac_correl=$id;
		$this->render('create',array(
			'model'=>$model,
			'lista'=>$Lista
		));
	}

	/**
	* Updates a particular model.
	* If update is successful, the browser will be redirected to the 'view' page.
	* @param integer $id the ID of the model to be updated
	*/
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$paciente=Paciente::model()->findByPk($model->ant_pac_correl);
		$array=ItemsHasAntecedentes::model()->findAllByAttributes(array('ant_ant_correl'=>$id));
		if (isset($_POST['Grupo'])) {
			$model->ant_dependencia=0;
			$model->ant_riesgo=0;
			foreach ($array as $key) {
					$modelo=new ItemsHasAntecedentes;
					$modelo->ant_ant_correl=$model->ant_correl;
					$modelo->ite_ite_correl=$key->ite_ite_correl;
					$modelo->ant_ite_puntaje=($_POST['Grupo'][$key->ite_ite_correl]);
					if ($modelo->ant_ite_puntaje==null)
						$modelo->ant_ite_puntaje=0;
					$item=Items::model()->findByPk($key->ite_ite_correl);
					$key->delete();
					if($modelo->save()){
						if($item->ite_tipo=="Dependencia")
							$model->ant_dependencia=$model->ant_dependencia+ $modelo->ant_ite_puntaje;
						if($item->ite_tipo=="Riesgo")
							$model->ant_riesgo=$model->ant_riesgo+ $modelo->ant_ite_puntaje;
					}
				}
			$model->ant_categoria=$this->calculaRiesgo($model->ant_riesgo)[1].$this->calculaDependencia($model->ant_dependencia)[1];
			$paciente->pac_categoria=$model->ant_categoria;
			$paciente->save();
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Antecedentes']))
		{
			$model->attributes=$_POST['Antecedentes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ant_correl));
		}
		$this->render('update',array(
			'model'=>$model,
			'array'=>$array,
		));
	}

	/**
	* Deletes a particular model.
	* If deletion is successful, the browser will be redirected to the 'admin' page.
	* @param integer $id the ID of the model to be deleted
	*/
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			$array=ItemsHasAntecedentes::model()->findAllByAttributes(array('ant_ant_correl'=>$id));
			foreach ($array as $key) {
				$key->delete();
			}
			// we only allow deletion via POST request
			//var_dump($this);
			//die();
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	public function calculaDependencia($id)
	{
		$calculo=array();
		if($id<=6){
			$calculo[0]="Autosuficiencia Parcial";
			$calculo[1]=3;
		}
		if($id>6 & $id<13){
			$calculo[0]="Dependencia Parcial";
			$calculo[1]=2;
		}
		if($id>12){
			$calculo[0]="Dependencia Total";
			$calculo[1]=1;
		}
		if($id==null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $calculo;
	}

	public function calculaRiesgo($id)
	{
		$calculo=array();
		if($id<=5){
			$calculo[0]="Bajo Riesgo";
			$calculo[1]="D";
		}
		if($id>5 & $id<12){
			$calculo[0]="Mediano Riesgo";
			$calculo[1]="C";
		}
		if($id>11 & $id<19){
			$calculo[0]="Alto Riesgo";
			$calculo[1]="B";
		}
		if($id>18){
			$calculo[0]="Maximo Riesgo";
			$calculo[1]="A";
		}
		if($id==null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $calculo;
	}
	/**
	* Lists all models.
	*/
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Antecedentes');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	* Manages all models.
	*/
	public function actionAdmin($id)
	{
		$model=new Antecedentes('search');
		//$model=new Antecedentes;
		$model->unsetAttributes();  // clear any default values
		$model->ant_pac_correl=$id;
		if(isset($_GET['Antecedentes']))
			$model->attributes=$_GET['Antecedentes'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	* Returns the data model based on the primary key given in the GET variable.
	* If the data model is not found, an HTTP exception will be raised.
	* @param integer $id the ID of the model to be loaded
	* @return Antecedentes the loaded model
	* @throws CHttpException
	*/
	public function loadModel($id)
	{
		$model=Antecedentes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	* Performs the AJAX validation.
	* @param Antecedentes $model the model to be validated
	*/
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='antecedentes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}