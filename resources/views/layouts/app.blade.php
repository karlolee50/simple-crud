<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Tasks</title>

<link 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	rel="stylesheet" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
	crossorigin="anonymous">

<script
     src="https://code.jquery.com/jquery-3.2.1.min.js"
     integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
     crossorigin="anonymous">
</script>

<script 
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
	crossorigin="anonymous">
</script>

   

<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        'baseURL' => url('/')
    ]) !!}; 
</script>

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<div class="page-header">
						<h1>
							<a href="{{ url('tasks') }}"> Tasks </a> 
						</h1>
					</div>
				</div>
				<div class="col-md-4">
				<br><br>
					<div class="btn-group">
						<button class="btn btn-default" type="button" id="create">
							<em class="glyphicon glyphicon-plus"></em> Create
						</button> 
					</div>
				</div>
			</div>
		</div>
	</div>
	@yield('content')

<script>
	$(document).ready(function(){
		var baseURL = window.Laravel.baseURL;
		$(document).on('click', '#create', function(){
			console.log('asdasd');
			location = baseURL + '/tasks/create';
		});

	});
</script>


</body>
</html>