<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\article;
use App\User;

class AdminController extends Controller
{
    //list of users
    protected $list_users;

    // list of articles
    protected $list_articles;

    public function __construct(){
      $this->list_users = User::all();
      $this->list_articles = article::all();
    }

    // Index For Admin Dashboard
    public function index(){
      return view('admin.dashboard');
    }

    // Users Dashboard
    public function users(){
      $data = [
        'list_users' => $this->list_users,
      ];
      return view('admin.users')->with($data);
    }

    // Articles Dashboard
    public function articles(){
      $data = [
        'list_articles', $this->list_articles,
      ];
      return view('admin.articles')->with($data);
    }
}
