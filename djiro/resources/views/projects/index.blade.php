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

@foreach ($project as $project)
<a href="{{route('projects.show',$project)}}">
	
{{$project->name}}

</a>
<p>{{$project->description}}</p>

	
@endforeach 
	

	
</div>
</body>
</html>