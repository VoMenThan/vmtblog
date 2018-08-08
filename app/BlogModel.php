<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = "Blog";

    public function CategoryBlog()
    {
    	return $this->belongsTo('App\CategoryBlog', 'idCategoryBlog', 'id');
    }
    public function Comment()
    {
    	return $this->hasMany('App\CommnetModel', 'idBlog', 'id');
    }
}
