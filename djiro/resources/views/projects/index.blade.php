<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>
	Projects
</h2>

<div>
	
<a href="{{route('projects.create')}}">create project</a>

@foreach ($project as $projects)
<a href="/projects/{{$projects->id}}">
	
{{$projects->name}}

</a>
<p>{{$projects->description}}</p>

	
@endforeach 
	

	
</div>
</body>
</html>