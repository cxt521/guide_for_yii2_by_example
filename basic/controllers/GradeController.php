<?php
namespace app\controllers;
use yii\web\Controller;
use \app\models\Grade;
class GradeController extends controller
{
    public function actionGetgrade()
            {
        $model = new Grade();
        $result = $model->getGrade();
        $json = $model->getjson($result);
        return$this->render('grade',['json'=>$json]);
            }
}
