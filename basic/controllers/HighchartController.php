<?php
namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\Highchart;
class HighchartController extends Controller
{
    public function actionIndex()
            {
  
            }
     public function actionHighchart()
            {
         $model = new Highchart();
         return $this->render('Highchart',['model'=>$model]);
            }
      public function actionGetdata()
            {   
          $count = 0;
          $model = new Highchart();
          $data = $model->getsexdata();
          var_dump($data);
          die();
         for($x=0;$x<count($data);$x++)
                     {
                    if($data[$x]['sex']=='男')
                         {
                         $count++;
                         }
                      }
               $w = round((count($data)-$count)/count($data),4);
               $m = 1-$w;
              $sd=  array(array("name"=>"男","y"=>$m),array("name"=>"女","y"=>$w));
              $json =  json_encode($sd);
               return  $json;
            }
}

