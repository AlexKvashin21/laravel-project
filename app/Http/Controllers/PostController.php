<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Вытягивание поста
    public function index(){
        $post = Post::find();
        dump($post);
    }

    //созадние поста без проверки на совпадение
    public function create(){
        $postsArr = [
            [
                'title' => 'title of the post',
                'content' => 'the best content in the world',
                'image' => 'image.png',
                'likes' => 10,
            ],
            [
                'title' => 'title of the post2',
                'content' => 'the best content in the world2',
                'image' => 'image.png2',
                'likes' => 15,
            ],
        ];

        foreach ($postsArr as $item){
            Post::create($item);
        }


        dd('created');
    }

//изменение поста без проверки на совпадение
    public function update(){
        $post = Post::find(4);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 100,
        ]);
        dd('updated');
    }

    //удаление поста
    public function delete(){
        $post = Post::find(6);
        $post->delete();
        dd('deleted');
    }

    // создание поста с проверкой на совпадение
    public function firstOrCreate(){
        $anotherPost = [
            'title' => 'new updated',
            'content' => 'new 3232updated',
            'image' => 'new updated344343',
            'likes' => 10032,
        ];


        $post = Post::firstOrCreate([
            'title' => 'updated'
        ], $anotherPost);
        dd('finished');
    }

    //обновление поста с проверкой на совпадение
    public function updateOrCreate(){
        $anotherPost = [
            'title' => 'new updatedr432432',
            'content' => 'new 3232updated',
            'image' => 'new updated344343',
            'likes' => 10032,
        ];

        $post = Post::updateOrCreate([
            'title' => 'new updated'
        ], $anotherPost);

        dd('finished and updated');
    }


}
