$(document).ready(function(){
  $("#button").click(function(){
  var $name = $("#name").val();
  var $firstname = $("#firstname").val();
  var $msg = $("#msg").val();
  $("#result").append($name,$firstname,$msg);

  //$( "p" ).append( "<p>Hello</p>" );
 // $( « # »resultat ).append( "<strong>Hello</strong>" );
 // $('#result').append('<p>'$name'</p>');




  });
});
