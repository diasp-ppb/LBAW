$(document).ready(function() {

    if ($(".resultTitle").length < 1) {
        $("#search_title").prop('checked', false);
    }

    if ($(".resultTag").length < 1) {
        $("#search_tags").prop('checked', false);
    }

    if ($(".resultUser").length < 1) {
        $("#search_users").prop('checked', false);
    }

    if ($(".resultContent").length < 1) {
        $("#search_content").prop('checked', false);
    }

    $("#search_title").click(function() {
        if (this.checked)
            $('.resultTitle').show("slow");
        else
            $('.resultTitle').hide("slow");
    });


    $('#search_tags').click(function() {
        if (this.checked)
            $('.resultTag').show("slow");
        else
            $('.resultTag').hide("slow");
    });


    $('#search_users').click(function() {
        if (this.checked)
            $('.resultUser').show("slow");
        else
            $('.resultUser').hide("slow");
    });


    $('#search_content').click(function() {

        if (this.checked)
            $('.resultContent').show("slow");
        else
            $('.resultContent').hide("slow");
    });

});