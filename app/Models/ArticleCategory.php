<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
   
    protected $fillable = [
        'title', 'image'
    ];
    public function childs()
    {
        return $this->hasMany(Article::class, 'article_category_id', 'id');
    }
    public function parent(){
        return $this->belongsTo(Article::class ,'article_category_id');
    }
    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
