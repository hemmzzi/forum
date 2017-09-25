@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Hermann Snorri <small>meðlimur í 3  vikur</small></h2>
    <div class="row">

        <div class="col-md-9">

            @foreach ($threadsinfo as $thread)
                <!-- Default panel contents -->
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
        <div class="col-md-3">
          <div class="panel">
            <div class="panel-heading">Nafn : {{ $thread['nafn'] }}</div>
              <div class="panel-heading">Email : {{ $email[0]->email }}</div>
                <div class="panel-heading">Fjöldi Þráða : 14</div>
          </div>
        </div>

        </div>
    </div>
</div>
@endsection