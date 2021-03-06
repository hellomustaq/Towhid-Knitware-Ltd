<?php

namespace App;

use App\Image;
use App\MotherCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $guarded = [];
	
    public function motherCategory(){
    	return $this->belongsTo(MotherCategory::class);
    }

    public function images(){
    	return $this->hasMany(Image::class);
    }
}
