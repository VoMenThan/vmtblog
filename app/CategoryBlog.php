<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    protected $table = "categoryblog";

    public function blog()
    {
    	return $this->hasMany('App\Blog', 'idCategoryBlog', 'id');
    }
}
