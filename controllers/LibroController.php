<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Libro;

/**
* 
*/
class LibroController extends Controller
{
	
	public function actionIndex()
	{
		$model = Libro::find()->all();
		return $this->render('index',['model'=>$model]);
	}
}