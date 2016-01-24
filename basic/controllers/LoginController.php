<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Login;
class LoginController extends Controller
{
	public function actionIndex(){
	$query = Login::find();
	$users = $query->orderBy('name')->all();
	return $this->render('index', [
            'users' => $users,
        ]);
}
}
