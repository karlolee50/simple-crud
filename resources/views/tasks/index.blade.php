<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<ul>
	@foreach ($tasks as $task)
		<li>
			{{$task->title}}
		</li>
	@endforeach
	</ul>

</body>
</html>