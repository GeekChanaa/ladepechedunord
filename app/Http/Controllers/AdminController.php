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

    // list of publishers

    protected $list_publishers;

    // number of users

    protected $number_users;

    // number of publishers

    protected $number_publishers;

    // number of articles

    protected $number_articles;

    // number of users last day

    protected $nbr_users_last_day;

    // number of users last week

    protected $nbr_users_last_week;

    // number of users last month

    protected $nbr_users_last_month;

    // number of users last year

    protected $nbr_users_last_year;

    // number of users last 2nd month

    protected $nbr_users_last_2nd_month;

    // number of users last 3rd month

    protected $nbr_users_last_3rd_month;

    // number of users last 4th month

    protected $nbr_users_last_4th_month;

    // number of users last 5th month

    protected $nbr_users_last_5th_month;

    // number of users last 6th month

    protected $nbr_users_last_6th_month;

    // number of users last 7th month

    protected $nbr_users_last_7th_month;

    // number of users last 8th month

    protected $nbr_users_last_8th_month;

    // number of users last 9th month

    protected $nbr_users_last_9th_month;

    // number of users last 10th month

    protected $nbr_users_last_10th_month;

    // number of users last 11th month

    protected $nbr_users_last_11th_month;

    // number of users last 12th month

    protected $nbr_users_last_12th_month;

    // number of publishers

    protected $nbr_publishers;

    // number of publishers last day

    protected $nbr_publishers_last_day;

    // number of publishers last week

    protected $nbr_publishers_last_week;

    // number of publishers last month

    protected $nbr_publishers_last_month;

    // number of publishers last year

    protected $nbr_publishers_last_year;

    // number of publishers last 2nd month

    protected $nbr_publishers_last_2nd_month;

    // number of publishers last 3rd month

    protected $nbr_publishers_last_3rd_month;

    // number of publishers last 4th month

    protected $nbr_publishers_last_4th_month;

    // number of publishers last 5th month

    protected $nbr_publishers_last_5th_month;

    // number of publishers last 6th month

    protected $nbr_publishers_last_6th_month;

    // number of publishers last 7th month

    protected $nbr_publishers_last_7th_month;

    // number of publishers last 8th month

    protected $nbr_publishers_last_8th_month;

    // number of publishers last 9th month

    protected $nbr_publishers_last_9th_month;

    // number of publishers last 10th month

    protected $nbr_publishers_last_10th_month;

    // number of publishers last 11th month

    protected $nbr_publishers_last_11th_month;

    // number of publishers last 12th month

    protected $nbr_publishers_last_12th_month;

    // number of articles

    protected $nbr_articles;

    // number of articles last day

    protected $nbr_articles_last_day;

    // number of articles last week

    protected $nbr_articles_last_week;

    // number of articles last month

    protected $nbr_articles_last_month;

    // number of articles last year

    protected $nbr_articles_last_year;

    // number of articles last 2nd month

    protected $nbr_articles_last_2nd_month;

    // number of articles last 3rd month

    protected $nbr_articles_last_3rd_month;

    // number of articles last 4th month

    protected $nbr_articles_last_4th_month;

    // number of articles last 5th month

    protected $nbr_articles_last_5th_month;

    // number of articles last 6th month

    protected $nbr_articles_last_6th_month;

    // number of articles last 7th month

    protected $nbr_articles_last_7th_month;

    // number of articles last 8th month

    protected $nbr_articles_last_8th_month;

    // number of articles last 9th month

    protected $nbr_articles_last_9th_month;

    // number of articles last 10th month

    protected $nbr_articles_last_10th_month;

    // number of articles last 11th month

    protected $nbr_articles_last_11th_month;

    // number of articles last 12th month

    protected $nbr_articles_last_12th_month;


    // Constructor of the class :

    public function __construct(){
  $this->list_users = User::all();
  $this->list_articles = article::all();
  $this->list_publishers = User::all()->where('rank','=','publisher');
  $this->number_users = User::all()->count() ;
  $this->nbr_users_last_day =User::all()->where('created_at','<','DATEADD(dd, -1, GETDATE())')->count() ;
  $this->nbr_users_last_week =User::all()->where('created_at','<','DATEADD(dd, -7, GETDATE())')->count() ;
  $this->nbr_users_last_month = User::all()->where('created_at','<','DATEADD(mm, -1, GETDATE())')->count();
  $this->nbr_users_last_year = User::all()->where('created_at','<','DATEADD(yy, -1, GETDATE())')->count();
  $this->nbr_users_last_2nd_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -1 month) and created_at > DATE_ADD(NOW(),Interval -2 month)')->count() ;
  $this->nbr_users_last_3rd_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -2 month) and created_at > DATE_ADD(NOW(),Interval -3 month)')->count() ;
  $this->nbr_users_last_4th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -3 month) and created_at > DATE_ADD(NOW(),Interval -4 month)')->count() ;
  $this->nbr_users_last_5th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -4 month) and created_at > DATE_ADD(NOW(),Interval -5 month)')->count() ;
  $this->nbr_users_last_6th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -5 month) and created_at > DATE_ADD(NOW(),Interval -6 month)')->count() ;
  $this->nbr_users_last_7th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -6 month) and created_at > DATE_ADD(NOW(),Interval -7 month)')->count() ;
  $this->nbr_users_last_8th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -7 month) and created_at > DATE_ADD(NOW(),Interval -8 month)')->count() ;
  $this->nbr_users_last_9th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -8 month) and created_at > DATE_ADD(NOW(),Interval -9 month)')->count() ;
  $this->nbr_users_last_10th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -9 month) and created_at > DATE_ADD(NOW(),Interval -10 month)')->count() ;
  $this->nbr_users_last_11th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -10 month) and created_at > DATE_ADD(NOW(),Interval -11 month)')->count() ;
  $this->nbr_users_last_12th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -11 month) and created_at > DATE_ADD(NOW(),Interval -12 month)')->count() ;
  $this->nbr_publishers = User::all()->where('rank','=','publisher');
  $this->nbr_publishers_last_day = User::all()->where('rank','=','publisher')->where('created_at','<','DATEADD(dd, -1, GETDATE())')->count() ;
  $this->nbr_publishers_last_week = User::all()->where('rank','=','publisher')->where('created_at','<','DATEADD(dd, -7, GETDATE())')->count();
  $this->nbr_publishers_last_month =User::all()->where('rank','=','publisher')->where('created_at','<','DATEADD(mm, -1, GETDATE())')->count() ;
  $this->nbr_publishers_last_year = User::all()->where('rank','=','publisher')->where('created_at','<','DATEADD(yy, -1, GETDATE())')->count();
  $this->nbr_publishers_last_2nd_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -1 month) and created_at > DATE_ADD(NOW(),Interval -2 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_publishers_last_3rd_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -2 month) and created_at > DATE_ADD(NOW(),Interval -3 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_publishers_last_4th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -3 month) and created_at > DATE_ADD(NOW(),Interval -4 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_publishers_last_5th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -4 month) and created_at > DATE_ADD(NOW(),Interval -5 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_publishers_last_6th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -5 month) and created_at > DATE_ADD(NOW(),Interval -6 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_publishers_last_7th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -6 month) and created_at > DATE_ADD(NOW(),Interval -7 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_publishers_last_8th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -7 month) and created_at > DATE_ADD(NOW(),Interval -8 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_publishers_last_9th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -8 month) and created_at > DATE_ADD(NOW(),Interval -9 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_publishers_last_10th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -9 month) and created_at > DATE_ADD(NOW(),Interval -10 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_publishers_last_11th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -10 month) and created_at > DATE_ADD(NOW(),Interval -11 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_publishers_last_12th_month =User::whereRaw('created_at < DATE_ADD(NOW(),Interval -11 month) and created_at > DATE_ADD(NOW(),Interval -12 month)')->where('rank','=','publisher')->count() ;
  $this->nbr_articles = article::all()->count() ;
  $this->nbr_articles_last_day =article::all()->where('rank','=','publisher')->where('created_at','<','DATEADD(dd, -1, GETDATE())')->count() ;
  $this->nbr_articles_last_week =article::all()->where('rank','=','publisher')->where('created_at','<','DATEADD(dd, -7, GETDATE())')->count() ;
  $this->nbr_articles_last_month =article::all()->where('rank','=','publisher')->where('created_at','<','DATEADD(mm, -1, GETDATE())')->count() ;
  $this->nbr_articles_last_year =article::all()->where('rank','=','publisher')->where('created_at','<','DATEADD(yy, -1, GETDATE())')->count() ;
  $this->nbr_articles_last_2nd_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -1 month) and created_at > DATE_ADD(NOW(),Interval -2 month)')->count() ;
  $this->nbr_articles_last_3rd_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -2 month) and created_at > DATE_ADD(NOW(),Interval -3 month)')->count() ;
  $this->nbr_articles_last_4th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -3 month) and created_at > DATE_ADD(NOW(),Interval -4 month)')->count() ;
  $this->nbr_articles_last_5th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -4 month) and created_at > DATE_ADD(NOW(),Interval -5 month)')->count() ;
  $this->nbr_articles_last_6th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -5 month) and created_at > DATE_ADD(NOW(),Interval -6 month)')->count() ;
  $this->nbr_articles_last_7th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -6 month) and created_at > DATE_ADD(NOW(),Interval -7 month)')->count() ;
  $this->nbr_articles_last_8th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -7 month) and created_at > DATE_ADD(NOW(),Interval -8 month)')->count() ;
  $this->nbr_articles_last_9th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -8 month) and created_at > DATE_ADD(NOW(),Interval -9 month)')->count() ;
  $this->nbr_articles_last_10th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -9 month) and created_at > DATE_ADD(NOW(),Interval -10 month)')->count() ;
  $this->nbr_articles_last_11th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -10 month) and created_at > DATE_ADD(NOW(),Interval -11 month)')->count() ;
  $this->nbr_articles_last_12th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -11 month) and created_at > DATE_ADD(NOW(),Interval -12 month)')->count() ;
    }







    // FUNCTIONS


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
        'list_articles'=> $this->list_articles,
      ];
      return view('admin.articles')->with($data);
    }

    // Modify a User :
    public function modifyuser(Request $request){
      $user = User::all()->where('id','=',$request->id)->first();
      $user->name = $request->name;
      $user->rank = $request->rank;
      $user->email = $request->email;
      $user->save();
      return redirect()->back();
    }

    // Delete a User :
    public function deleteuser(Request $request){
      $user = User::all()->where('id','=',$request->id)->first();
      $user->delete();
      return redirect()->back();
    }

    // Delete an article
    public function deletearticle(Request $request){
      $article = article::all()->where('id','=',$request->id)->first();
      $article->delete();
      return redirect()->back();
    }

    // Statistics
    public function statistics(){
      $data = [
        'list_users' => $this->list_users,
      'list_articles' => $this->list_articles,
      'list_publishers' => $this->list_publishers,
      'number_users' => $this->number_users,
      'nbr_users_last_day' => $this->nbr_users_last_day,
      'nbr_users_last_week' => $this->nbr_users_last_week,
      'nbr_users_last_month' => $this->nbr_users_last_month,
      'nbr_users_last_year' => $this->nbr_users_last_year,
      'nbr_users_last_2nd_month' => $this->nbr_users_last_2nd_month,
      'nbr_users_last_3rd_month' => $this->nbr_users_last_3rd_month,
      'nbr_users_last_4th_month' => $this->nbr_users_last_4th_month,
      'nbr_users_last_5th_month' => $this->nbr_users_last_5th_month,
      'nbr_users_last_6th_month' => $this->nbr_users_last_6th_month,
      'nbr_users_last_7th_month' => $this->nbr_users_last_7th_month,
      'nbr_users_last_8th_month' => $this->nbr_users_last_8th_month,
      'nbr_users_last_9th_month' => $this->nbr_users_last_9th_month,
      'nbr_users_last_10th_month' => $this->nbr_users_last_10th_month,
      'nbr_users_last_11th_month' => $this->nbr_users_last_11th_month,
      'nbr_users_last_12th_month' => $this->nbr_users_last_12th_month,
      'nbr_publishers' => $this->nbr_publishers,
      'nbr_publishers_last_day' => $this->nbr_publishers_last_day,
      'nbr_publishers_last_week' => $this->nbr_publishers_last_week,
      'nbr_publishers_last_month' => $this->nbr_publishers_last_month,
      'nbr_publishers_last_year' => $this->nbr_publishers_last_year,
      'nbr_publishers_last_2nd_month' => $this->nbr_publishers_last_2nd_month,
      'nbr_publishers_last_3rd_month' => $this->nbr_publishers_last_3rd_month,
      'nbr_publishers_last_4th_month' => $this->nbr_publishers_last_4th_month,
      'nbr_publishers_last_5th_month' => $this->nbr_publishers_last_5th_month,
      'nbr_publishers_last_6th_month' => $this->nbr_publishers_last_6th_month,
      'nbr_publishers_last_7th_month' => $this->nbr_publishers_last_7th_month,
      'nbr_publishers_last_8th_month' => $this->nbr_publishers_last_8th_month,
      'nbr_publishers_last_9th_month' => $this->nbr_publishers_last_9th_month,
      'nbr_publishers_last_10th_month' => $this->nbr_publishers_last_10th_month,
      'nbr_publishers_last_11th_month' => $this->nbr_publishers_last_11th_month,
      'nbr_publishers_last_12th_month' => $this->nbr_publishers_last_12th_month,
      'nbr_articles' => $this->nbr_articles,
      'nbr_articles_last_day' => $this->nbr_articles_last_day,
      'nbr_articles_last_week' => $this->nbr_articles_last_week,
      'nbr_articles_last_month' => $this->nbr_articles_last_month,
      'nbr_articles_last_year' => $this->nbr_articles_last_year,
      'nbr_articles_last_2nd_month' => $this->nbr_articles_last_2nd_month,
      'nbr_articles_last_3rd_month' => $this->nbr_articles_last_3rd_month,
      'nbr_articles_last_4th_month' => $this->nbr_articles_last_4th_month,
      'nbr_articles_last_5th_month' => $this->nbr_articles_last_5th_month,
      'nbr_articles_last_6th_month' => $this->nbr_articles_last_6th_month,
      'nbr_articles_last_7th_month' => $this->nbr_articles_last_7th_month,
      'nbr_articles_last_8th_month' => $this->nbr_articles_last_8th_month,
      'nbr_articles_last_9th_month' => $this->nbr_articles_last_9th_month,
      'nbr_articles_last_10th_month' => $this->nbr_articles_last_10th_month,
      'nbr_articles_last_11th_month' => $this->nbr_articles_last_11th_month,
      'nbr_articles_last_12th_month' => $this->nbr_articles_last_12th_month,
      ];
      return view('admin.statistics')->with($data);
    }
}
