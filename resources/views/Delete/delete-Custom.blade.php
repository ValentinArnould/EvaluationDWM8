@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Supprimer du contenu personnalisé')

@section('main')

  <h1>Contenu personnalisé à supprimer</h1>
  <div class="container">

    {{ Form::open(array('url' => '/delete/custom/del', 'method' => 'post', 'id' => 'CustomDelForm')) }}

    <div class="form-group formul ajoutDons">
        {{ Form::label("Custom", "Contenu à supprimer", array('class' => 'form-control')) }}
        {{ Form::select("ChoixCustom",$customs, "",array('class' => 'form-control', 'id' => 'CustomChoix')) }}
    </div>

    <div class="form-group formul">
        {{ Form::submit("Suppression",array('class' => 'form-control CustomDel')) }}
    </div>
    {{ Form::close() }}

    <p><a href="/delete">Retour</a></p>
  </div>

  <script type="text/javascript">
  </script>
@endsection
