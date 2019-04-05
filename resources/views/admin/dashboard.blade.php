@extends('layouts.admin')

@section('content')

<section class="bg-light">
</section>


<section class="bg-light">
  <div class="row col-lg-12">
    <a href="{{url('/admin/users')}}" class="col-lg-3 btn btn-outline-primary">Users </a>
    <a href="{{url('/admin/articles')}}" class="col-lg-3 btn btn-outline-primary">Articles </a>
    <a href="{{url('/admin/statistics')}}" class="col-lg-3 btn btn-outline-primary">General Statistics</a>
  </div>
  <div class="row col-lg-12">
    <a class="col-lg-3 btn btn-outline-primary">Pending Publishers</a>
    <a class="col-lg-3 btn btn-outline-primary">Pending Articles</a>
    <a class="col-lg-3 btn btn-outline-primary">Reports</a>
  </div>
</section>


@endsection
