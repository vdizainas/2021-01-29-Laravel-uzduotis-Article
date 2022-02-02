<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function articleArticleImage() {
        return $this->belongsTo(ArticleImage::class, 'image_id', 'id');
    }

    public function articleCategoryArticles() {
        return $this->belongsTo(ArticleCategory::class, 'category_id', 'id');
    }
}
