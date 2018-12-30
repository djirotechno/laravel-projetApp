<h2>{{$project->name}}</h2>

<p>{{$project->description}}</p>

@foreach ($project->tasks as $task)
<form action="/tasks/{{$task->id}}" method="POST">
	@csrf
	@method('PATCH')


	<input 
	{{ $task->completed ? 'checked' : ''}} onchange="this.form.submit()"type="checkbox" name="completed" id="completed">{{$task->description}}
	
</form>
	
@endforeach
<p>
	<a href="{{route('projects.edit',$project)}}">Edit</a>
</p>



	<form action="{{route('projects.destroy',$project)}}" method="post">
		@csrf
		@method('delete')
		
	<button>Supprimer</button>

	</form>

<div>
	<form action="" method="POST">
		<input type="text" name="task">
	</form>
</div>



