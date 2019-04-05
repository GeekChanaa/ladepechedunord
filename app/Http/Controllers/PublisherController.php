<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use Auth;
use App\User;

class PublisherController extends Controller
{
  ################ VARIABLES #################

  // List of articles :

  protected $list_articles;

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

  // List of economic articles

  protected $list_economic_articles;

  // number of articles

  protected $nbr_economic_articles;

  // number of articles last day

  protected $nbr_economic_articles_last_day;

  // number of articles last week

  protected $nbr_economic_articles_last_week;

  // number of articles last month

  protected $nbr_economic_articles_last_month;

  // number of articles last year

  protected $nbr_economic_articles_last_year;

  // number of articles last 2nd month

  protected $nbr_economic_articles_last_2nd_month;

  // number of articles last 3rd month

  protected $nbr_economic_articles_last_3rd_month;

  // number of articles last 4th month

  protected $nbr_economic_articles_last_4th_month;

  // number of articles last 5th month

  protected $nbr_economic_articles_last_5th_month;

  // number of articles last 6th month

  protected $nbr_economic_articles_last_6th_month;

  // number of articles last 7th month

  protected $nbr_economic_articles_last_7th_month;

  // number of articles last 8th month

  protected $nbr_economic_articles_last_8th_month;

  // number of articles last 9th month

  protected $nbr_economic_articles_last_9th_month;

  // number of articles last 10th month

  protected $nbr_economic_articles_last_10th_month;

  // number of articles last 11th month

  protected $nbr_economic_articles_last_11th_month;

  // number of articles last 12th month

  protected $nbr_economic_articles_last_12th_month;

  // list of tourism articles

  protected $list_tourism_articles;

  // number  tourismof articles

  protected $nbr_tourism_articles;

  // number of tourism articles last day

  protected $nbr_tourism_articles_last_day;

  // number of tourism articles last week

  protected $nbr_tourism_articles_last_week;

  // number of tourism articles last month

  protected $nbr_tourism_articles_last_month;

  // number of tourism articles last year

  protected $nbr_tourism_articles_last_year;

  // number of tourism articles last 2nd month

  protected $nbr_tourism_articles_last_2nd_month;

  // number of tourism articles last 3rd month

  protected $nbr_tourism_articles_last_3rd_month;

  // number of tourism articles last 4th month

  protected $nbr_tourism_articles_last_4th_month;

  // number of tourism articles last 5th month

  protected $nbr_tourism_articles_last_5th_month;

  // number of tourism articles last 6th month

  protected $nbr_tourism_articles_last_6th_month;

  // number of tourism articles last 7th month

  protected $nbr_tourism_articles_last_7th_month;

  // number of tourism articles last 8th month

  protected $nbr_tourism_articles_last_8th_month;

  // number of tourism articles last 9th month

  protected $nbr_tourism_articles_last_9th_month;

  // number of tourism articles last 10th month

  protected $nbr_tourism_articles_last_10th_month;

  // number of tourism articles last 11th month

  protected $nbr_tourism_articles_last_11th_month;

  // number of tourism articles last 12th month

  protected $nbr_tourism_articles_last_12th_month;

  // list of society articles

  protected $list_society_articles;

  // number of articles

  protected $nbr_society_articles;

  // number of articles last day

  protected $nbr_society_articles_last_day;

  // number of articles last week

  protected $nbr_society_articles_last_week;

  // number of articles last month

  protected $nbr_society_articles_last_month;

  // number of articles last year

  protected $nbr_society_articles_last_year;

  // number of articles last 2nd month

  protected $nbr_society_articles_last_2nd_month;

  // number of articles last 3rd month

  protected $nbr_society_articles_last_3rd_month;

  // number of articles last 4th month

  protected $nbr_society_articles_last_4th_month;

  // number of articles last 5th month

  protected $nbr_society_articles_last_5th_month;

  // number of articles last 6th month

  protected $nbr_society_articles_last_6th_month;

  // number of articles last 7th month

