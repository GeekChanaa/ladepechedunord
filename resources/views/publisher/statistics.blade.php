@extends('layouts.admin')

@section('content')

<header>
  Statistics
</header>


<section class="bg-light">
  <div> List of Article by Category </div>
  <div class="row col-lg-6 offset-lg-3">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-danger active">
        <input type="radio" name="options" id="option1" autocomplete="off" checked> All
      </label>
      <label class="btn btn-danger">
        <input type="radio" name="options" id="option2" autocomplete="off"> Economics
      </label>
      <label class="btn btn-danger">
        <input type="radio" name="options" id="option3" autocomplete="off"> Society
      </label>
      <label class="btn btn-danger">
        <input type="radio" name="options" id="option3" autocomplete="off"> Culture
      </label>
      <label class="btn btn-danger">
        <input type="radio" name="options" id="option3" autocomplete="off"> Tourism
      </label>
      <label class="btn btn-danger">
        <input type="radio" name="options" id="option3" autocomplete="off"> Maritime Gazette
      </label>
    </div>
  </div>
  <div class="row col-lg-10 offset-lg-1" style="margin-top:5%;">
    <!-- Radio buttons to choose which category to display -->
    <table class="table table-primary">
      <th scope="col">Id </th>
      <th scope="col">Title </th>
      <th scope="col">Category </th>
      <th scope="col">Creation Date </th>
      <th scope="col">Update Date </th>
      @foreach($list_articles as $article)
      <tr class="{{$article->category}}">
        <td>{{$article->id}} </td>
        <td>{{$article->title}} </td>
        <td>{{$article->category}} </td>
        <td>{{$article->created_at}} </td>
        <td>{{$article->updated_at}} </td>
      </tr>
      @endforeach
    </table>
  </div>
</section>

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>
  <div>
     Number of Articles of Each Category
   </div>
 </div>

  <div class="row col-lg-8 offset-lg-2">
    <canvas id="chart_articles"></canvas>
  </div>
</section>

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>

  <div>
     Number of Economics Articles (General)
   </div>
   </div>

  <div class="row col-lg-8 offset-lg-2">
  <canvas id="chart_economics" width="400" height="400"></canvas>
</div>
</section>

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>
  <div>
     Number of Economics Articles (By Month)
   </div>
   </div>

  <div class="row col-lg-8 offset-lg-2">
  <canvas id="chart_economics_month" width="400" height="400"></canvas>

</div>
</section>

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>
  <div>
     Number of Tourism Articles (General)
   </div>
   </div>

  <div class="row col-lg-8 offset-lg-2">
  <canvas id="chart_tourism" width="400" height="400"></canvas>
</div>
</section>
<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>
  <div>
     Number of Tourism Articles (By Month)
   </div>
   </div>

  <div class="row col-lg-8 offset-lg-2">
  <canvas id="chart_tourism_month" width="400" height="400"></canvas>
</div>
</section>

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>
  <div>
     Number of Culture Articles (General)
   </div>
   </div>

  <div class="row col-lg-8 offset-lg-2">
  <canvas id="chart_culture" width="400" height="400"></canvas>
</div>
</section>
<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>
  <div>
     Number of Culture Articles (By Month)
   </div>
   </div>

  <div class="row col-lg-8 offset-lg-2">
  <canvas id="chart_culture_month" width="400" height="400"></canvas>
</div>
</section>

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>
  <div>
     Number of Maritime Gazette Articles (General)
   </div>
   </div>

  <div class="row col-lg-8 offset-lg-2">
  <canvas id="chart_maritime_gazette" width="400" height="400"></canvas>
</div>
</section>

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>
  <div>
     Number of Maritime Gazette Articles (By Month)
   </div>
   </div>

  <div class="row col-lg-8 offset-lg-2">
  <canvas id="chart_maritime_gazette_month" width="400" height="400"></canvas>
</div>
</section>

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>
  <div>
     Number of Society Articles (General)
   </div>
   </div>

  <div class="row col-lg-8 offset-lg-2">
  <canvas id="chart_society" width="400" height="400"></canvas>
</div>
</section>

<section class="bg-light">
  <div class="row">
<div class="icon-statistics col-lg-2 offset-lg-1"> </div>
  <div>
     Number of Society Articles (By Month)
   </div>
   </div>

  <div class="row col-lg-8 offset-lg-2">
  <canvas id="chart_society_month" width="400" height="400"></canvas>
</div>
</section>


