<?php

class PacienteController extends Controller
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
				'actions'=>array('index','view','pdf','pdf2'),
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
	public function actionCreate()
	{
		$model=new Paciente;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Paciente']))
		{
			$model->attributes=$_POST['Paciente'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pac_correl));
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
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$cam= new PacienteHasCama;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Paciente']))
		{
			$model->attributes=$_POST['Paciente'];
			//$cam->cam_cam_correl=($_POST['Cama']['cam_correl']);
			//$cam->pac_pac_correl=$id;
			if($model->save())
				//$cam->save();
				$this->redirect(array('view','id'=>$model->pac_correl));
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	* Lists all models.
	*/
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Paciente');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	* Manages all models.
	*/
	public function actionAdmin()
	{
		$pac=Paciente::model()->findAll();
		$model=new Paciente('search');
		$model->unsetAttributes();

		  // clear any default values
		if(isset($_GET['Paciente']))
			$model->attributes=$_GET['Paciente'];
		/*foreach ($pac as $key) {
			if(Antecedentes::model()->findByAttributes(array('ant_pac_correl'=>$key->pac_correl))!=null) {
				$ant=Antecedentes::model()->findByAttributes(array('ant_pac_correl'=>$key->pac_correl));
				if ($ant->ant_categoria!=null) {
					$paciente=Paciente::model()->findByPk($key->pac_correl);
					$paciente->pac_categoria=$ant->ant_categoria;
					$paciente->save();
				}
			}
		}*/
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	* Returns the data model based on the primary key given in the GET variable.
	* If the data model is not found, an HTTP exception will be raised.
	* @param integer $id the ID of the model to be loaded
	* @return Paciente the loaded model
	* @throws CHttpException
	*/
	public function loadModel($id)
	{
		$model=Paciente::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	* Performs the AJAX validation.
	* @param Paciente $model the model to be validated
	*/
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='paciente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	 public function actionPdf($id=null)
    {
        $this->render('pdf'
        );
    }
     public function actionPdf2($id=null)
    {
        $this->render('pdf2'
        );
    }

}