  protected $nbr_society_articles_last_7th_month;

  // number of articles last 8th month

  protected $nbr_society_articles_last_8th_month;

  // number of articles last 9th month

  protected $nbr_society_articles_last_9th_month;

  // number of articles last 10th month

  protected $nbr_society_articles_last_10th_month;

  // number of articles last 11th month

  protected $nbr_society_articles_last_11th_month;

  // number of articles last 12th month

  protected $nbr_society_articles_last_12th_month;

  // list of culture articles

  protected $list_culture_articles;

  // number of articles

  protected $nbr_culture_articles;

  // number of articles last day

  protected $nbr_culture_articles_last_day;

  // number of articles last week

  protected $nbr_culture_articles_last_week;

  // number of articles last month

  protected $nbr_culture_articles_last_month;

  // number of articles last year

  protected $nbr_culture_articles_last_year;

  // number of articles last 2nd month

  protected $nbr_culture_articles_last_2nd_month;

  // number of articles last 3rd month

  protected $nbr_culture_articles_last_3rd_month;

  // number of articles last 4th month

  protected $nbr_culture_articles_last_4th_month;

  // number of articles last 5th month

  protected $nbr_culture_articles_last_5th_month;

  // number of articles last 6th month

  protected $nbr_culture_articles_last_6th_month;

  // number of articles last 7th month

  protected $nbr_culture_articles_last_7th_month;

  // number of articles last 8th month

  protected $nbr_culture_articles_last_8th_month;

  // number of articles last 9th month

  protected $nbr_culture_articles_last_9th_month;

  // number of articles last 10th month

  protected $nbr_culture_articles_last_10th_month;

  // number of articles last 11th month

  protected $nbr_culture_articles_last_11th_month;

  // number of articles last 12th month

  protected $nbr_culture_articles_last_12th_month;

  // list of maritime gazette articles

  protected $list_maritime_gazette_articles;

  // number of articles

  protected $nbr_maritime_gazette_articles;

  // number of articles last day

  protected $nbr_maritime_gazette_articles_last_day;

  // number of articles last week

  protected $nbr_maritime_gazette_articles_last_week;

  // number of articles last month

  protected $nbr_maritime_gazette_articles_last_month;

  // number of articles last year

  protected $nbr_maritime_gazette_articles_last_year;

  // number of articles last 2nd month

  protected $nbr_maritime_gazette_articles_last_2nd_month;

  // number of articles last 3rd month

  protected $nbr_maritime_gazette_articles_last_3rd_month;

  // number of articles last 4th month

  protected $nbr_maritime_gazette_articles_last_4th_month;

  // number of articles last 5th month

  protected $nbr_maritime_gazette_articles_last_5th_month;

  // number of articles last 6th month

  protected $nbr_maritime_gazette_articles_last_6th_month;

  // number of articles last 7th month

  protected $nbr_maritime_gazette_articles_last_7th_month;

  // number of articles last 8th month

  protected $nbr_maritime_gazette_articles_last_8th_month;

  // number of articles last 9th month

  protected $nbr_maritime_gazette_articles_last_9th_month;

  // number of articles last 10th month

  protected $nbr_maritime_gazette_articles_last_10th_month;

  // number of articles last 11th month

  protected $nbr_maritime_gazette_articles_last_11th_month;

  // number of articles last 12th month

  protected $nbr_maritime_gazette_articles_last_12th_month;

  // List of Publishers

  protected $list_publishers;

