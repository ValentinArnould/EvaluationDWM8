@extends('base')

@section('compléments')
  <style>
    body {
      background: url('images/accueil-wallpaper.jpg') center;
      background-size: 140%;
    }
  </style>
@endsection

@section('titre', 'JCRU2DR - Accueil')

@section('main')
  <h1> JCRU2DR Créer son personnage de JDR</h1>
  <div class="container">

    {{ Form::open(array('url' => '/', 'method' => 'get')) }}
    <div class="form-group formul">

      <a href="/createChar">
        {{ Form::button("Création d'un personnage",array('class' => 'form-control')) }}
      </a>
      <a href="/read">
        {{ Form::button("Voir",array('class' => 'form-control')) }}
      </a>
      <a href="/add">
        {{ Form::button("Ajouter",array('class' => 'form-control')) }}
      </a>
      <a href="/delete">
        {{ Form::button("Supprimer",array('class' => 'form-control')) }}
      </a>
      <a href="/update">
        {{ Form::button("Changer",array('class' => 'form-control')) }}
      </a>
      <a href="/import">
        {{ Form::button("Importer",array('class' => 'form-control')) }}
      </a>
      <a href="/export">
        {{ Form::button("Exporter",array('class' => 'form-control')) }}
      </a>

    </div>
    {{ Form::close() }}

  </div>
@endsection
