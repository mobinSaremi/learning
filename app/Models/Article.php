<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'articles';
    protected $fillable = [
        'title', 'image', 'description', 'status','writer','title_seo','description_seo', 'articles_category_id'
    ];
    public function articlecategory(){
        return $this->belongsTo(Article::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
