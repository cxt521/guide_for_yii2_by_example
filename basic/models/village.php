<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
class village extends ActiveRecord
{
     public static function tablename()
             {
	return 'j_position_village';
              }
        public function getvillageList($pid)
        {
  	$model = village::findAll(array('town_id'=>$pid));
                  return ArrayHelper::map($model,'village_id','village_name');
        }
}
