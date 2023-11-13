<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;



class BlogController extends Controller
{
    public function BlogList()
    {
        $article = Article::orderby('id', 'DESC')->where('status', 1)->take(6)->get();

        return view('site.blog.list')
            ->with('articles', $article);
    }
    public function BlogDetail($id)
    {
        $arti = Article::where('id', $id)->first();
        $comments = Comment::where('commentable_type','App\Models\Article')->where('commentable_id',$id)->where('status', 1)->get();
        $articles = Article::where('id', '<>', $arti->id)->get();
        return view('site.blog.detail')
            ->with('article', $arti)
            ->with('comments', $comments)
            ->with('art', $articles);
    }
}
