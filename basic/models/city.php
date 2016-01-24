<?php 
namespace app\models;
use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
class city extends ActiveRecord
{
	public $province;
	public $city;
	public $area;
	public static function tablename()
        {
	return 'yii2_city';
        }
	public function setProvince($pid)
	{
	$this->province = $pid;
	
	}
        public function getCityList($pid)
        {
  	$model = City::findAll(array('pid'=>$pid));
        return ArrayHelper::map($model,'id','name');
        }
        public function getPid($id)
        {
  	$model = City::findAll(array('id'=>$id));
                  return ArrayHelper::map($model,'id','pid');
        }
}
