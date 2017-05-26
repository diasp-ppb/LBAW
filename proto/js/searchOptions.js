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
        if (this.checked) {
            $('.resultTitle').show("slow");
        } else {
            $('.resultTitle').hide("slow");
        }
        results();
    });


    $('#search_tags').click(function() {
        if (this.checked)
            $('.resultTag').show("slow");
        else
            $('.resultTag').hide("slow");

        results();
    });


    $('#search_users').click(function() {
        if (this.checked)
            $('.resultUser').show("slow");
        else
            $('.resultUser').hide("slow");

        results();
    });


    $('#search_content').click(function() {

        if (this.checked)
            $('.resultContent').show("slow");
        else
            $('.resultContent').hide("slow");

        results();
    });

    results();
});

function results() {


    if ($('#search_users').length > 0 &&
        $('#search_tags').length > 0 &&
        $('#search_users').length > 0 &&
        $('#search_title').length > 0) {

        var tagLength = $(".resultTag").length;
        var titleLenght = $(".resultTitle").length;
        var contentLenght = $(".resultContent").length;
        var total = tagLength + titleLenght + contentLenght;

        if (total < 1) {
            $(".info-msg-topic").show();
        } else {
            var tags = $('#search_tags')[0].checked;
            var title = $('#search_title')[0].checked;
            var content = $('#search_content')[0].checked;

            if (tags != true) {
                total -= tagLength;
            }

            if (content != true) {
                total -= contentLenght;

            }

            if (title != true) {
                total = total - titleLenght;
            }


            if (total > 0) {
                $(".info-msg-topic").hide();
            } else {
                $(".info-msg-topic").show();
            }
        }

        if ($(".resultUser").length < 1 || $('#search_users')[0].checked == false) {
            $(".info-msg-user").show();
        } else {
            $(".info-msg-user").hide();
        }
    }

}