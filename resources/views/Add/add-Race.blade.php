@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Ajouter une race')

@section('main')

  <h1>Nouvelle race</h1>
  <div class="container">

    {{ Form::open(array('url' => '/add/race/new', 'method' => 'post', 'id' => 'RaceAddForm')) }}

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
        {{ Form::select("DonsChoix",array_column($dons,"nom"), "",array('class' => 'form-control', 'id' => 'dons')) }}
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
        {{ Form::submit("Création",array('class' => 'form-control RaceNew')) }}
    </div>
    {{ Form::close() }}

    <p><a href="/add">Retour</a></p>
  </div>

  <script type="text/javascript">
    var PHParray = @php echo json_encode($dons); @endphp;
    $(document).ready(function() {
      $('#Ajoutdons').on('click', function() {
        NouveauDon(PHParray);
      });
      /*$('.close').on('click', function(){
        $(this).parents('.DonPris').remove();
      });*/
    });
  </script>
@endsection
