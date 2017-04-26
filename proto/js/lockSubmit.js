$(document).ready(function() {

    console.log("asdasdad");

    $("createTopicForm").on("keypress", function(e) {
        console.log("pressed");
        return e.keyCode != 13;
    });

});