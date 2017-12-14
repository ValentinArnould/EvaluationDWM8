@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Modifier')

@section('main')

  <h1> Modifications </h1>
  <div class="container">
    {{ Form::open(array('url' => '/', 'method' => 'get')) }}
    <div class="form-group formul">
      <a href="/update/race">
        {{ Form::button("Race",array('class' => 'form-control')) }}
      </a>
      <a href="/update/classe">
        {{ Form::button("Classe",array('class' => 'form-control')) }}
      </a>
      <a href="/update/competence">
        {{ Form::button("Compétence",array('class' => 'form-control')) }}
      </a>
      <a href="/update/don">
        {{ Form::button("Don",array('class' => 'form-control')) }}
      </a>
      <a href="/update/custom">
        {{ Form::button("Contenu personnalisé",array('class' => 'form-control')) }}
      </a>
    </div>
    {{ Form::close() }}

    <p><a href="/">Retour</a></p>
  </div>

@endsection
