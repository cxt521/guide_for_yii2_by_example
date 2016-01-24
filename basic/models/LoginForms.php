<?php
namespace app\models;
use yii\base\Model;
class LoginForms extends Model
{
   public $name;
   public $password;
   public function rules()
   {
   [['name','password'],'required'],	
}
}
