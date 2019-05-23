<?php

namespace App;

use App\MotherCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $guarded = [];
	
    public function motherCategory(){
    	return $this->belongsTo(MotherCategory::class);
    }
}
