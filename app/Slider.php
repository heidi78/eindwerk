<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends BaseModel
{
    //
    protected $primaryKey = 'id';
    protected $table = 'sliders';
    protected $fillable = ['photo_id', 'updated_at', 'created_at'];

    public function photo(){
    	return $this->belongsTo('App\Photo');
    }
}
