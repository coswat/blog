<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Str;

class ArticleController extends Controller
{
    /* getting all post from database
    and sending to view*/
    public function index()
    {
        $articles = Article::paginate(5);

        return view('article', ['articles' => $articles]);
    }

    /*selecting single post from slug and sending to view*/
    public function getArticle($slug)
    {
        $post = Article::where('slug', $slug)->first();
        /*changing markdown to html*/
        $content = Str::markdown($post->content);

        return view('post', ['post' => $post, 'content' => $content]);
    }

    /* posts selecting by slug */
    public function tagSearch($tag)
    {
        $articles = Article::where('tag', $tag)->paginate(5);

        return view('article', ['articles' => $articles]);
    }
}
