<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
class Highchart extends ActiveRecord
{   
    public $Select_Information;
    public static function tableName() 
    {
        return'stu_src';
    }
    public function getdata()
    {
        $item = array("1"=>"sex","2"=>"magor");
        return $item;
    }
    public function getsexdata()
    {
        $connection=\Yii::$app->db;
        $sql=<<<EOF
               SELECT card_num
                FROM stu_src
EOF;
       $command = $connection->createCommand($sql);
       $result = $command->queryAll();
       return$result;
    }
}