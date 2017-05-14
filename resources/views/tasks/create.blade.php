@extends ('layouts.app')

@section ('content')

<div class="row">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Create a task</h3>
		  </div>
		  <div class="panel-body">
	    <form class="form-horizontal" role="form" method="POST" action="{{ url('tasks') }}">
        	{{ csrf_field() }}
        		<label>Title</label>
		    	<input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required autofocus>

		    	<label>Body</label>
		    	<textarea class="form-control" rows="3" id="body" name="body" value="{{ old('body') }}"></textarea>
		  </div>
		  <div class="panel-footer">
		  	<button type="submit" class="btn btn-primary">
		  	    Create
		  	</button>
		  </div>
	    </form>
		</div>
	</div>

	<div class="col-md-4">
	</div>

</div>
</div>

@endsection