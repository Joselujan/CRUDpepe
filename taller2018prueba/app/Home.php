<?php

namespace joselujan;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{


    protected $fillable = [
        'id','city','lat','lng'

    ];
}
