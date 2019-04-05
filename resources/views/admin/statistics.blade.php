@extends('layouts.admin')

@section('content')

<!-- List of Users (Publishers and ordinary) -->

<div class="row col-lg-10 offset-lg-1" style="margin-top:5%;">
  <table class="table table-danger">
    <th scope="col">ID </th>
    <th scope="col">Name </th>
    <th scope="col">Email </th>
    <th scope="col">Rank </th>
    <th scope="col">Creation Date </th>
    <th scope="col">Update Date </th>
    @foreach($list_users as $user)
    <tr>
      <td>{{$user->id}} </td>
      <td>{{$user->name}} </td>
      <td>{{$user->email}} </td>
      <td>{{$user->rank}} </td>
      <td>{{$user->created_at}} </td>
      <td>{{$user->updated_at}} </td>
    </tr>
    @endforeach
  </table>
</div>


<!-- Number of Users (publishers and ordinary) -->
<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1">
</div>
  <div>
     Number of Users
   </div>
 </div>

  <div class="row col-lg-8 offset-lg-2">
    <canvas id="chart_users"></canvas>
  </div>
</section>


<!-- Number of Users (General) -->

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1">
</div>
  <div>
     Number of Users (General)
   </div>
 </div>

  <div class="row col-lg-8 offset-lg-2">
    <canvas id="chart_users_general"></canvas>
  </div>
</section>

<!-- Number of Users (By Month) -->

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1">
</div>
  <div>
     Number of Users (by Month)
   </div>
 </div>

  <div class="row col-lg-8 offset-lg-2">
    <canvas id="chart_users_month"></canvas>
  </div>
</section>


<!-- Number of Articles (General) -->

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1">
</div>
  <div>
     Number of Articles (General)
   </div>
 </div>

  <div class="row col-lg-8 offset-lg-2">
    <canvas id="chart_articles"></canvas>
  </div>
</section>


<!-- Number of Articles (By Month) -->

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1">
</div>
  <div>
     Number of Articles (By Month)
   </div>
 </div>

  <div class="row col-lg-8 offset-lg-2">
    <canvas id="chart_articles_month"></canvas>
  </div>
</section>




<!-- Charts -->

<script>
var ctx = document.getElementById('chart_articles_month').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1st month', '2nd month', '3rd month', '4th month', '5th month', '6th month', '7th month', '8th month', '9th month' , '10th month', '11th month','12th month'],
        datasets: [{
            label: 'Number of articles',
            data: [{{$nbr_articles_last_month}}, {{$nbr_articles_last_2nd_month}}, {{$nbr_articles_last_3rd_month}}, {{$nbr_articles_last_4th_month}}, {{$nbr_articles_last_5th_month}},{{$nbr_articles_last_6th_month}},{{$nbr_articles_last_7th_month}},{{$nbr_articles_last_8th_month}},{{$nbr_articles_last_9th_month}},{{$nbr_articles_last_10th_month}},{{$nbr_articles_last_11th_month}},{{$nbr_articles_last_12th_month}}],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<script>
var ctx = document.getElementById('chart_users_month').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1st month', '2nd month', '3rd month', '4th month', '5th month', '6th month', '7th month', '8th month', '9th month' , '10th month', '11th month','12th month'],
        datasets: [{
            label: 'Number of users',
            data: [{{$nbr_users_last_month}}, {{$nbr_users_last_2nd_month}}, {{$nbr_users_last_3rd_month}}, {{$nbr_users_last_4th_month}}, {{$nbr_users_last_5th_month}},{{$nbr_users_last_6th_month}},{{$nbr_users_last_7th_month}},{{$nbr_users_last_8th_month}},{{$nbr_users_last_9th_month}},{{$nbr_users_last_10th_month}},{{$nbr_users_last_11th_month}},{{$nbr_users_last_12th_month}}],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<script>
var ctx = document.getElementById('chart_users_general').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Last Day', 'Last Week', 'Last Month', 'Last Year'],
        datasets: [{
            label: 'Number of articles',
            data: [{{$nbr_users_last_day}}, {{$nbr_users_last_week}}, {{$nbr_users_last_month}}, {{$nbr_users_last_year}}],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<script>
var ctx = document.getElementById('chart_articles').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Last Day', 'Last Week', 'Last Month', 'Last Year'],
        datasets: [{
            label: 'Number of articles',
            data: [{{$nbr_articles_last_day}}, {{$nbr_articles_last_week}}, {{$nbr_articles_last_month}}, {{$nbr_articles_last_year}}],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<script>
var ctx = document.getElementById('chart_users').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Publisher', 'Ordinary'],
        datasets: [{
            label: 'Number of Users',
            data: [{{$nbr_publishers}}, {{$nbr_users}}],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>


@endsection
