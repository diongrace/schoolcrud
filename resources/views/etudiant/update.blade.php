<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etudent update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
  <div class="row">
    <div class="col 12">
    <h1>tableau de bord</h1>
    <hr>

    @if(session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
    @endif

    <ul>
    @foreach($errors->all() as $error)
      <li class="alert alert-danger">{{$error}}</li>
     @endforeach
      
    </ul>
    
    <form action="/update/traitement" method="post">
      @csrf

     <input type="number" name="id" style="display: none;" value="{{$etudiant->id}}">
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nom" value="{{$etudiant->nom}}">
  </div>
  <div class="form-group">
    <label for="prenoms">Prenoms</label>
    <input type="text" class="form-control" id="prenoms" name="prenoms" value="{{$etudiant->prenoms}}">
  </div>
  <div class="form-group">
    <label for="matricule">Matricule</label>
    <input type="text" class="form-control" id="matricule" name="matricule" value="{{$etudiant->matricule}}">
  </div>
  <br>
  <div>
  <button type="submit" class="btn btn-warning">Modifier un etudiant</button>
  <a href="/etudiant" class="btn btn-primary">Liste des etudiant</a>
</div>
</form>
    </div>
  
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>