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
        html += '<a class="btn btn-light" data-toggle="collapse" href="#' + AjoutDon + 'Collapse" aria-expanded="false" aria-controls="' + AjoutDon + 'Collapse">';
          html += AjoutDon;
        html += '</a>';
        //html += '<a class="close" href="#">×</a>';
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
}

$(document).ready(function() {

});
