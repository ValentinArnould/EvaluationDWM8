@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Supprimer une classe')

@section('main')

  <h1>Classe à supprimer</h1>
  <div class="container">

    {{ Form::open(array('url' => '/delete/classe/del', 'method' => 'post', 'id' => 'ClasseDelForm')) }}

    <div class="form-group formul ajoutDons">
        {{ Form::label("Classe", "Classe à supprimer", array('class' => 'form-control')) }}
        {{ Form::select("ChoixClasse",$classes, "",array('class' => 'form-control', 'id' => 'ClasseChoix')) }}
    </div>

    <div class="form-group formul">
        {{ Form::submit("Suppression",array('class' => 'form-control ClasseDel')) }}
    </div>
    {{ Form::close() }}

    <p><a href="/delete">Retour</a></p>
  </div>

  <script type="text/javascript">
  </script>
@endsection
