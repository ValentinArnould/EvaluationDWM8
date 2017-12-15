@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Ajouter une race')

@section('main')

  <h1>Nouvelle race</h1>
  <div class="container">

    {{ Form::open(array('url' => '/add/race/new', 'method' => 'post')) }}

    <div class="form-group formul">
        {{ Form::label("Nom_Race", "Nom de la race", array('class' => 'form-control')) }}
        {{ Form::text("Nom", "",array('class' => 'form-control')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Description_Race", "Description", array('class' => 'form-control')) }}
        {{ Form::textarea("Description", "",array('class' => 'form-control', 'rows' => '3')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Habitat_Race", "Habitat", array('class' => 'form-control')) }}
        {{ Form::text("Habitat", "",array('class' => 'form-control')) }}
    </div>

    <div class="form-group formul ajoutDons">
        {{ Form::label("Dons_Race", "Dons", array('class' => 'form-control')) }}
        {{ Form::select("Dons",array_column($dons,"nom"), "",array('class' => 'form-control', 'id' => 'dons')) }}
        {{ Form::button("Ajouter",array('class' => 'form-control', 'id' => 'Ajoutdons'))}}
    </div>

    <div class="form-group formul">
        {{ Form::label("Faiblesses_Race", "Faiblesses", array('class' => 'form-control')) }}
        {{ Form::textarea("Faiblesses", "",array('class' => 'form-control', 'rows' => '3')) }}
    </div>
    <div class="form-group formul">
        {{ Form::submit("Création",array('class' => 'form-control', 'rows' => '3')) }}
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
