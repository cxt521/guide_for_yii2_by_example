<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\base\Model;
class card extends ActiveRecord
{
    public static function tableName()
            {
        return'stu_src';
            }
    public function getdata()
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
    public function analysisdata()
            {
        $connection =  \Yii::$app->db;
        $sql=<<<EOF
                SELECT BM,DQ
                FROM idc
                WHERE BM like '%0000'
EOF;
        $command = $connection->createCommand($sql);
        $result = $command->queryAll();
        return$result;
            }
}