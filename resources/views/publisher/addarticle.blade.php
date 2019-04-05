@extends('layouts.admin')

@section('content')

<section class="bg-light">
  <div class="row col-lg-6 offset-lg-3">
    <form class="" action="{{url('/publisher/postarticle')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <span>Title :  </span><input type="text" name="title"> <br>
      <span>Publisher :  </span><input type="text" name="publisher"> <br>
      <span>Content : </span><input type="text" name="content"> <br>
      <span>Category : </span>
      <select name="category">
        <option value="none">None </option>
        <option value="economic">Economics </option>
        <option value="tourism">Tourism </option>
        <option value="society">Society </option>
        <option value="culture">Culture </option>
        <option value="maritime gazette">Maritime Gazette </option>
      </select> <br>
      <span> Images </span> <input type="file" name="file_name">
      <button class="btn btn-danger" type="submit"> Submit </button>
    </form>
  </div>
</section>






@endsection
