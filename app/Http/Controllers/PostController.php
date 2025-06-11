<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        // Eloquent ORMでIDが一致する投稿を取得
        $post = Post::find($id);

        if (!$post) {
            abort(404, '投稿が見つかりません');
        }

        // ビューに$postを渡す
        return view('posts.show', ['post' => $post]);
    }
}
