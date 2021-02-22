<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{


    //将migration里的json类型的数据转换为数组存入数据库
    protected $casts = [
        'topping' => 'array'

    ];
}
