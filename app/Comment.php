<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    public function user()
    {
    	return $this->belongsTo('App\User', 'idUser', 'id');
    }

    public function blog()
    {
    	return $this->belongsTo('App\Blog', 'idBlog', 'id');
    }
}
