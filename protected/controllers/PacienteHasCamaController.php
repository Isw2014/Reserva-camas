<?php

class PacienteHasCamaController extends Controller
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
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
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
	public function actionView($id,$id2=null)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id,$id2),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new PacienteHasCama;
		$cam=new Cama;


		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['PacienteHasCama']))
		{
			$model->attributes=$_POST['PacienteHasCama'];
			$model->pac_pac_correl=$id;
			if(isset($_POST['Cama'])){
				$model->cam_cam_correl=$_POST['Cama']['cam_correl'];
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->pac_pac_correl,'id2'=>$model->cam_cam_correl));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id,$id2)
	{

		$model=$this->loadModel($id,$id2);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['PacienteHasCama']))
		{
			$model->attributes=$_POST['PacienteHasCama'];
			if(isset($_POST['Cama'])){
				$model->cam_cam_correl=$_POST['Cama']['cam_correl'];
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->pac_pac_correl,'id2'=>$model->cam_cam_correl));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('PacienteHasCama');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($id=null)
	{
		$model=new PacienteHasCama('search');
		$model->unsetAttributes();  // clear any default values
		$model->pac_pac_correl=$id;
		if(isset($_GET['PacienteHasCama']))
			$model->attributes=$_GET['PacienteHasCama'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PacienteHasCama the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id,$id2=null)
	{
		if($id2!=null)
			$model=PacienteHasCama::model()->findByAttributes(array('pac_pac_correl'=>$id,'cam_cam_correl'=>$id2));
		else
			$model=PacienteHasCama::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PacienteHasCama $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='paciente-has-cama-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
