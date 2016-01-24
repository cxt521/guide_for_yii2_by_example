<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\citys;
use app\models\county;
use app\models\town;
use app\models\village;
use yii\helpers\Html;
use app\models\provice;
use Yii;

class CityController extends Controller
{
	public function actionIndex()
   	{
		echo "ddd";die;
	}
	public function actionCity()
        {
                  $model = new provice();
                 $list = $model->getcitylist(0);
                
	return $this->render('city',['model'=>$model,'list'=>$list]);
    
         }
	public function actionGetcitylist()
	{
                   $name="--jiedao--";
                   $value='1';
                   $model = new citys();
                   $pid=\Yii::$app->request->get('pid');
                   $countylist=$model->getCityList($pid);
                   $html="";
                   foreach($countylist as $value=>$name)
                   {
                       $html.= '<option value='.$value.'>' .$name.'</option>'; 
                   }
                      return $html;//返回给视图
	}
                  public function actionGetcountylist()
	{
                   $model = new county();
                   $pid=\Yii::$app->request->get('pid');
                   $countylist=$model->getcountyList($pid);
                   var_dump($countylist);
                   die();
                   $html="";//定义变量
                   foreach($countylist as $value=>$name)
                   {
                       $html.= '<option value='. $value . '>' . $name . '</option>'; 
                   }
                      return $html;//返回给视图
	}
                  public function actionGettownlist()
	{
                   $model = new town();
                   $pid=\Yii::$app->request->get('pid');
                   $townlist=$model->gettownList($pid);
                   $html="";//定义变量
                   foreach($townlist as $value=>$name)
                   {
                       $html.= '<option value='. $value . '>' . $name . '</option>'; 
                   }
                      return $html;//返回给视图
	}
                  public function actionGetvillagelist()
	{
                   $model = new village();
                   $pid=\Yii::$app->request->get('pid');
                   $villagelist=$model->getvillageList($pid);
                   $html="";//定义变量
                   foreach($villagelist as $value=>$name)
                   {
                       $html.= '<option value='. $value . '>' . $name . '</option>'; 
                   }
                      return $html;//返回给视图
	}
 }
