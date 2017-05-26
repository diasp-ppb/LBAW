$(document).ready(function() {
    $('#createTopicForm').submit(function (e) {
       if($("#wmd-input").val().length<20){
           e.preventDefault();
           $('#createTopic-messages').html('<div class="alert alert-warning" role="alert">A descrição tem de ter no mínimo 20 caracteres.</div>');
       }
    });

});