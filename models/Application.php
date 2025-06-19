<?php

namespace app\models;

class Application extends \yii\base\BaseObject 
{
    public $id;
    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $description;
    public $income;
    public $number_of_dependants;
    public $created_at;
    public $updated_at;
}
