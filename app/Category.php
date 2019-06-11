<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel
{
    //
    protected $primaryKey = 'id';
    protected $table = 'categories';
    protected $fillable=['photo_id', 'name'];

    public function photo(){
    	return $this->belongsTo('App\Photo');
    }
}
