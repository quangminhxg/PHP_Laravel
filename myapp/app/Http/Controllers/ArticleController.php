<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if($id) {
            $lstArticle = Article::paginate(10);
            return view('index', ['article' => Article::findOrFail($id),'lstArticle' => $lstArticle]);
        }else {
            $article = Article::latest('id')->first();
            return view('index', ['article' => $article]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $article = new Article();
        $article->title = $request->get('title');
        $article->subTitle = $request->get('subTitle');
        $article->description = $request->get('description');
        $article->content = $request->get('content');
        $article->save();
        $articleLatest = Article::latest('id')->first();
        $lstArticle = Article::paginate(10);
        return View("index",  ['article' => $articleLatest,'lstArticle' => $lstArticle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        $article = Article::find($id);
        $article->title = $request->get('title') ? $request->get("title") : $article->title;
        $article->subTitle = $request->get('subTitle') ? $request->get('subTitle') : $article->subTitle;
        $article->description = $request->get('description') ? $request->get('description') : $article->description;
        $article->content = $request->get('content') ? $request->get('content') : $article->content;
        $article->save();
        $lstArticle = Article::paginate(10);
        return View("index",  ['article' => $article,'lstArticle' => $lstArticle]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        $lstArticle = Article::paginate(10);
        return view('index', ['article' => $lstArticle[0],'lstArticle' => $lstArticle]);
    }
}
