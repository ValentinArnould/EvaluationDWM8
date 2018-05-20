@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Modifier une classe')

@section('main')

  <h1>Nouvelle race</h1>
  <div class="container">

    {{ Form::open(array('url' => '/update/classe/update', 'method' => 'post', 'id' => 'ClasseUpdateForm')) }}

    <div class="form-group formul ClasseChoix">
        {{ Form::label("ClasseChoix", "Choix de la classe", array('class' => 'form-control')) }}
        {{ Form::select("ChoixClasse",array_column($classes,"nom"), "",array('class' => 'form-control', 'id' => 'choixC')) }}
        {{ Form::button("Modifier",array('class' => 'form-control', 'id' => 'ChoixdeClasse'))}}
    </div>

    <div class="form-group formul">
        {{ Form::label("Nom_Classe", "Nom de la classe", array('class' => 'form-control')) }}
        {{ Form::text("nom", "",array('class' => 'form-control', 'id' => 'nomC')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Description_Classe", "Description", array('class' => 'form-control')) }}
        {{ Form::textarea("description", "",array('class' => 'form-control', 'rows' => '3', 'id' => 'descC')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Type_Classe", "Type", array('class' => 'form-control')) }}
        {{ Form::text("type", "",array('class' => 'form-control', 'id' => 'typeC')) }}
    </div>

    <div class="form-group formul">
        {{ Form::submit("Modification",array('class' => 'form-control ClasseModif')) }}
    </div>
    {{ Form::close() }}

    <p><a href="/update">Retour</a></p>
  </div>

  <script type="text/javascript">
    var PHParray = @php echo json_encode($classes); @endphp;
    $(document).ready(function() {
      $('#ChoixdeClasse').on('click', function() {
        //alert($( "#choixR option:selected" ).text())
        ModifClasse(PHParray);
      });
      /*$('.close').on('click', function(){
        $(this).parents('.DonPris').remove();
      });*/
    });
  </script>
@endsection
