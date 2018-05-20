@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Ajouter une classe')

@section('main')

  <h1>Nouvelle Classe</h1>

  <div class="container">

    {{ Form::open(array('url' => '/add/classe/new', 'method' => 'post', 'id' => 'ClasseAddForm')) }}

      <div class="form-group formul">
          {{ Form::label("Nom_Classe", "Nom de la classe", array('class' => 'form-control')) }}
          {{ Form::text("nom", "",array('class' => 'form-control')) }}
      </div>

      <div class="form-group formul">
          {{ Form::label("Description_Classe", "Description", array('class' => 'form-control')) }}
          {{ Form::textarea("description", "",array('class' => 'form-control', 'rows' => '3')) }}
      </div>

      <div class="form-group formul">
          {{ Form::label("Type_Classe", "Type", array('class' => 'form-control')) }}
          {{ Form::text("type", "",array('class' => 'form-control')) }}
      </div>

      <div class="form-group formul">
          {{ Form::submit("Création",array('class' => 'form-control ClasseNew')) }}
      </div>

    {{ Form::close() }}

    <p><a href="/add">Retour</a></p>
  </div>

@endsection
