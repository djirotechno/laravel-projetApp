


<form action="{{route('projects.update',$project)}}" method="POST">
  @csrf
  @method('PUT')
  
    nom
    <input value="{{$project->name}}" type="text" class="form-control" name="name" id="name">
  </div>
  <br/>
  Comment
  <textarea value="" class="form-control" rows="5" id="description" name="description">{{$project->description}}</textarea>
 
  <br>
    <button type="submit" class="btn btn-default">Submit</button>
</form> 
