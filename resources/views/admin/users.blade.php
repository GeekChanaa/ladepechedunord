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
    <th scope="col"> Delete </th>
    @foreach($list_users as $user)
    <tr>
      <td>{{$user->id}} </td>
      <form action="{{url('/admin/modifyuser')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" value="{{$user->id}}" name="id">
      <td> <input value="{{$user->name}}" name="name" type="text"> </td>
      <td> <input value="{{$user->rank}}" name="rank" type="text"> </td>
      <td> <input value="{{$user->email}}" name="email" type="text"> </td>
      <td>{{$user->created_at}} </td>
      <td>{{$user->updated_at}} </td>
      <td> <button type="submit" class="btn btn-primary"> Update </button> </td>
    </form>
      <td> <form class="" action="{{url('/admin/deleteuser')}}" method="post">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}">
        <button class="btn btn-danger" type="submit"> Delete </button>
      </form>
      </td>
    </tr>
    @endforeach
  </table>
</section>


@endsection
