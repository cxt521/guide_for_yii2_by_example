<?php
 
namespace app\models;
 
use Yii;
use yii\base\Model;
 
/*
  using DAO visit database
  DSN setting in config/db.php 
  use the db handle 
  $connection = \Yii::$app->db;
*/
 
class Statistics extends Model
{
	/**
		statistics the class man/woman counter
	*/
	public function getGender()
	{
		$connection = \Yii::$app->db;
		$sql=<<<EOF
			SELECT  gender,count(*) as counter
			FROM selectclass
			GROUP BY gender
EOF;
		$command = $connection->createCommand($sql);
		$results = $command->queryAll();
 
		return $results;
	}
}