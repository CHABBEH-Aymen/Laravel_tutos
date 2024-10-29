<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPosts()
    {
        $category = Category::find(1);
        $posts = $category->posts;
    }
    public function addPost()
    {
        $category = Category::find(1);
        $post = new Post([
            'title' => 'Mon premier post',
            'body' => 'Contenu du post',
            'category_id' => $category->id,
        ]);
        $post->save();
    }
}
