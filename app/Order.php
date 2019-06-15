<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'order';
    protected $fillable = ['token', 'user_id', 'created_at', 'updated_at'];
}
