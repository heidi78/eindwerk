<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends BaseModel
{
    //
    protected $primaryKey = 'id';
    protected $table = 'order';
    protected $fillable = ['token', 'user_id', 'created_at', 'updated_at'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
