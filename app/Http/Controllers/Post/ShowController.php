<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;


class ShowController extends Controller
{
    //Вытягивание поста
    public function __invoke(Post $post, Category $category)
    {
        return view('post.show', compact('post', 'category'));
    }
}
