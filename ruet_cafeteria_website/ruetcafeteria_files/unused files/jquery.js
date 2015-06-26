$(function(){
  $("#txt").keypress(function(e){
    if(e.which == 97 || e.which == 98 || e.which == 99 || e.which == 110 || e.which == 111 || e.which == 65 || e.which == 66 || e.which == 67 || e.which == 78 || e.which == 79 || e.which == 49 || e.which == 50 || e.which == 51 || e.which == 52 || e.which == 53){
    } else {
      alert("invalid");
    }
  });
});