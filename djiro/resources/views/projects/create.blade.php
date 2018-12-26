<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>
	create un project
</h2>

 <form action="/project" method="POST">
  @csrf
    nom
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <br/>
 
  Comment
  <textarea class="form-control" rows="5" id="description" name="description"></textarea>
 
  <br>
    <button type="submit" class="btn btn-default">Submit</button>
</form> 

</body>
</html>
</body>
</html>