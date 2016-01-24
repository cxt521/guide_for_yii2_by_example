<?php
namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\Card;
class CardController extends Controller
{
    public function actionCard()
            {
        return $this->render('card');
            }
    public function  actionGetdata()
            {
        $model = new card();
        $list =  $model->getdata();
        $count = count($list);
        $Array = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
        $AnalysisData = $model->analysisdata();
              for($x=0;$x<$count;$x++)
                   {
                        switch (substr($list[$x]['card_num'], 0, 2))
                             {
                                   case substr($AnalysisData[0]['BM'],0,2):
                                   $Array[0]++;
                                   case substr($AnalysisData[1]['BM'],0,2):
                                   $Array[1]++;
                                   case substr($AnalysisData[2]['BM'],0,2):
                                   $Array[2]++;
                                   case substr($AnalysisData[3]['BM'],0,2):
                                   $Array[3]++;
                                   case substr($AnalysisData[4]['BM'],0,2):
                                   $Array[4]++;
                                   case substr($AnalysisData[5]['BM'],0,2):
                                   $Array[5]++;
                                   case substr($AnalysisData[6]['BM'],0,2):
                                   $Array[6]++;
                                    case substr($AnalysisData[7]['BM'],0,2):
                                   $Array[7]++;
                                   case substr($AnalysisData[8]['BM'],0,2):
                                   $Array[8]++;
                                   case substr($AnalysisData[9]['BM'],0,2):
                                   $Array[9]++;
                                   case substr($AnalysisData[10]['BM'],0,2):
                                   $Array[10]++;
                                   case substr($AnalysisData[11]['BM'],0,2):
                                   $Array[11]++;
                                   case substr($AnalysisData[12]['BM'],0,2):
                                   $Array[12]++;
                                   case substr($AnalysisData[13]['BM'],0,2):
                                   $Array[13]++;
                                   case substr($AnalysisData[14]['BM'],0,2):
                                   $Array[14]++;
                                   case substr($AnalysisData[15]['BM'],0,2):
                                   $Array[15]++;
                                   case substr($AnalysisData[16]['BM'],0,2):
                                   $Array[16]++;
                                    case substr($AnalysisData[17]['BM'],0,2):
                                   $Array[17]++;
                                   case substr($AnalysisData[18]['BM'],0,2):
                                   $Array[18]++;
                                   case substr($AnalysisData[19]['BM'],0,2):
                                   $Array[19]++;
                                   case substr($AnalysisData[20]['BM'],0,2):
                                   $Array[20]++;
                                   case substr($AnalysisData[21]['BM'],0,2):
                                   $Array[21]++;
                                   case substr($AnalysisData[22]['BM'],0,2):
                                   $Array[22]++;
                                   case substr($AnalysisData[23]['BM'],0,2):
                                   $Array[23]++;
                                   case substr($AnalysisData[24]['BM'],0,2):
                                   $Array[24]++;
                                   case substr($AnalysisData[25]['BM'],0,2):
                                   $Array[25]++;
                                   case substr($AnalysisData[26]['BM'],0,2):
                                   $Array[26]++;
                                    case substr($AnalysisData[27]['BM'],0,2):
                                   $Array[27]++;
                                   case substr($AnalysisData[28]['BM'],0,2):
                                   $Array[28]++;
                                   case substr($AnalysisData[29]['BM'],0,2):
                                   $Array[29]++;            
                                   case substr($AnalysisData[30]['BM'],0,2):
                                   $Array[30]++;
                                   
                             }
                   }
                   $list =array(array("name"=>"男","y"=>$m),array("name"=>"女","y"=>$w));
                   $json = json_encode($list);                
                   return $json;
            }
   
}