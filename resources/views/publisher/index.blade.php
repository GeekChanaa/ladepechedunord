@extends('layouts.admin')

@section('content')


<section class="bg-light">
</section>


<section class="bg-light">
  <div class="row col-lg-12">
    <a href="{{url('/publisher/addarticle')}}" class="col-lg-3 btn btn-outline-primary">Add an Article</a>
    <a href="{{url('/publisher/articles')}}" class="col-lg-3 btn btn-outline-primary">Articles</a>
    <a class="col-lg-3 btn btn-outline-primary">Number of Articles</a>
    <a href="{{url('/publisher/statistics')}}" class="col-lg-3 btn btn-outline-primary">Statistics</a>

  </div>
  <div class="row col-lg-12">
    <a class="col-lg-3 btn btn-outline-primary">Articles by me</a>
    <a class="col-lg-3 btn btn-outline-primary">Articles by category</a>
    <a href="{{url('/publisher/publishers')}}" class="col-lg-3 btn btn-outline-primary">List of Publishers</a>
  </div>
</section>




@endsection
