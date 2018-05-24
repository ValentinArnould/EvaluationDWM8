@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Ajouter du contenu personnalisé')

@section('main')

<h1>Nouveau contenu personnalisé</h1>

<div class="container">

  {{ Form::open(array('url' => '/add/custom/new', 'method' => 'post', 'id' => 'CustomAddForm')) }}

    <div class="form-group formul">
        {{ Form::label("Nom_Custom", "Nom du contenu", array('class' => 'form-control')) }}
        {{ Form::text("nom", "",array('class' => 'form-control')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Description_Custom", "Description", array('class' => 'form-control')) }}
        {{ Form::textarea("description", "",array('class' => 'form-control', 'rows' => '3')) }}
    </div>

    <div class="form-group formul">
        {{ Form::submit("Création",array('class' => 'form-control CustomNew')) }}
    </div>

  {{ Form::close() }}

  <p><a href="/add">Retour</a></p>
</div>

@endsection
