<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etudent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
  <div class="row">
    <div class="col 12">
    <h1>tableau de bord</h1>
    <a href="/ajouter" class="btn btn-primary">ajouter un etudiant</a>
    <hr>
    @if(session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
    @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenoms</th>
      <th scope="col">Matricule</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- pour afficher la liste des etudiants depuis la bd-->
    @foreach($etudiants as $etudiant)
    <tr>
      <td>{{$etudiant->id}}</td>
      <td>{{$etudiant->nom}}</td>
      <td>{{$etudiant->prenoms}}</td>
      <td>{{$etudiant->matricule}}</td>
      <td>
      <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-info">Update</a>
      <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>