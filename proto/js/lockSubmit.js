$(document).ready(function() {

    console.log("asdasdad");

    $("form").on("keypress", function(e) {
        console.log("pressed");
        return e.keyCode != 13;
    });

});