@extends('layouts.app')

@section('content')
	<div class="panel panel-default">	
		<div class="panel-body">	
				@include('common.errors')

			<form action="{{ url('task') }}" method="post" class="form-horizontal">
				<div class="form-group">
				<label for="name" class="col-sm-3 control-label">Task</label>
				  <div class="col-sm-6">	
				<input type ="text" name="name" id="name" class="form-control"
				>	
		</div>
			</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">	
					  <button type="submit" class="btn bt-dafault">Add task</button>
					</div>

				</div>
				{{ csrf_field() }}
				
			</form>
		</div>
	</div>
	@if ($tasks->count())
		<div class="panel panel-default">
			<div class="panel-heading">
			current tasks
			</div>
			<div class="panel-body">
				<table class="table table-stripped">
					<thead>
						<th>Task</th>
						<th>&nbsp;</th>
					</thead>
					<tbody>
						@foreach ($tasks as $task)
							<tr>
								<td>{{$task->name}}</td>
							</tr>
						@endforeach
					</tbody>
				
				</table>
			</div>
		</div>
	@endif

@endsection