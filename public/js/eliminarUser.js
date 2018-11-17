$(document).ready(function(){
    $('.btnD').click(function(e){
      e.preventDefault();

      var row = $(this).parents('tr');
      var form = $(this).parents('form');
      var url = form.attr('action');

      $.post(url,form.serialize(), function(result){
        row.fadeOut();
        $('#users_total').html(result.total);
        $("#cont").load(" #cont");
      }).fail(function(){
        alert('algo salio mal');
      });
    });

});
