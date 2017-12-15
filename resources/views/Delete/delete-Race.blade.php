@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Supprimer une race')

@section('main')

  <h1>Race à supprimer</h1>
  <div class="container">

    {{ Form::open(array('url' => '/delete/race/del', 'method' => 'post', 'id' => 'RaceDelForm')) }}

    <div class="form-group formul ajoutDons">
        {{ Form::label("Race", "Race à supprimer", array('class' => 'form-control')) }}
        {{ Form::select("ChoixRace",$races, "",array('class' => 'form-control', 'id' => 'RaceChoix')) }}
    </div>

    <div class="form-group formul">
        {{ Form::submit("Suppression",array('class' => 'form-control RaceDel')) }}
    </div>
    {{ Form::close() }}

    <p><a href="/add">Retour</a></p>
  </div>

  <script type="text/javascript">

      /*$('.close').on('click', function(){
        $(this).parents('.DonPris').remove();
      });*/
    });
  </script>
@endsection
