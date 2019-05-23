<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class MotherCategory extends Model
{
    protected $guarded=[];

    public function categories(){
     	return $this->hasMany(Category::class,'mother_category_id');
     }
}
