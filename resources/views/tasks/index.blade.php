@extends ('layouts.app')

@section('content')


<div class="row">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<table class="table">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>
						Title
					</th>
					<th>
						Status
					</th>
					<th>
						Actions
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($tasks as $task)
				@if($task->isFinished == 1)
				<tr style="text-decoration: line-through;">
				@else
				<tr>
				@endif
						<td>{{ $task->id }}</td>
						<td>{{ $task->title }}</td>
						<td>
							@if ($task->isFinished == 1)
								Finished
							@else
								Unfinished
							@endif
						</td>
						<td>
							<div class="btn-group">

								<button type="button" class="btn btn-primary" id="info" ">
								  	<span class="glyphicon glyphicon-info-sign"></span> 
								  	<input type="hidden" id="taskId" value="{{$task->id}}">
								</button>

								<button class="btn btn-success" type="button" id="edit">
									<span class="glyphicon glyphicon-ok"></span> 
								  	<input type="hidden" id="taskId" value="{{$task->id}}">
								</button>

							</div>
						</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-md-4">
	</div>
</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
	$(document).ready(function(){
		var baseURL = window.Laravel.baseURL;
		var csrfToken = window.Laravel.csrfToken;
		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
		$(document).on('click', '#info', function(){
			var id = $(this).find("#taskId").val();
			location = baseURL + '/tasks/' + id;
		});

		$(document).on('click', '#edit', function(){
			var id = $(this).find("#taskId").val();
			  $.post( baseURL + '/tasks/' + id, {"id": id, "_token": csrfToken}, function(data) {
			  	console.log(id);
			  });
			  /*$.ajax({
			  		url: baseURL + '/tasks/' + id,
			  		type: 'post',
			  		data: {'id': id, '_token': csrfToken},
			  		success: function (data) {
			  			location = baseURL + "/tasks";
			  			
			  		}
			  	});*/
		});
	});
</script>

@endsection ('content')