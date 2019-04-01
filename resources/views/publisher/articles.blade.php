@extends('layouts.admin')

@section('content')



<section class="bg-light">
  <table class="col-lg-10 offset-lg-1 table table-dark">
    <th scope="col">ID </th>
    <th scope="col">Title </th>
    <th scope="col">Content </th>
    <th scope="col">Creation Date </th>
    <th scope="col">Update Date </th>
    @foreach($list_articles as $article)
    <tr>
      <td>{{$article->id}} </td>
      <td>{{$article->title}} </td>
      <td>{{$article->content}} </td>
      <td>{{$article->created_at}} </td>
      <td>{{$article->updated_at}} </td>
    </tr>
    @endforeach
  </table>
</section>


@endsection