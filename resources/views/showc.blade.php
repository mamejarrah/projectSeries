
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body> 

<h3>Categories Details</h3>
<div class="float-end">
                   
   <a href="{{ route('showc', $categorie->id)}}"></a>
 </div>
<table style="border:0px;">
    <tr>

    <td>

        <p><b class="lbl">ID :</b>{{ $categorie->id }}</p>
        <p><b class="lbl">Name :</b>{{ $categorie->name }}</p>
        <p><b class="lbl">Description :</b>{{ $categorie->description }}</p>
       

    </td>
   
    
    
</tr>

</table>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
   