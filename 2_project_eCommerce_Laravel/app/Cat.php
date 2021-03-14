<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
	protected $guarded = [];//ввод всех полей в бд


    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
