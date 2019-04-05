@extends('layouts.admin')

@section('content')

<section class="bg-light">
  <div class="row col-lg-10 offset-lg-1">
  <table class="table table-dark">
    <th scope="col">Id </th>
    <th scope="col">Name </th>
    <th scope="col">Email </th>
    <th scope="col">Inscription Date </th>
    @foreach($list_publishers as $publisher)
      <tr>
        <td>{{$publisher->id}} </td>
        <td>{{$publisher->name}} </td>
        <td>{{$publisher->email}} </td>
        <td>{{$publisher->created_at}} </td>
      </tr>
    @endforeach
  </table>
</div>
</section>




@endsection
