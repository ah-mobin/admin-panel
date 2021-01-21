<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;
class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected static function boot(){
        parent::boot();

        static::creating(function ($news){
            $news->news_slug = Str::slug(trim($news->news_headline));
        });
    }

    public function publisher(){
        return $this->belongsTo(User::class,'publisher_id');
    }
}
