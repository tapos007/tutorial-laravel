<?php

namespace App\Transformers;

use App\Post;
use League\Fractal\TransformerAbstract;


class PostTransformer extends TransformerAbstract
{



    public function transform(Post $product)
    {

        //$data = $product->toArray();
        $information = [
            //
            'id' => (string)$product->id,
            'post_title' => (string)$product->title,
            'description' => (string)$product->description,
            'created_at' => (string)$product->created_at,
            'updated_at' => (string)$product->updated_at,

        ];

        return $information;
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'id' => 'id',
            'title' => 'post_title',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }


}
