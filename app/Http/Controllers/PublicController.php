<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Article;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PublicController extends Controller
{
    public function home(){
        $articles = Article::latest()->paginate(16);
        //dd($articles->toArray());
        return view('welcome', compact('articles'));
        //return view('welcome', ['articles' => $articles]);
    }

    public function about(){
        return view('about');
    }




}
