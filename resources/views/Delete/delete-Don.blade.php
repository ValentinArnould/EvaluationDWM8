@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Supprimer un don')

@section('main')

  <h1>Don à supprimer</h1>
  <div class="container">

    {{ Form::open(array('url' => '/delete/don/del', 'method' => 'post', 'id' => 'DonDelForm')) }}

    <div class="form-group formul ajoutDons">
        {{ Form::label("Don", "Don à supprimer", array('class' => 'form-control')) }}
        {{ Form::select("ChoixDon",$dons, "",array('class' => 'form-control', 'id' => 'DonChoix')) }}
    </div>

    <div class="form-group formul">
        {{ Form::submit("Suppression",array('class' => 'form-control DonDel')) }}
    </div>
    {{ Form::close() }}

    <p><a href="/delete">Retour</a></p>
  </div>

  <script type="text/javascript">
  </script>
@endsection
