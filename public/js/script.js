function NouveauDon(PHParray) {
  var AjoutDon = $( "#dons option:selected" ).text();
  var ind = 0;
  for(hey in PHParray) {
    //alert((parseInt($( "#dons option:selected" ).val()) + 1));
    if (hey == (parseInt($( "#dons option:selected" ).val()) + 1) ) {
      ind = hey;
    }
  }
  if (!($('.DonsAjoutes').length)) {
    $('.ajoutDons').append('<div class="DonsAjoutes container"></div>');
  }
  if ($('.DonsAjoutes').length) {
    if (!($('#' + AjoutDon + 'Collapse').length)) {
      html = '<div class="DonPris">';
      html += "<p>";
        html += '<a id="' + AjoutDon + '-coll"class="btn btn-light" data-toggle="collapse" href="#' + AjoutDon + 'Collapse" aria-expanded="false" aria-controls="' + AjoutDon + 'Collapse">';
          html += AjoutDon;
          html += '<a class="suppress" href="#" onClick="suppress(this)">×</a>';
        html += '</a>';
      html += '</p>';
      html += '<div class="collapse" id="' + AjoutDon + 'Collapse">';
        html += '<div class="card card-body">';
          html += '' + PHParray[ind].description + '<br>'
          + PHParray[ind].effet + '<br> cout ' + PHParray[ind].cout;
        html += '</div>';
      html += '</div>';
      html += '</div>';
      $('.DonsAjoutes').append(html);
    }
  }
  var TotalDons = [];
  for(compte in PHParray)
  {
    if($('#' + PHParray[compte].nom + '-coll').length) {
      //alert('#' + PHParray[compte].nom + '-coll');
      TotalDons.push(PHParray[compte].nom);
    }
  }
  $('#RaceAddForm').submit(function(event) {
    //alert(JSON.stringify(TotalDons));
    $('.envoiDons').val(JSON.stringify(TotalDons));
  });
}

function ModifRace(PHParray) {
  var ind = 0;
  for(hey in PHParray) {
    //alert((parseInt($( "#dons option:selected" ).val()) + 1));
    if (PHParray[hey].nom == $( "#choixR option:selected" ).text()) {
      ind = hey;
      //alert(PHParray[hey].description);
      $('#nomR').val(PHParray[ind].nom); // faire en sorte que tous les champs se remplissent de la race
    }
  }
}

$(document).ready(function() {
});
