@extends('layouts.admin')

@section('content')

<section class="bg-light">
  <div class="row col-lg-6 offset-lg-3">
    <form class="" action="{{url('/publisher/postarticle')}}" method="post">
      {{csrf_field()}}
      <span>Title :  </span><input type="text" name="title"> <br>
      <span>Publisher :  </span><input type="text" name="publisher"> <br>
      <span>Content : </span><input type="text" name="content"> <br>
      <button class="btn btn-danger" type="submit"> Submit </button>
    </form>
  </div>
</section>






@endsection
