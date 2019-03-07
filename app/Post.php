<?php

namespace App;

use App\Transformers\PostTransformer;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $transformer = PostTransformer::class;
    protected $fillable = [
        "title",
        "description",
        "user_id"
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
