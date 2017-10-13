@extends('layouts.app')

@section('content')
@include ('common.errors')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>

                <div class="panel-body">
                    <form method="POST" action="/threads">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label>Title: </label>
                            <input type="text" name="title" value="{{ old('title')}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Body: </label>
                            <textarea type="text" name="body" class="form-control" rows="8">{{Request::old('body')}}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Publish</button>
                        </div>
                    </form>
                </div>
                
                

            </div>
        </div>
    </div>
</div>
@endsection