@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Ajouter')

@section('main')

  <h1> Ajout de contenu</h1>
  <div class="container">
    {{ Form::open(array('url' => '/', 'method' => 'get')) }}
    <div class="form-group formul">
      <a href="/add/race">
        {{ Form::button("Race",array('class' => 'form-control')) }}
      </a>
      <a href="/add/classe">
        {{ Form::button("Classe",array('class' => 'form-control')) }}
      </a>
      <a href="/add/competence">
        {{ Form::button("Compétence",array('class' => 'form-control')) }}
      </a>
      <a href="/add/don">
        {{ Form::button("Don",array('class' => 'form-control')) }}
      </a>
      <a href="/add/custom">
        {{ Form::button("Contenu personnalisé",array('class' => 'form-control')) }}
      </a>
    </div>
    {{ Form::close() }}

    <p><a href="/">Retour</a></p>
  </div>

@endsection
