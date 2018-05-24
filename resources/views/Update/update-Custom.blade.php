@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Modifier du contenu personnalisé')

@section('main')

  <h1>Modifier contenu personnalisé</h1>
  <div class="container">

    {{ Form::open(array('url' => '/update/custom/update', 'method' => 'post', 'id' => 'CustomUpdateForm')) }}

    <div class="form-group formul CustomChoix">
        {{ Form::label("CustomChoix", "Choix du contenu", array('class' => 'form-control')) }}
        {{ Form::select("ChoixCustom",array_column($customs,"nom"), "",array('class' => 'form-control', 'id' => 'choixCu')) }}
        {{ Form::button("Modifier",array('class' => 'form-control', 'id' => 'ChoixdeCustom'))}}
    </div>

    <div class="form-group formul">
        {{ Form::label("Nom_Custom", "Nom de la custom", array('class' => 'form-control')) }}
        {{ Form::text("nom", "",array('class' => 'form-control', 'id' => 'nomCu')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Description_Custom", "Description", array('class' => 'form-control')) }}
        {{ Form::textarea("description", "",array('class' => 'form-control', 'rows' => '3', 'id' => 'descCu')) }}
    </div>

    <div class="form-group formul">
        {{ Form::label("Type_Custom", "Type", array('class' => 'form-control')) }}
        {{ Form::text("type", "",array('class' => 'form-control', 'id' => 'typeCu')) }}
    </div>

    <div class="form-group formul">
        {{ Form::submit("Modification",array('class' => 'form-control CustomModif')) }}
    </div>
    {{ Form::close() }}

    <p><a href="/update">Retour</a></p>
  </div>

  <script type="text/javascript">
    var PHParray = @php echo json_encode($customs); @endphp;
    $(document).ready(function() {
      $('#ChoixdeCustom').on('click', function() {
        //alert($( "#choixR option:selected" ).text())
        ModifCustom(PHParray);
      });
      /*$('.close').on('click', function(){
        $(this).parents('.DonPris').remove();
      });*/
    });
  </script>
@endsection
