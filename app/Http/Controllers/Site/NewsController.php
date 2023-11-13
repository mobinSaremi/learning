<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Comment;


class NewsController extends Controller
{
    public function NewsList()
    {
        $news = News::orderby('id', 'DESC')->where('status', 1)->take(6)->get();

        return view('site.news.list')
            ->with('new', $news);
    }
    public function NewsDetail($id)
    {
        $new = News::findOrFail($id);
        $comments = Comment::where('commentable_type','App\Models\News')->where('commentable_id', $id)->where('status', 1)->get();
        $news = News::where('id', '<>', $new->id)->get();
        return view('site.news.detail')
            ->with('news', $new)
            ->with('comments', $comments)
            ->with('neww', $news);
    }
}
