<?php

namespace joselujan;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //

   // use SoftDeletes;
    protected $fillable = [
        'id_car','plate_number','color','car_reg_date','car_type','model','deleted_at'

    ];
    protected $date = ['deleted_at'];
    protected $primaryKey='id_car';
}


