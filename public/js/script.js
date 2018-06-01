function NouveauDon(PHParray, Dons = []) {
  if(Dons.length > 0) {
    var AjoutDons = Dons;
  }
  else {
    var AjoutDons = []
    AjoutDons.push($( "#dons option:selected" ).text());
  }
  $.each(AjoutDons,function(i,el) {
    var ind = 0;
    var optionInd = 0;
    $( "#dons > option" ).each(function() {
      if(el == $(this).text()) {
        optionInd = (parseInt($(this).val()));
      }
    });
    for(hey in PHParray) {
      //alert((parseInt($( "#dons option:selected" ).val()) + 1));
      if (hey == optionInd) {
        ind = hey;
      }
    }
    if (!($('.DonsAjoutes').length)) {
      $('.ajoutDons').append('<div class="DonsAjoutes container"></div>');
    }
    if ($('.DonsAjoutes').length) {
      if (!($('#' + el + 'Collapse').length)) {
        html = '<div class="DonPris">';
        html += "<p>";
          html += '<a id="' + el + '-coll"class="btn btn-light" data-toggle="collapse" href="#' + el + 'Collapse" aria-expanded="false" aria-controls="' + el + 'Collapse">';
            html += el;
            html += '<a class="suppress" href="#" onClick="suppress(this)">×</a>';
          html += '</a>';
        html += '</p>';
        html += '<div class="collapse" id="' + el + 'Collapse">';
          html += '<div class="card card-body">';
            html += '' + PHParray[ind].description + '<br>'
            + PHParray[ind].effet + '<br> cout ' + PHParray[ind].cout;
          html += '</div>';
        html += '</div>';
        html += '</div>';
        $('.DonsAjoutes').append(html);
      }
    }
  });
}

function ModifRace(PHParray,PHParray2) {
  var ind = 0;
  for(hey in PHParray) {
    //alert((parseInt($( "#dons option:selected" ).val()) + 1));
    if (PHParray[hey].nom == $( "#choixR option:selected" ).text()) {
      ind = hey;
      //alert(PHParray[hey].description);
      $('#nomR').val(PHParray[ind].nom); // faire en sorte que tous les champs se remplissent de la race
      $('#descR').val(PHParray[ind].description);
      $('#habR').val(PHParray[ind].habitat);
      $('.DonsAjoutes').remove();
      NouveauDon(PHParray2,JSON.parse(PHParray[ind].dons));
      $('#faibR').val(PHParray[ind].faiblesses);
      $('#customR').val(PHParray[ind].custom);
    }
  }
}

function ModifClasse(PHParray) {
  var ind = 0;
  for(hey in PHParray) {
    //alert((parseInt($( "#dons option:selected" ).val()) + 1));
    if (PHParray[hey].nom == $( "#choixC option:selected" ).text()) {
      ind = hey;
      //alert(PHParray[hey].description);
      $('#nomC').val(PHParray[ind].nom); // faire en sorte que tous les champs se remplissent de la classe
      $('#descC').val(PHParray[ind].description);
      $('#typeC').val(PHParray[ind].type);
    }
  }
}

$(document).ready(function() {
});
