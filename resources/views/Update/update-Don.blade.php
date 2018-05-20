@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Modifier un don')

@section('main')

  <h1>Modifier un don</h1>
  <div class="container">

    {{ Form::open(array('url' => '/update/don/update', 'method' => 'post', 'id' => 'DonUpdateForm')) }}

    <div class="form-group formul DonChoix">
        {{ Form::label("DonChoix", "Choix du don", array('class' => 'form-control')) }}
        {{ Form::select("ChoixDon",array_column($dons,"nom"), "",array('class' => 'form-control', 'id' => 'choixD')) }}
        {{ Form::button("Modifier",array('class' => 'form-control', 'id' => 'ChoixdeDon'))}}
    </div>

    <div class="form-group formul">
        {{ Form::label("Nom_Don", "Nom du don", array('class' => 'form-control')) }}
        {{ Form::text("nom", "",array('class' => 'form-control', 'id' => 'nomD')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Description_Don", "Description", array('class' => 'form-control')) }}
        {{ Form::textarea("description", "",array('class' => 'form-control', 'rows' => '3', 'id' => 'descD')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Effet_Don", "Effet", array('class' => 'form-control')) }}
        {{ Form::text("effet", "",array('class' => 'form-control', 'id' => 'effetD')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Cout_Don", "Coût (peut ne pas en avoir)", array('class' => 'form-control')) }}
        {{ Form::text("cout", "",array('class' => 'form-control', 'id' => 'coutD')) }}
    </div>

    <div class="form-group formul">
        {{ Form::submit("Modification",array('class' => 'form-control DonModif')) }}
    </div>
    {{ Form::close() }}

    <p><a href="/update">Retour</a></p>
  </div>

  <script type="text/javascript">
    var PHParray = @php echo json_encode($dons); @endphp;
    $(document).ready(function() {
      $('#ChoixdeDon').on('click', function() {
        //alert($( "#choixR option:selected" ).text())
        ModifDon(PHParray);
      });
      /*$('.close').on('click', function(){
        $(this).parents('.DonPris').remove();
      });*/
    });
  </script>
@endsection
