<?php

namespace App\Models;


class Jop
{
    public static function all(){
        return [
            ['title' => 'Software Enginering' , 'salary' => '$1000'],
            ['title' => 'Graphic Deisgner' , 'salary' => '$2000']
        ];
    }
}
