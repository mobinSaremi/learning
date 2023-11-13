<?php

use App\Models\Article;
use App\Models\News;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Personal;
use App\Models\ArticleCategory;

$setting_site =Setting::first();
$art = Article::orderBy('id' , 'DESC')->take(3)->get();
$person = Personal::orderBy('id' , 'DESC')->take(3)->get();
$pro = Product::orderby('id', 'DESC')->take(3)->where('status', 1)->get();
$artic = ArticleCategory::orderBy('id', 'DESC')->get();
$neww = News::where('status', 1)->take(6)->get();
$categor = Category::where('parent_id',null)->orderBy('id', 'DESC')->get();


View::share([

'art'=>$art,
'pro'=>$pro,
'person'=>$person,
 'setting_site' =>$setting_site,
 'categor'=>$categor,
 'artic'=>$artic,
 'neww' => $neww,
 
]);

?>