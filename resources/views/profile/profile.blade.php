@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Hermann Snorri <small>meðlimur í 3 vikur</small></h3>
    <div class="row">

        <div class="col-md-9">

            @foreach ($threadsinfo as $thread)
                
                <div class="panel panel-default">
                <div class="panel-heading"><b><p> {{ $thread["nafn"] }} published <a href="{{ $thread['anchor'] }}">{{ $thread["published"] }}</a> </p></b></div>


                <ul class="list-group">
                  <div class="list-group-item">
                    <p> {{ $thread["body"] }} </p>
                 </div>
                </ul>
              </div>
              @endforeach
        </div>
        <div class="col-md-2">
          <div class="panel">
           <div class="panel-heading"><h4>Nafn</h4>  {{ $thread['nafn'] }}</div>
              <div class="panel-heading"><h4>Netfang</h4> {{ $email[0]->email }}</div>
             <div class="panel-heading"><h4>Fjöldi Þráða : 14</h4></div>
          </div>
        </div>

        </div>
    </div>
</div>
@endsection