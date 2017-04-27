$(document).ready(function() {
    $("#createTopicForm").on("keyup keypress", function(e) {
        console.log("pressed");

        var keyCode = e.keyCode || e.which;
        if (!$("#wmd-input").is(":focus"))
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        return true;
    });

});