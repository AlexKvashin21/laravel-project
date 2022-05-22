<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;


class AdminShowController extends Controller
{
    //Вытягивание поста
    public function __invoke(Post $post, Category $category)
    {
        return view('admin.post.show', compact('post', 'category'));
    }
}
