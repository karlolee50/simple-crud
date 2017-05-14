@extends('layouts.app')

@section ('content')

<div class="row">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">{{$task->title}}</h3>
		  </div>
		  <div class="panel-body">
		    {{$task->body}}
		  </div>
		</div>
	</div>
	<div class="col-md-4">
	</div>
</div>
</div>

@endsection