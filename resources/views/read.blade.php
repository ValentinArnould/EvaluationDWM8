@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Voir')

@section('main')

  <h1> Voir le contenu</h1>
  <div class="container">
    {{ Form::open(array('url' => '/', 'method' => 'get')) }}
    <div class="form-group formul">
      <a href="/read/race">
        {{ Form::button("Race",array('class' => 'form-control')) }}
      </a>
      <a href="/read/classe">
        {{ Form::button("Classe",array('class' => 'form-control')) }}
      </a>
      <a href="/read/competence">
        {{ Form::button("Compétence",array('class' => 'form-control')) }}
      </a>
      <a href="/read/don">
        {{ Form::button("Don",array('class' => 'form-control')) }}
      </a>
      <a href="/read/custom">
        {{ Form::button("Contenu personnalisé",array('class' => 'form-control')) }}
      </a>
    </div>
    {{ Form::close() }}

    <p><a href="/">Retour</a></p>
  </div>

@endsection
