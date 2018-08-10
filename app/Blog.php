<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog";

    public function category()
    {
    	return $this->belongsTo('App\CategoryBlog', 'idCategoryBlog', 'id');
    }
    public function comment()
    {
    	return $this->hasMany('App\Comment', 'idBlog', 'id');
    }
}
