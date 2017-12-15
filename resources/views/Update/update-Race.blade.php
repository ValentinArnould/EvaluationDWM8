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
        {{ Form::select("ChoixRace",array_column($races,"nom"), "",array('class' => 'form-control', 'id' => 'choixR')) }}
        {{ Form::button("Modifier",array('class' => 'form-control', 'id' => 'ChoixdeRace'))}}
    </div>


    <div class="form-group formul">
        {{ Form::label("Nom_Race", "Nom de la race", array('class' => 'form-control')) }}
        {{ Form::text("nom", "",array('class' => 'form-control', 'id' => 'nomR')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Description_Race", "Description", array('class' => 'form-control')) }}
        {{ Form::textarea("description", "",array('class' => 'form-control', 'rows' => '3', 'id' => 'descR')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Habitat_Race", "Habitat", array('class' => 'form-control')) }}
        {{ Form::text("habitat", "",array('class' => 'form-control', 'id' => 'habR')) }}
    </div>

    <div class="form-group formul ajoutDons">
        {{ Form::label("Dons_Race", "Dons", array('class' => 'form-control')) }}
        {{ Form::select("DonsChoix",array_column($dons,"nom"), "",array('class' => 'form-control', 'id' => 'dons')) }}
        {{ Form::text("dons","",array('class' => 'form-control envoiDons', 'style' => 'display: none', 'id' => 'donsR')) }}
        {{ Form::button("Ajouter",array('class' => 'form-control', 'id' => 'Ajoutdons'))}}
    </div>

    <div class="form-group formul">
        {{ Form::label("Faiblesse_Race", "Faiblesses", array('class' => 'form-control')) }}
        {{ Form::textarea("faiblesses", "",array('class' => 'form-control', 'rows' => '3', 'id' => 'faibR')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Person", "Personnalisé", array('class' => 'form-control')) }}
        {{ Form::textarea("custom", "",array('class' => 'form-control', 'rows' => '3', 'id' => 'customR')) }}
    </div>

    <div class="form-group formul">
        {{ Form::submit("Modification",array('class' => 'form-control RaceNew')) }}
    </div>
    {{ Form::close() }}

    {{ var_dump($races) }}
    <p><a href="/update">Retour</a></p>
  </div>

  <script type="text/javascript">
    var PHParray = @php echo json_encode($races); @endphp;
    $(document).ready(function() {
      $('#ChoixdeRace').on('click', function() {
        //alert($( "#choixR option:selected" ).text())
        ModifRace(PHParray);
      });
      /*$('.close').on('click', function(){
        $(this).parents('.DonPris').remove();
      });*/
    });
  </script>
@endsection
