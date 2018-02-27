$(document).ready(function(){
  $('.relations li').on('click',function(){
    var relation = $(this).text();
    $.ajax({
        type: 'GET',
        dataType: 'html',
        url: relation + '.php',
        success: function(response){
          $('.table-display').html(response);
        }
    });
  })
});
