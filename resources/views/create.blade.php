
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <h3>Add Films</h3>
    <a href="{{ route('create') }}" ></a>
<form method="POST" action="{{ route('create') }}" enctype="multipart/form-data" >

    @csrf

    <div class="form-group">
        <label for="label">Catégorie</label>
        <div class="select">
            <select name="categorie_id">
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    
   <div class="form-group>
    <label for="name" >Title: </label>
    <input type="text" class="form-control" name="title" />
</div> 

<div class="form-group>
    <label for="name" >Year: </label>
    <input type="text" class="form-control" name="year" />
</div> 

<div class="form-group>
    <label for="name" >Description: </label>
    <input type="text" class="form-control" name="description" />
</div> 



<button type="submit" class="btn btn-primary" >Add Films</button>



</form>


    


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>