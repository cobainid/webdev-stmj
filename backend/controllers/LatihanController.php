<?php 
namespace backend\controllers;
use yii\web\Controller;

class LatihanController extends Controller 
{
	public function actionIndex($name=null)
	{
		return $this->render('index',['myName'=>$name]);
	}
}