    // Publisher Constructer
    public function __construct(){
      $this->list_publishers = User::all()->where('rank','=','publisher');
        $this->list_articles = article::all() ;
        $this->nbr_articles = article::all()->count();
        $this->nbr_articles_last_day = article::all()->where('created_at','<','DATEADD(dd, -1, GETDATE())')->count();
        $this->nbr_articles_last_week = article::all()->where('created_at','<','DATEADD(dd, -7, GETDATE())')->count();
        $this->nbr_articles_last_month = article::all()->where('created_at','<','DATEADD(mm, -1, GETDATE())')->count();
        $this->nbr_articles_last_year = article::all()->where('created_at','<','DATEADD(yy, -1, GETDATE())')->count();
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
        $this->list_economic_articles = article::all()->where('category','=','economic');
        $this->nbr_economic_articles = article::all()->where('category','=','economic')->count();
        $this->nbr_economic_articles_last_day =article::all()->where('category','=','economic')->where('created_at','<','DATEADD(dd, -1, GETDATE())')->count() ;
        $this->nbr_economic_articles_last_week =article::all()->where('category','=','economic')->where('created_at','<','DATEADD(dd, -7, GETDATE())')->count() ;
        $this->nbr_economic_articles_last_month = article::all()->where('category','=','economic')->where('created_at','<','DATEADD(mm, -1, GETDATE())')->count();
        $this->nbr_economic_articles_last_year =article::all()->where('category','=','economic')->where('created_at','<','DATEADD(yy, -1, GETDATE())')->count() ;
        $this->nbr_economic_articles_last_2nd_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -1 month) and created_at > DATE_ADD(NOW(),Interval -2 month)')->where('category','=','economic')->count() ;
        $this->nbr_economic_articles_last_3rd_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -2 month) and created_at > DATE_ADD(NOW(),Interval -3 month)')->where('category','=','economic')->count() ;
        $this->nbr_economic_articles_last_4th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -3 month) and created_at > DATE_ADD(NOW(),Interval -4 month)')->where('category','=','economic')->count() ;
        $this->nbr_economic_articles_last_5th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -4 month) and created_at > DATE_ADD(NOW(),Interval -5 month)')->where('category','=','economic')->count() ;
        $this->nbr_economic_articles_last_6th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -5 month) and created_at > DATE_ADD(NOW(),Interval -6 month)')->where('category','=','economic')->count() ;
        $this->nbr_economic_articles_last_7th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -6 month) and created_at > DATE_ADD(NOW(),Interval -7 month)')->where('category','=','economic')->count() ;
        $this->nbr_economic_articles_last_8th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -7 month) and created_at > DATE_ADD(NOW(),Interval -8 month)')->where('category','=','economic')->count() ;
        $this->nbr_economic_articles_last_9th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -8 month) and created_at > DATE_ADD(NOW(),Interval -9 month)')->where('category','=','economic')->count() ;
        $this->nbr_economic_articles_last_10th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -9 month) and created_at > DATE_ADD(NOW(),Interval -10 month)')->where('category','=','economic')->count() ;
        $this->nbr_economic_articles_last_11th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -10 month) and created_at > DATE_ADD(NOW(),Interval -11 month)')->where('category','=','economic')->count() ;
        $this->nbr_economic_articles_last_12th_month =article::whereRaw('created_at < DATE_ADD(NOW(),Interval -11 month) and created_at > DATE_ADD(NOW(),Interval -12 month)')->where('category','=','economic')->count() ;
        $this->list_tourism_articles =article::all()->where('category','=','tourism') ;
        $this->nbr_tourism_articles =article::all()->where('category','=','tourism')->count() ;
        $this->nbr_tourism_articles_last_day =article::all()->where('category','=','tourism')->where('created_at','<','DATEADD(dd, -1, GETDATE())')->count() ;
        $this->nbr_tourism_articles_last_week =article::all()->where('category','=','tourism')->where('created_at','<','DATEADD(dd, -7, GETDATE())')->count() ;
        $this->nbr_tourism_articles_last_month =article::all()->where('category','=','tourism')->where('created_at','<','DATEADD(mm, -1, GETDATE())')->count() ;
        $this->nbr_tourism_articles_last_year =article::all()->where('category','=','tourism')->where('created_at','<','DATEADD(yy, -1, GETDATE())')->count() ;
        $this->nbr_tourism_articles_last_2nd_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -1 month) and created_at > DATE_ADD(NOW(),Interval -2 month)')->where('category','=','tourism')->count();
        $this->nbr_tourism_articles_last_3rd_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -2 month) and created_at > DATE_ADD(NOW(),Interval -3 month)')->where('category','=','tourism')->count();
        $this->nbr_tourism_articles_last_4th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -3 month) and created_at > DATE_ADD(NOW(),Interval -4 month)')->where('category','=','tourism')->count();
        $this->nbr_tourism_articles_last_5th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -4 month) and created_at > DATE_ADD(NOW(),Interval -5 month)')->where('category','=','tourism')->count();
        $this->nbr_tourism_articles_last_6th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -5 month) and created_at > DATE_ADD(NOW(),Interval -6 month)')->where('category','=','tourism')->count();
        $this->nbr_tourism_articles_last_7th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -6 month) and created_at > DATE_ADD(NOW(),Interval -7 month)')->where('category','=','tourism')->count();
        $this->nbr_tourism_articles_last_8th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -7 month) and created_at > DATE_ADD(NOW(),Interval -8 month)')->where('category','=','tourism')->count();
        $this->nbr_tourism_articles_last_9th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -8 month) and created_at > DATE_ADD(NOW(),Interval -9 month)')->where('category','=','tourism')->count();
        $this->nbr_tourism_articles_last_10th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -9 month) and created_at > DATE_ADD(NOW(),Interval -10 month)')->where('category','=','tourism')->count();
        $this->nbr_tourism_articles_last_11th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -10 month) and created_at > DATE_ADD(NOW(),Interval -11 month)')->where('category','=','tourism')->count();
        $this->nbr_tourism_articles_last_12th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -11 month) and created_at > DATE_ADD(NOW(),Interval -12 month)')->where('category','=','tourism')->count();
        $this->list_society_articles =article::all()->where('category','=','society');
        $this->nbr_society_articles =article::all()->where('category','=','society')->count() ;
        $this->nbr_society_articles_last_day =article::all()->where('category','=','society')->where('created_at','<','DATEADD(dd, -1, GETDATE())')->count() ;
        $this->nbr_society_articles_last_week =article::all()->where('category','=','society')->where('created_at','<','DATEADD(dd, -7, GETDATE())')->count() ;
        $this->nbr_society_articles_last_month =article::all()->where('category','=','society')->where('created_at','<','DATEADD(mm, -1, GETDATE())')->count() ;
        $this->nbr_society_articles_last_year =article::all()->where('category','=','society')->where('created_at','<','DATEADD(yy, -1, GETDATE())')->count() ;
        $this->nbr_society_articles_last_2nd_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -1 month) and created_at > DATE_ADD(NOW(),Interval -2 month)')->where('category','=','society')->count();
        $this->nbr_society_articles_last_3rd_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -2 month) and created_at > DATE_ADD(NOW(),Interval -3 month)')->where('category','=','society')->count();
        $this->nbr_society_articles_last_4th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -3 month) and created_at > DATE_ADD(NOW(),Interval -4 month)')->where('category','=','society')->count();
        $this->nbr_society_articles_last_5th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -4 month) and created_at > DATE_ADD(NOW(),Interval -5 month)')->where('category','=','society')->count();
        $this->nbr_society_articles_last_6th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -5 month) and created_at > DATE_ADD(NOW(),Interval -6 month)')->where('category','=','society')->count();
        $this->nbr_society_articles_last_7th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -6 month) and created_at > DATE_ADD(NOW(),Interval -7 month)')->where('category','=','society')->count();
        $this->nbr_society_articles_last_8th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -7 month) and created_at > DATE_ADD(NOW(),Interval -8 month)')->where('category','=','society')->count();
        $this->nbr_society_articles_last_9th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -8 month) and created_at > DATE_ADD(NOW(),Interval -9 month)')->where('category','=','society')->count();
        $this->nbr_society_articles_last_10th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -9 month) and created_at > DATE_ADD(NOW(),Interval -10 month)')->where('category','=','society')->count();
        $this->nbr_society_articles_last_11th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -10 month) and created_at > DATE_ADD(NOW(),Interval -11 month)')->where('category','=','society')->count();
        $this->nbr_society_articles_last_12th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -11 month) and created_at > DATE_ADD(NOW(),Interval -12 month)')->where('category','=','society')->count();
        $this->list_culture_articles =article::all()->where('category','=','culture') ;
        $this->nbr_culture_articles =article::all()->where('category','=','culture')->count() ;
        $this->nbr_culture_articles_last_day =article::all()->where('category','=','culture')->where('created_at','<','DATEADD(dd, -1, GETDATE())')->count() ;
        $this->nbr_culture_articles_last_week = article::all()->where('category','=','culture')->where('created_at','<','DATEADD(dd, -7, GETDATE())')->count();
        $this->nbr_culture_articles_last_month =article::all()->where('category','=','culture')->where('created_at','<','DATEADD(mm, -1, GETDATE())')->count() ;
        $this->nbr_culture_articles_last_year =article::all()->where('category','=','culture')->where('created_at','<','DATEADD(yy, -1, GETDATE())')->count() ;
        $this->nbr_culture_articles_last_2nd_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -1 month) and created_at > DATE_ADD(NOW(),Interval -2 month)')->where('category','=','culture')->count();
        $this->nbr_culture_articles_last_3rd_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -2 month) and created_at > DATE_ADD(NOW(),Interval -3 month)')->where('category','=','culture')->count();
        $this->nbr_culture_articles_last_4th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -3 month) and created_at > DATE_ADD(NOW(),Interval -4 month)')->where('category','=','culture')->count();
        $this->nbr_culture_articles_last_5th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -4 month) and created_at > DATE_ADD(NOW(),Interval -5 month)')->where('category','=','culture')->count();
        $this->nbr_culture_articles_last_6th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -5 month) and created_at > DATE_ADD(NOW(),Interval -6 month)')->where('category','=','culture')->count();
        $this->nbr_culture_articles_last_7th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -6 month) and created_at > DATE_ADD(NOW(),Interval -7 month)')->where('category','=','culture')->count();
        $this->nbr_culture_articles_last_8th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -7 month) and created_at > DATE_ADD(NOW(),Interval -8 month)')->where('category','=','culture')->count();
        $this->nbr_culture_articles_last_9th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -8 month) and created_at > DATE_ADD(NOW(),Interval -9 month)')->where('category','=','culture')->count();
        $this->nbr_culture_articles_last_10th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -9 month) and created_at > DATE_ADD(NOW(),Interval -10 month)')->where('category','=','culture')->count();
        $this->nbr_culture_articles_last_11th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -10 month) and created_at > DATE_ADD(NOW(),Interval -11 month)')->where('category','=','culture')->count();
        $this->nbr_culture_articles_last_12th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -11 month) and created_at > DATE_ADD(NOW(),Interval -12 month)')->where('category','=','culture')->count();
        $this->list_maritime_gazette_articles =article::all()->where('category','=','maritime gazette') ;
        $this->nbr_maritime_gazette_articles =article::all()->where('category','=','maritime gazette')->count() ;
        $this->nbr_maritime_gazette_articles_last_day =article::all()->where('category','=','maritime gazette')->where('created_at','<','DATEADD(dd, -1, GETDATE())')->count() ;
        $this->nbr_maritime_gazette_articles_last_week = article::all()->where('category','=','maritime gazette')->where('created_at','<','DATEADD(dd, -7, GETDATE())')->count();
        $this->nbr_maritime_gazette_articles_last_month =article::all()->where('category','=','maritime gazette')->where('created_at','<','DATEADD(mm, -1, GETDATE())')->count() ;
        $this->nbr_maritime_gazette_articles_last_year =article::all()->where('category','=','maritime gazette')->where('created_at','<','DATEADD(yy, -1, GETDATE())')->count() ;
        $this->nbr_maritime_gazette_articles_last_2nd_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -1 month) and created_at > DATE_ADD(NOW(),Interval -2 month)')->where('category','=','maritimegazette')->count();
        $this->nbr_maritime_gazette_articles_last_3rd_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -2 month) and created_at > DATE_ADD(NOW(),Interval -3 month)')->where('category','=','maritimegazette')->count();
        $this->nbr_maritime_gazette_articles_last_4th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -3 month) and created_at > DATE_ADD(NOW(),Interval -4 month)')->where('category','=','maritimegazette')->count();
        $this->nbr_maritime_gazette_articles_last_5th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -4 month) and created_at > DATE_ADD(NOW(),Interval -5 month)')->where('category','=','maritimegazette')->count();
        $this->nbr_maritime_gazette_articles_last_6th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -5 month) and created_at > DATE_ADD(NOW(),Interval -6 month)')->where('category','=','maritimegazette')->count();
        $this->nbr_maritime_gazette_articles_last_7th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -6 month) and created_at > DATE_ADD(NOW(),Interval -7 month)')->where('category','=','maritimegazette')->count();
        $this->nbr_maritime_gazette_articles_last_8th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -7 month) and created_at > DATE_ADD(NOW(),Interval -8 month)')->where('category','=','maritimegazette')->count();
        $this->nbr_maritime_gazette_articles_last_9th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -8 month) and created_at > DATE_ADD(NOW(),Interval -9 month)')->where('category','=','maritimegazette')->count();
        $this->nbr_maritime_gazette_articles_last_10th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -9 month) and created_at > DATE_ADD(NOW(),Interval -10 month)')->where('category','=','maritimegazette')->count();
        $this->nbr_maritime_gazette_articles_last_11th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -10 month) and created_at > DATE_ADD(NOW(),Interval -11 month)')->where('category','=','maritimegazette')->count();
        $this->nbr_maritime_gazette_articles_last_12th_month = article::whereRaw('created_at < DATE_ADD(NOW(),Interval -11 month) and created_at > DATE_ADD(NOW(),Interval -12 month)')->where('category','=','maritimegazette')->count();
    }

    // Index View For Publisher
    public function index(){

      return view('publisher.index');
    }

    // Statistics view publisher
    public function statistics(){
      $data = [
        'list_articles' => $this->list_articles,
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
        'list_economic_articles' => $this->list_economic_articles,
        'nbr_economic_articles' => $this->nbr_economic_articles,
        'nbr_economic_articles_last_day' => $this->nbr_economic_articles_last_day,
        'nbr_economic_articles_last_week' => $this->nbr_economic_articles_last_week,
        'nbr_economic_articles_last_month' => $this->nbr_economic_articles_last_month,
        'nbr_economic_articles_last_year' => $this->nbr_economic_articles_last_year,
        'nbr_economic_articles_last_2nd_month' => $this->nbr_economic_articles_last_2nd_month,
        'nbr_economic_articles_last_3rd_month' => $this->nbr_economic_articles_last_3rd_month,
        'nbr_economic_articles_last_4th_month' => $this->nbr_economic_articles_last_4th_month,
        'nbr_economic_articles_last_5th_month' => $this->nbr_economic_articles_last_5th_month,
        'nbr_economic_articles_last_6th_month' => $this->nbr_economic_articles_last_6th_month,
        'nbr_economic_articles_last_7th_month' => $this->nbr_economic_articles_last_7th_month,
        'nbr_economic_articles_last_8th_month' => $this->nbr_economic_articles_last_8th_month,
        'nbr_economic_articles_last_9th_month' => $this->nbr_economic_articles_last_9th_month,
        'nbr_economic_articles_last_10th_month' => $this->nbr_economic_articles_last_10th_month,
        'nbr_economic_articles_last_11th_month' => $this->nbr_economic_articles_last_11th_month,
        'nbr_economic_articles_last_12th_month' => $this->nbr_economic_articles_last_12th_month,
        'list_tourism_articles' => $this->list_tourism_articles,
        'nbr_tourism_articles' => $this->nbr_tourism_articles,
        'nbr_tourism_articles_last_day' => $this->nbr_tourism_articles_last_day,
        'nbr_tourism_articles_last_week' => $this->nbr_tourism_articles_last_week,
        'nbr_tourism_articles_last_month' => $this->nbr_tourism_articles_last_month,
        'nbr_tourism_articles_last_year' => $this->nbr_tourism_articles_last_year,
        'nbr_tourism_articles_last_2nd_month' => $this->nbr_tourism_articles_last_2nd_month,
        'nbr_tourism_articles_last_3rd_month' => $this->nbr_tourism_articles_last_3rd_month,
        'nbr_tourism_articles_last_4th_month' => $this->nbr_tourism_articles_last_4th_month,
        'nbr_tourism_articles_last_5th_month' => $this->nbr_tourism_articles_last_5th_month,
        'nbr_tourism_articles_last_6th_month' => $this->nbr_tourism_articles_last_6th_month,
        'nbr_tourism_articles_last_7th_month' => $this->nbr_tourism_articles_last_7th_month,
        'nbr_tourism_articles_last_8th_month' => $this->nbr_tourism_articles_last_8th_month,
        'nbr_tourism_articles_last_9th_month' => $this->nbr_tourism_articles_last_9th_month,
        'nbr_tourism_articles_last_10th_month' => $this->nbr_tourism_articles_last_10th_month,
        'nbr_tourism_articles_last_11th_month' => $this->nbr_tourism_articles_last_11th_month,
        'nbr_tourism_articles_last_12th_month' => $this->nbr_tourism_articles_last_12th_month,
        'list_society_articles' => $this->list_society_articles,
        'nbr_society_articles' => $this->nbr_society_articles,
        'nbr_society_articles_last_day' => $this->nbr_society_articles_last_day,
        'nbr_society_articles_last_week' => $this->nbr_society_articles_last_week,
        'nbr_society_articles_last_month' => $this->nbr_society_articles_last_month,
        'nbr_society_articles_last_year' => $this->nbr_society_articles_last_year,
        'nbr_society_articles_last_2nd_month' => $this->nbr_society_articles_last_2nd_month,
        'nbr_society_articles_last_3rd_month' => $this->nbr_society_articles_last_3rd_month,
        'nbr_society_articles_last_4th_month' => $this->nbr_society_articles_last_4th_month,
        'nbr_society_articles_last_5th_month' => $this->nbr_society_articles_last_5th_month,
        'nbr_society_articles_last_6th_month' => $this->nbr_society_articles_last_6th_month,
        'nbr_society_articles_last_7th_month' => $this->nbr_society_articles_last_7th_month,
        'nbr_society_articles_last_8th_month' => $this->nbr_society_articles_last_8th_month,
        'nbr_society_articles_last_9th_month' => $this->nbr_society_articles_last_9th_month,
        'nbr_society_articles_last_10th_month' => $this->nbr_society_articles_last_10th_month,
        'nbr_society_articles_last_11th_month' => $this->nbr_society_articles_last_11th_month,
        'nbr_society_articles_last_12th_month' => $this->nbr_society_articles_last_12th_month,
        'list_culture_articles' => $this->list_culture_articles,
        'nbr_culture_articles' => $this->nbr_culture_articles,
        'nbr_culture_articles_last_day' => $this->nbr_culture_articles_last_day,
        'nbr_culture_articles_last_week' => $this->nbr_culture_articles_last_week,
        'nbr_culture_articles_last_month' => $this->nbr_culture_articles_last_month,
        'nbr_culture_articles_last_year' => $this->nbr_culture_articles_last_year,
        'nbr_culture_articles_last_2nd_month' => $this->nbr_culture_articles_last_2nd_month,
        'nbr_culture_articles_last_3rd_month' => $this->nbr_culture_articles_last_3rd_month,
        'nbr_culture_articles_last_4th_month' => $this->nbr_culture_articles_last_4th_month,
        'nbr_culture_articles_last_5th_month' => $this->nbr_culture_articles_last_5th_month,
        'nbr_culture_articles_last_6th_month' => $this->nbr_culture_articles_last_6th_month,
        'nbr_culture_articles_last_7th_month' => $this->nbr_culture_articles_last_7th_month,
        'nbr_culture_articles_last_8th_month' => $this->nbr_culture_articles_last_8th_month,
        'nbr_culture_articles_last_9th_month' => $this->nbr_culture_articles_last_9th_month,
        'nbr_culture_articles_last_10th_month' => $this->nbr_culture_articles_last_10th_month,
        'nbr_culture_articles_last_11th_month' => $this->nbr_culture_articles_last_11th_month,
        'nbr_culture_articles_last_12th_month' => $this->nbr_culture_articles_last_12th_month,
        'list_maritime_gazette_articles' => $this->list_maritime_gazette_articles,
        'nbr_maritime_gazette_articles' => $this->nbr_maritime_gazette_articles,
        'nbr_maritime_gazette_articles_last_day' => $this->nbr_maritime_gazette_articles_last_day,
        'nbr_maritime_gazette_articles_last_week' => $this->nbr_maritime_gazette_articles_last_week,
        'nbr_maritime_gazette_articles_last_month' => $this->nbr_maritime_gazette_articles_last_month,
        'nbr_maritime_gazette_articles_last_year' => $this->nbr_maritime_gazette_articles_last_year,
        'nbr_maritime_gazette_articles_last_2nd_month' => $this->nbr_maritime_gazette_articles_last_2nd_month,
        'nbr_maritime_gazette_articles_last_3rd_month' => $this->nbr_maritime_gazette_articles_last_3rd_month,
        'nbr_maritime_gazette_articles_last_4th_month' => $this->nbr_maritime_gazette_articles_last_4th_month,
        'nbr_maritime_gazette_articles_last_5th_month' => $this->nbr_maritime_gazette_articles_last_5th_month,
        'nbr_maritime_gazette_articles_last_6th_month' => $this->nbr_maritime_gazette_articles_last_6th_month,
        'nbr_maritime_gazette_articles_last_7th_month' => $this->nbr_maritime_gazette_articles_last_7th_month,
        'nbr_maritime_gazette_articles_last_8th_month' => $this->nbr_maritime_gazette_articles_last_8th_month,
        'nbr_maritime_gazette_articles_last_9th_month' => $this->nbr_maritime_gazette_articles_last_9th_month,
        'nbr_maritime_gazette_articles_last_10th_month' => $this->nbr_maritime_gazette_articles_last_10th_month,
        'nbr_maritime_gazette_articles_last_11th_month' => $this->nbr_maritime_gazette_articles_last_11th_month,
        'nbr_maritime_gazette_articles_last_12th_month' => $this->nbr_maritime_gazette_articles_last_12th_month,
      ];
      return view('publisher.statistics')->with($data);
    }

    // Articles View
    public function articles(){
      $data=[
        'list_articles' => $this->list_articles,
      ];
      return view('publisher.articles')->with($data);
    }

    // Publishers View
    public function publishers(){
      $data=[
        'list_publishers' => $this->list_publishers,
      ];
      return view('publisher.publishers')->with($data);
    }

    public function postarticle(Request $request){
      $article = new article;
      $article->title = $request->title;
      $article->publisher = $request->publisher;
      $article->content = $request->content;
      $article->category = $request->category;
      $article->user_id = Auth::User()->id;
      $article->save();
      $image = $request->file('file_name');
      $image_name = $article->id . '.' . $image->getClientOriginalExtension();
      $image->move(public_path("img"),$image_name);
      return redirect()->back();
    }

    // Add Article View
    public function addarticle(){
      return view('publisher.addarticle');
    }

    // Delete an article
    public function deletearticle(Request $request){
      $article = article::all()->where('id','=',$request->id)->first();
      $article->delete();
      return redirect()->back();
    }
}
