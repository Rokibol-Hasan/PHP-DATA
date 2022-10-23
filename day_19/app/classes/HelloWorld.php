<?php

namespace App\classes;

class HelloWorld
{
    public $data = [];
    public function __construct()
    {   
        // echo "I am On";
    }
    
    public function index(){
        header("Location: action.php?page=home");
    }

    public function totalStudent(){
        $this->data = [
            0 => [
                'id' => 1,
                'name' => 'Shuvo',
                'email' => 'shuvo@gmail.com',
                'mobile' => '+88012455782',
            ],
            1 => [
                'id' => 2,
                'name' => 'Rahim',
                'email' => 'rahim@gmail.com',
                'mobile' => '+880187544',
            ],
            2 => [
                'id' => 3,
                'name' => 'Karim',
                'email' => 'karim@gmail.com',
                'mobile' => '+65644636456',
            ]
        ];
        return $this->data;
    }

}

