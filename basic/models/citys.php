<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
class citys extends ActiveRecord
{
     public static function tablename()
             {
	return 'j_position_city';
              }
        public function getCityList($pid)
        {
  	$model = citys::findAll(array('province_id'=>$pid));
                  return ArrayHelper::map($model,'city_id','city_name');
        }
}