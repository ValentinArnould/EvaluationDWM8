@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Ajouter un don')

@section('main')

  <h1>Nouveau Don</h1>

  <div class="container">

    {{ Form::open(array('url' => '/add/don/new', 'method' => 'post', 'id' => 'DonAddForm')) }}

      <div class="form-group formul">
          {{ Form::label("Nom_Don", "Nom du don", array('class' => 'form-control')) }}
          {{ Form::text("nom", "",array('class' => 'form-control')) }}
      </div>

      <div class="form-group formul">
          {{ Form::label("Description_Don", "Description", array('class' => 'form-control')) }}
          {{ Form::textarea("description", "",array('class' => 'form-control', 'rows' => '3')) }}
      </div>

      <div class="form-group formul">
          {{ Form::label("Effet_Don", "Effet", array('class' => 'form-control')) }}
          {{ Form::text("effet", "",array('class' => 'form-control')) }}
      </div>

      <div class="form-group formul">
          {{ Form::label("Cout_Don", "Coût (peut ne pas en avoir)", array('class' => 'form-control')) }}
          {{ Form::text("cout", "",array('class' => 'form-control')) }}
      </div>

      <div class="form-group formul">
          {{ Form::submit("Création",array('class' => 'form-control DonNew')) }}
      </div>

    {{ Form::close() }}

    <p><a href="/add">Retour</a></p>
  </div>

@endsection
