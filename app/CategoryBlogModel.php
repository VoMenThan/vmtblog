<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryBlogModel extends Model
{
    protected $table = "CategoryBlog";

    public function Blog()
    {
    	return $this->hasMany('App\BlogModel', 'idCategoryBlog', 'id');
    }
}
