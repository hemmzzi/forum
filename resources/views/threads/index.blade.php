@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum threads</div>
                    <div class="panel panel-default">
                      <div class="panel-body">
                        @foreach ($threads as $thread)
                        <h3>{{ $thread[ "title"] }}</h3>
                        @endforeach

                           <div class="panel-body">
                              <div class="panel-body">

                                     <h3></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                 <div class="panel-body">
            </div>
        </div>
    </div>
</div>
@endsection