<script>
var ctx = document.getElementById('chart_articles').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Economics', 'Tourism', 'Society', 'Culture', 'Maritime Gazette'],
        datasets: [{
            label: 'Number of articles',
            data: [{{$nbr_economic_articles}}, {{$nbr_tourism_articles}}, {{$nbr_society_articles}}, {{$nbr_culture_articles}}, {{$nbr_maritime_gazette_articles}}],
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
var ctx = document.getElementById('chart_economics').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Last Day', 'Last Week', 'Last Month', 'Last Year'],
        datasets: [{
            label: 'Number of articles',
            data: [{{$nbr_economic_articles_last_day}}, {{$nbr_economic_articles_last_week}}, {{$nbr_economic_articles_last_month}}, {{$nbr_economic_articles_last_year}}],
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
var ctx = document.getElementById('chart_economics_month').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1st month', '2nd month', '3rd month', '4th month', '5th month', '6th month', '7th month', '8th month', '9th month' , '10th month', '11th month','12th month'],
        datasets: [{
            label: 'Number of articles',
            data: [{{$nbr_economic_articles_last_month}}, {{$nbr_economic_articles_last_2nd_month}}, {{$nbr_economic_articles_last_3rd_month}}, {{$nbr_economic_articles_last_4th_month}}, {{$nbr_economic_articles_last_5th_month}},{{$nbr_economic_articles_last_6th_month}},{{$nbr_economic_articles_last_7th_month}},{{$nbr_economic_articles_last_8th_month}},{{$nbr_economic_articles_last_9th_month}},{{$nbr_economic_articles_last_10th_month}},{{$nbr_economic_articles_last_11th_month}},{{$nbr_economic_articles_last_12th_month}}],
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
var ctx = document.getElementById('chart_society').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Last Day', 'Last Week', 'Last Month', 'Last Year'],
      datasets: [{
          label: 'Number of articles',
          data: [{{$nbr_society_articles_last_day}}, {{$nbr_society_articles_last_week}}, {{$nbr_society_articles_last_month}}, {{$nbr_society_articles_last_year}}],
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
var ctx = document.getElementById('chart_society_month').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1st month', '2nd month', '3rd month', '4th month', '5th month', '6th month', '7th month', '8th month', '9th month' , '10th month', '11th month','12th month'],
        datasets: [{
            label: 'Number of articles',
            data: [{{$nbr_society_articles_last_month}}, {{$nbr_society_articles_last_2nd_month}}, {{$nbr_society_articles_last_3rd_month}}, {{$nbr_society_articles_last_4th_month}}, {{$nbr_society_articles_last_5th_month}},{{$nbr_society_articles_last_6th_month}},{{$nbr_society_articles_last_7th_month}},{{$nbr_society_articles_last_8th_month}},{{$nbr_society_articles_last_9th_month}},{{$nbr_society_articles_last_10th_month}},{{$nbr_society_articles_last_11th_month}},{{$nbr_society_articles_last_12th_month}}],
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
var ctx = document.getElementById('chart_tourism').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Last Day', 'Last Week', 'Last Month', 'Last Year'],
      datasets: [{
          label: 'Number of articles',
          data: [{{$nbr_tourism_articles_last_day}}, {{$nbr_tourism_articles_last_week}}, {{$nbr_tourism_articles_last_month}}, {{$nbr_tourism_articles_last_year}}],
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
var ctx = document.getElementById('chart_tourism_month').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1st month', '2nd month', '3rd month', '4th month', '5th month', '6th month', '7th month', '8th month', '9th month' , '10th month', '11th month','12th month'],
        datasets: [{
            label: 'Number of articles',
            data: [{{$nbr_tourism_articles_last_month}}, {{$nbr_tourism_articles_last_2nd_month}}, {{$nbr_tourism_articles_last_3rd_month}}, {{$nbr_tourism_articles_last_4th_month}}, {{$nbr_tourism_articles_last_5th_month}},{{$nbr_tourism_articles_last_6th_month}},{{$nbr_tourism_articles_last_7th_month}},{{$nbr_tourism_articles_last_8th_month}},{{$nbr_tourism_articles_last_9th_month}},{{$nbr_tourism_articles_last_10th_month}},{{$nbr_tourism_articles_last_11th_month}},{{$nbr_tourism_articles_last_12th_month}}],
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
var ctx = document.getElementById('chart_culture').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Last Day', 'Last Week', 'Last Month', 'Last Year'],
      datasets: [{
          label: 'Number of articles',
          data: [{{$nbr_culture_articles_last_day}}, {{$nbr_culture_articles_last_week}}, {{$nbr_culture_articles_last_month}}, {{$nbr_culture_articles_last_year}}],
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
var ctx = document.getElementById('chart_culture_month').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1st month', '2nd month', '3rd month', '4th month', '5th month', '6th month', '7th month', '8th month', '9th month' , '10th month', '11th month','12th month'],
        datasets: [{
            label: 'Number of articles',
            data:[{{$nbr_culture_articles_last_month}}, {{$nbr_culture_articles_last_2nd_month}}, {{$nbr_culture_articles_last_3rd_month}}, {{$nbr_culture_articles_last_4th_month}}, {{$nbr_culture_articles_last_5th_month}},{{$nbr_culture_articles_last_6th_month}},{{$nbr_culture_articles_last_7th_month}},{{$nbr_culture_articles_last_8th_month}},{{$nbr_culture_articles_last_9th_month}},{{$nbr_culture_articles_last_10th_month}},{{$nbr_culture_articles_last_11th_month}},{{$nbr_culture_articles_last_12th_month}}],
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
var ctx = document.getElementById('chart_maritime_gazette').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Last Day', 'Last Week', 'Last Month', 'Last Year'],
      datasets: [{
          label: 'Number of articles',
          data: [{{$nbr_maritime_gazette_articles_last_day}}, {{$nbr_maritime_gazette_articles_last_week}}, {{$nbr_maritime_gazette_articles_last_month}}, {{$nbr_maritime_gazette_articles_last_year}}],
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
var ctx = document.getElementById('chart_maritime_gazette_month').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1st month', '2nd month', '3rd month', '4th month', '5th month', '6th month', '7th month', '8th month', '9th month' , '10th month', '11th month','12th month'],
        datasets: [{
            label: 'Number of articles',
            data: [{{$nbr_maritime_gazette_articles_last_month}}, {{$nbr_maritime_gazette_articles_last_2nd_month}}, {{$nbr_maritime_gazette_articles_last_3rd_month}}, {{$nbr_maritime_gazette_articles_last_4th_month}}, {{$nbr_maritime_gazette_articles_last_5th_month}},{{$nbr_maritime_gazette_articles_last_6th_month}},{{$nbr_maritime_gazette_articles_last_7th_month}},{{$nbr_maritime_gazette_articles_last_8th_month}},{{$nbr_maritime_gazette_articles_last_9th_month}},{{$nbr_maritime_gazette_articles_last_10th_month}},{{$nbr_maritime_gazette_articles_last_11th_month}},{{$nbr_maritime_gazette_articles_last_12th_month}}],  }]
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
