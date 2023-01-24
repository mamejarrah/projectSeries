

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acteurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    

      <div class="container">
        <h3>Acteurs list</h3>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">PrenomNom</th>
      <th scope="col">Telephone</th>
      <th scope="col">Show</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody >

    @foreach ($acteurs as $acteur)
        
   

    <tr>
      <th scope="row">{{ $acteur->id }}</th>
      <td>{{ $acteur->prenomNom}}</td>
      <td>{{ $acteur->telephone }}</td>

        <td>
            
                <a class="btn btn-info" href="{{ route('showa', $acteur->id)}}">Show</a>

            
        </td>

         <td>
            <form method="POST">
                <a class="btn btn-primary" href="{{ route('edita_acteurs', $acteur->id)}}">Edit</a>

            </form>
        </td>


            <td>
                <form action="{{ route('deletea_acteurs', $acteur->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
    </tr>

     @endforeach
   
  </tbody>
</table>


      </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
   









