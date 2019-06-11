<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
    //
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable = ['photo_id', 'name', 'description', 'price', 'category_id', 'brand_id', 'user_id', 'created_at', 'updated_at'];

    public function brand(){
    	return $this->belongsTo('App\Brand');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function photo(){
    	return $this->belongsTo('App\Photo');
    }
}
