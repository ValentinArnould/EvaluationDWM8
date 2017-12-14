@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Accueil')

@section('main')
  <h1> Suppression de contenu</h1>
  <div class="container">
    {{ Form::open(array('url' => '/', 'method' => 'get')) }}
    <div class="form-group formul">
      <a href="/delete/race">
        {{ Form::button("Race",array('class' => 'form-control')) }}
      </a>
      <a href="/delete/classe">
        {{ Form::button("Classe",array('class' => 'form-control')) }}
      </a>
      <a href="/delete/competence">
        {{ Form::button("Compétence",array('class' => 'form-control')) }}
      </a>
      <a href="/delete/don">
        {{ Form::button("Don",array('class' => 'form-control')) }}
      </a>
      <a href="/delete/custom">
        {{ Form::button("Contenu personnalisé",array('class' => 'form-control')) }}
      </a>
    </div>
    {{ Form::close() }}

    <p><a href="/">Retour</a></p>
  </div>
@endsection
