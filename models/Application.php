<?php

namespace app\models;

use yii\db\ActiveRecord;

class Application extends ActiveRecord 
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

    public function rules() 
    { 
        return [ 
            ['first_name', 'required', 'message' => 'A Firstname is required'],
            ['first_name', 'string', 'max' => 255], 

            ['last_name', 'string', 'message' => 'A Lastname has to be a string'],
            ['last_name', 'required', 'message' => 'A Lastname is required'],

            ['date_of_birth', 'required', 'message' => 'A Date of Birth is required'],
            ['date_of_birth', 'date', 'message' => 'A Date of Birth has to be a date format'],

            ['description', 'string'],
            ['income', 'number', 'message' => 'Please enter the correct income format'],
            ['number_of_dependants', 'number', 'message' => 'Number of dependants must be an Integer value'],
        ];
    }
}
