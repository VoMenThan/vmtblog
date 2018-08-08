<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryBlogModel;
use App\BlogModel;

class PagesController extends Controller
{
    public function getDetail()
    {
    	$category = CategoryBlogModel::all();
    	return view('pages.detail', ['category'=>$category]);
    }
}
