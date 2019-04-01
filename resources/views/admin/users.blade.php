@extends('layouts.admin')

@section('content')


<section class="bg-light">
</section>


<section class="bg-light">
  <table class="col-lg-10 offset-lg-1 table table-dark">
    <th scope="col">ID </th>
    <th scope="col">Name </th>
    <th scope="col">Rank </th>
    <th scope="col">Email </th>
    <th scope="col">Creation Date </th>
    <th scope="col">Update Date </th>
    @foreach($list_users as $user)
    <tr>
      <td>{{$user->id}} </td>
      <td>{{$user->name}} </td>
      <td>{{$user->rank}} </td>
      <td>{{$user->email}} </td>
      <td>{{$user->created_at}} </td>
      <td>{{$user->updated_at}} </td>
    </tr>
    @endforeach
  </table>
</section>


@endsection
