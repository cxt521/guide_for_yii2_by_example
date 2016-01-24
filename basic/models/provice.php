<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
class provice extends ActiveRecord
{       
        public $province;
        public $city;
        public $town;
        public $county;    
        public $village;
        public static function tablename()
             {
	return 'j_position_provice';
              }
        public function getCityList($pid)
        {
  	$model = provice::findAll(array('pid'=>$pid));
                  return ArrayHelper::map($model,'provice_id','provice_name');
        }
}
