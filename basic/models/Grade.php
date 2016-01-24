<?php
namespace app\models;
use \yii\db\ActiveRecord;
use yii\db;
class Grade extends ActiveRecord
{
    public static function tableName()
            {
        return'student_src';
            }
    public function getGrade()
            {
        $connection = \Yii::$app->db;
        $sql =<<<EOF
                    SELECT grade,count(*) as counter
                    FROM student_src
                    GROUP BY grade
EOF;
        $command = $connection->createCommand($sql);
        $results = $command->queryAll(\PDO::FETCH_BOTH);
        return$results;
            }
    public function getjson($result)
             {$rows = array();
              foreach ($result as $row)
              {
                  $grade = $row[0];
                  $count =intval($row[1]);
                  $rows[] = array($grade,$count);
              }
              $json = json_encode($rows);
              return$json;
             }
}