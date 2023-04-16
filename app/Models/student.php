<?php

namespace App\Models;

class student {
    public static function all(){
        
            $student = [
                [
                   'id' => 1,
                   'fname'=> 'Salma',
                   'lname'=> 'Serag',
                   'city'=> 'Cairo',
                   'mobile_phone'=> '+201145896265',
                   'email' => 'salma@gmail.com',
                   'numof_subject' =>6
                ],
                [
                   'id' => 2,
                   'fname'=> 'Habiba',
                   'lname'=> 'Hamdy',
                   'city'=> 'Giza',
                   'mobile_phone'=> '+201158954759',
                   'email' => 'habiba@gmail.com',
                   'numof_subject' =>5 
                ],
                [
                   'id' => 3,
                   'fname'=> 'Hanan',
                   'lname'=> 'Mahmoud',
                   'city'=> 'Aswan',
                   'mobile_phone'=> '+201185692482',
                   'email' => 'hanan@gmail.com',
                   'numof_subject' =>7 
                ],
                [
                   'id' => 4,
                   'fname'=> 'Nagham',
                   'lname'=> 'Hassan',
                   'city'=> 'Qalubia',
                   'mobile_phone'=> '+201114829299',
                   'email' => 'nagham@gmail.com',
                   'numof_subject' =>4 
                ],
                [
                   'id' => 5,
                   'fname'=> 'Mariam',
                   'lname'=> 'Tamer',
                   'city'=> 'Mansoura' ,
                   'mobile_phone'=> '+2011782592786',
                   'email' => 'mariam@gmail.com',
                   'numof_subject' =>5
                ],
                [
                   'id' => 6,
                   'fname'=> 'Mohammed',
                   'lname'=> 'Gamal',
                   'city'=> 'Alex' ,
                   'mobile_phone'=> '+201148266861',
                   'email' => 'mohammed@gmail.com',
                   'numof_subject' =>8
                ],
                [
                   'id' => 7,
                   'fname'=> 'Ahmad',
                   'lname'=> 'Batanouni',
                   'city'=> 'Monufia' ,
                   'mobile_phone'=> '+2011359871684',
                   'email' => 'batanouni@gmail.com',
                   'numof_subject' =>3
                ],
                [
                   'id' => 8,
                   'fname'=> 'Zain',
                   'lname'=> 'Akram',
                   'city'=> 'Tanta' ,
                   'mobile_phone'=> '+2011359871684',
                   'email' => 'zain@gmail.com',
                   'numof_subject' =>6
                ]
            ];
         return $student;
    }


    public static function find($id){
      
        $student = self::all();  //self = this

        foreach($student as $item){
            if ($id == $item['id']){
                return $item ;
            }
        }
    }
}