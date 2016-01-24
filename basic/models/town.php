<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
class town extends ActiveRecord
{
     public static function tablename()
             {
	return 'j_position_town';
              }
        public function gettownList($pid)
        {
  	$model = town::findAll(array('county_id'=>$pid));
                  return ArrayHelper::map($model,'town_id','town_name');
        }
}
