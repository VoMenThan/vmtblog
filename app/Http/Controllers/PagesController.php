<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryBlog;
use App\Blog;

class PagesController extends Controller
{
	public function getHomePage()
	{
    	$highlights = Blog::where('Highlights', 1)->take(6)->get();
    	//var_dump($highlights);
    	return view('pages.home', compact('highlights'));
	}

    public function getBlogDetail($name, $id)
    {
    	$category = CategoryBlog::all();
    	$blog = Blog::find($id);
    	$popular = Blog::where('Highlights', 1)->take(3)->get();
    	// var_dump($blog);
    	return view('pages.detail', ['category'=>$category, 'blog'=>$blog, 'popular' => $popular]);
    }
}
