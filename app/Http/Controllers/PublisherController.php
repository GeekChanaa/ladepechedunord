<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use Auth;
use App\User;

class PublisherController extends Controller
{

    // List of articles :
    protected $list_articles;

    // Publisher Constructer
    public function __construct(){
      $this->list_articles = article::all();
    }

    // Index View For Publisher
    public function index(){

      return view('publisher.index');
    }

    // Articles View
    public function articles(){
      $data=[
        'list_articles' => $this->list_articles,
      ];
      return view('publisher.articles')->with($data);
    }

    public function postarticle(Request $request){
      $article = new article;
      $article->title = $request->title;
      $article->publisher = $request->publisher;
      $article->content = $request->content;
      $article->user_id = Auth::User()->id;
      $article->save();
      return redirect()->back();
    }

    // Add Article View
    public function addarticle(){
      return view('publisher.addarticle');
    }
}
