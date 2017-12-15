@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Ajouter une race')

@section('main')

  <h1>Nouvelle race</h1>
  <div class="container">

    {{ Form::open(array('url' => '/update/race/update', 'method' => 'post', 'id' => 'RaceUpdateForm')) }}

    <div class="form-group formul RaceChoix">
        {{ Form::label("RaceChoix", "Choix de la race", array('class' => 'form-control')) }}
        {{ Form::select("ChoixRace",$races, "",array('class' => 'form-control', 'id' => 'choixR')) }}
        {{ Form::button("Modifier",array('class' => 'form-control', 'id' => 'ChoixdeRace'))}}
    </div>


    <div class="form-group formul">
        {{ Form::label("Nom_Race", "Nom de la race", array('class' => 'form-control')) }}
        {{ Form::text("nom", "",array('class' => 'form-control')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Description_Race", "Description", array('class' => 'form-control')) }}
        {{ Form::textarea("description", "",array('class' => 'form-control', 'rows' => '3')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Habitat_Race", "Habitat", array('class' => 'form-control')) }}
        {{ Form::text("habitat", "",array('class' => 'form-control')) }}
    </div>

    <div class="form-group formul ajoutDons">
        {{ Form::label("Dons_Race", "Dons", array('class' => 'form-control')) }}
        {{ Form::select("DonsChoix",$races, "",array('class' => 'form-control', 'id' => 'dons')) }}
        {{ Form::text("dons","",array('class' => 'form-control envoiDons', 'style' => 'display: none')) }}
        {{ Form::button("Ajouter",array('class' => 'form-control', 'id' => 'Ajoutdons'))}}
    </div>

    <div class="form-group formul">
        {{ Form::label("Faiblesse_Race", "Faiblesses", array('class' => 'form-control')) }}
        {{ Form::textarea("faiblesses", "",array('class' => 'form-control', 'rows' => '3')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Person", "Personnalisé", array('class' => 'form-control')) }}
        {{ Form::textarea("custom", "",array('class' => 'form-control', 'rows' => '3')) }}
    </div>

    <div class="form-group formul">
        {{ Form::submit("Modification",array('class' => 'form-control RaceNew')) }}
    </div>
    {{ Form::close() }}

    <p><a href="/add">Retour</a></p>
  </div>

  <script type="text/javascript">

    $(document).ready(function() {
      $('#ChoixdeRace').on('click', function() {
        alert($( "#choixR option:selected" ).text())
      });
      /*$('.close').on('click', function(){
        $(this).parents('.DonPris').remove();
      });*/
    });
  </script>
@endsection
