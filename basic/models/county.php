<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
class county extends ActiveRecord
{
     public static function tablename()
             {
	return 'j_position_county';
              }
        public function getcountyList($pid)
        {
  	$model = county::findAll(array('city_id'=>$pid));
                  return ArrayHelper::map($model,'county_id','county_name');
        }
}
