$(document).ready(function() {

    $("createTopicForm").on("keypress", function(e) {
        console.log("pressed");
        return e.keyCode != 13;
    });

});