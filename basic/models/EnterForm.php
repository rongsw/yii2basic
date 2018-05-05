<?php
/**
 * Created by PhpStorm.
 * User: rongshuwu
 * Date: 2018/5/5
 * Time: 9:55
 */
namespace  app\models;

use Yii;
use yii\base\model;

class EnterForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
          [['name', 'email'], 'required'],
          ['email', 'email'],
        ];

    }
}