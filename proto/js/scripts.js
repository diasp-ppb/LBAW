// Get query params
var urlParams;
(window.onpopstate = function() {
    var match,
        pl = /\+/g, // Regex for replacing addition symbol with a space
        search = /([^&=]+)=?([^&]*)/g,
        decode = function(s) { return decodeURIComponent(s.replace(pl, " ")); },
        query = window.location.search.substring(1);

    urlParams = {};
    while (match = search.exec(query))
        urlParams[decode(match[1])] = decode(match[2]);
})();

$(document).ready(function() {
    if ($('body').hasClass('admin')) {
        loadAdmin();
    } else if ($('body').hasClass('profile')) {
        loadProfile();
    } else if ($('body').hasClass('createTopic')) {
        loadCreateTopic();
    } else if ($('body').hasClass('editProfile')) {
        loadEditProfile();
    } else if ($('body').hasClass('search')) {
        loadSearch();
    } else if ($('body').hasClass('topic')) {
        loadTopic();
    } else if ($('body').hasClass('help')) {
        loadHelp();
    }

    loadFooter();
});

function loadAdmin() {
    createAdminCharts();
    loadMemberList();
    addDisableButton();
}

function loadProfile() {
    createUserCharts();
    handleTimeline();
}

function loadCreateTopic() {
    validateCreateTopic();
    disableKeySubmit("createTopicForm");
    runTextEditor();
}

function loadEditProfile() {
    handleTemplates();
}

function loadSearch() {
    searchOptions();
}

function loadTopic() {
    updateVisualizations();
    handleReplies();
    runTextEditor();
    handleComments();
    addDeleteButtons();
}


function loadHelp() {}

function verifyVotesButtons(topicId, userId) {
    var tagButton;
    $.ajax({
        type: "post",
        url: "../../api/topic/verify_votes.php",
        data: { topicId: topicId, userId: userId }
    }).done(function(data) {
        var value = JSON.parse(data);
        if (value == 0) {
            tagButton = "#" + topicId + " button.upvote.btn";
            $(tagButton).attr('style', 'background-color:#5cb85c !important');
        } else if (value == 1) {
            tagButton = "#" + topicId + " button.downvote.btn";
            $(tagButton).attr('style', 'background-color:#d9534f !important');
        } else if (value == 2) {}
    });
}



function verifyVotesButtons(topicId, userId) {
    var tagButton;
    $.ajax({
        type: "post",
        url: "../../api/topic/verify_votes.php",
        data: { topicId: topicId, userId: userId }
    }).done(function(data) {
        var value = JSON.parse(data);
        if (value == 0) {
            tagButton = "#" + topicId + " button.upvote.btn";
            $(tagButton).attr('style', 'background-color:#5cb85c !important');
        } else if (value == 1) {
            tagButton = "#" + topicId + " button.downvote.btn";
            $(tagButton).attr('style', 'background-color:#d9534f !important');
        } else if (value == 2) {}
    });
}

/* Função utilizada em calls do 'upvote' (não é necessário fazer load) */
function verifyVote(type, topicId) {
    var voteType = type;
    var topic = topicId;
    var tagTopic = "#" + topic + " button.rating.btn";
    var tagButton;

    $.ajax({
        type: "post",
        url: "../../api/topic/validate_vote.php",
        data: { voteType: voteType, topicId: topic }
    }).done(function(data) {
        var value = JSON.parse(data);

        if (value == 0) {
            if (type == 'upvote') {
                tagButton = "#" + topicId + " button.upvote.btn";
                $(tagButton).removeAttr('style');
                $(tagTopic).text(parseInt($(tagTopic).text()) - 1);
            } else if (type == 'downvote') {
                tagButton = "#" + topicId + " button.downvote.btn";
                $(tagButton).removeAttr('style');
                $(tagTopic).text(parseInt($(tagTopic).text()) + 1);
            }
        } else if (value == 1) {
            if (type == 'upvote') {
                tagButton = "#" + topicId + " button.downvote.btn";
                $(tagButton).removeAttr("style");
                tagButton = "#" + topicId + " button.upvote.btn";
                $(tagButton).attr('style', 'background-color:#5cb85c !important');
                $(tagTopic).text(parseInt($(tagTopic).text()) + 2);
            } else if (type == 'downvote') {
                tagButton = "#" + topicId + " button.upvote.btn";
                $(tagButton).removeAttr("style");
                tagButton = "#" + topicId + " button.downvote.btn";
                $(tagButton).attr('style', 'background-color:#d9534f !important');
                $(tagTopic).text(parseInt($(tagTopic).text()) - 2);
            }
        } else if (value == 2) {
            if (type == 'upvote') {
                tagButton = "#" + topicId + " button.upvote.btn";
                $(tagButton).attr('style', 'background-color:#5cb85c !important');
                $(tagTopic).text(parseInt($(tagTopic).text()) + 1);
            } else if (type == 'downvote') {
                tagButton = "#" + topicId + " button.downvote.btn";
                $(tagButton).attr('style', 'background-color:#d9534f !important');
                $(tagTopic).text(parseInt($(tagTopic).text()) - 1);
            }
        }

    });

    return false;
}





function updateVisualizations() {
    if (performance.navigation.type == 0) {
        $.ajax({
            type: "post",
            url: "../../api/topic/updateVisualizations.php",
            data: {
                id: urlParams['id']
            }
        });
    }
}

function loadFooter() {
    var docHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < docHeight) {
        $('#footer').css('margin-top', 10 + (docHeight - footerTop) + 'px');
    }
}


function createAdminCharts() {
    $.ajax({
        type: "post",
        url: "../../api/admin/getChartsInfo.php",
        data: {}
    }).done(function(data) {
        var info = JSON.parse(data);
        var ctx = document.getElementById("topics-by-tags").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: info[0],
                datasets: [{
                    label: "tags",
                    backgroundColor: [
                        "#2ecc71",
                        "#3498db",
                        "#93a5a6",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e"
                    ],
                    data: info[1]
                }],
            },

            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                }
            }
        });
    });
}

function addDisableButton() {
    $(".disable-member").click(
        function() {
            $.post("../../api/member/disableMember.php", {
                id: $(this).attr("id")
            });

            $(this).replaceWith('<span class="pull-right">Disabled</span>')
        }
    );
}

function loadMemberList() {
    $('#user-pagination').twbsPagination({
        totalPages: pages,
        visiblePages: 10,
        first: 'Inicio',
        prev: 'Anterior',
        next: 'Seguinte',
        last: 'Fim',
        onPageClick: function(event, page) {
            $.getJSON("../../api/member/memberList.php", {
                page: page - 1
            }, function(data) {
                $('#userlist .list-group').empty();
                for (var i = 0; i < data.length; i++) {
                    $('#userlist .list-group').append('<li class="list-group-item"> \
                    <a href="../../pages/member/profile.php?id=' + data[i].id + '">' + data[i].name + '</a> \
                    <i id="' + data[i].id + '" + class="glyphicon glyphicon-remove pull-right disable-member"></i> \
                    </li>');
                }
                addDisableButton();
            });
        }
    });
}


function createUserCharts() {
    var userId = urlParams['id'];
    console.log(userId);
    $.ajax({
        type: "post",
        url: "../../api/member/getChartsInfo.php",
        data: ({ id: userId })
    }).done(function(data) {
        console.log(data);
        var info = JSON.parse(data);
        console.log(info);
        if (info[0].length < 7 || info[1].length < 7 || info[2].length < 7 || info[3].length < 7) {
            console.log("not engouth data");
            $(".accepted-data").hide();
            $(".comment-data").hide();
            $(".no-data").show();
        }
        var ctx = document.getElementById("accepted-answers").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: info[0],
                datasets: [{
                    backgroundColor: [
                        "#2ecc71",
                        "#3498db",
                        "#95a5a6",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e"
                    ],
                    data: info[1]
                }]
            }
        });
        var ctx = document.getElementById("where-i-comment").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: info[2],
                datasets: [{
                    backgroundColor: [
                        "#2ecc71",
                        "#3498db",
                        "#95a5a6",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e"
                    ],
                    data: info[3]
                }]
            }
        });
    });
}



function validateCreateTopic() {
    $('#createTopicForm').submit(function(e) {
        if ($("#wmd-input").val().length < 20) {
            e.preventDefault();
            $('#createTopic-messages').html('<div class="alert alert-warning" role="alert">A descrição tem de ter no mínimo 20 caracteres.</div>');
        }
    });
}


function disableKeySubmit(formid) {
    $("#" + formid).on("keyup keypress", function(e) {
        var keyCode = e.keyCode || e.which;
        if (!$("#wmd-input").is(":focus")) {
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        }
        return true;
    });
}


function runTextEditor() {
    var converter = Markdown.getSanitizingConverter();
    var editor = new Markdown.Editor(converter);
    editor.run();

    $("#wmd-redo-button").addClass("hidden-xs");
    $("#wmd-undo-button").addClass("hidden-xs");
    $("#wmd-spacer3").addClass("hidden-xs");
    $("#wmd-button-row").append("<li class='wmd-spacer hidden-xs' style='left : 370'></li>");
    $("#wmd-button-row").append("<li class='wmd-button hidden-xs' id='help-button'  title='Heading <h1>/<h2> Ctrl+Shift+H' style='left: 385px;'><span style='background-position: -240px 0px;'></span></li>");
    $("#help-button").click(function() {
        $("#squarespaceModal").modal('toggle');
    });
    $("#wmd-preview").css({ 'word-wrap': "break-word" });
    $("#wmd-preview").css({ 'width': "100%" });
}


function handleTemplates() {
    $('#editProfile').on('click', '.add-email', function() {
        var template = $('#email-template');
        template.clone()
            .removeClass('hide')
            .removeAttr('id')
            .insertBefore(template);
    }).on('click', '.remove-email', function() {
        $(this).parents('.form-group').remove();
    });

    $('#editProfile').on('click', '.add-link', function() {
        var template = $('#link-template');
        template.clone()
            .removeClass('hide')
            .removeAttr('id')
            .insertBefore(template);
    }).on('click', '.remove-link', function() {
        $(this).parents('.form-group').remove();
    });
}

function hideALL() {
    $('.resultTitle').hide("slow");
    $('.resultTag').hide("slow");
    $('.resultContent').hide("slow");
}

function searchOptions() {
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
        hideALL();
        if (this.checked) {
            $('.resultTitle').show("slow");
        } else {
            $('.resultTitle').hide("slow");
        }

        if ($('#search_tags')[0].checked) {
            $('.resultTag').show("slow");
        }
        if ($('#search_content')[0].checked) {
            $('.resultContent').show("slow");
        }
        results();
    });

    $('#search_tags').click(function() {
        hideALL();
        if (this.checked) {
            $('.resultTag').show("slow");
        } else {
            $('.resultTag').hide("slow");
        }

        if ($('#search_title')[0].checked) {
            $('.resultTitle').show("slow");
        }
        if ($('#search_content')[0].checked) {
            $('.resultContent').show("slow");
        }

        results();
    });

    $('#search_users').click(function() {
        if (this.checked) {
            $('.resultUser').show("slow");
        } else {
            $('.resultUser').hide("slow");
        }

        results();
    });

    $('#search_content').click(function() {
        hideALL();
        if (this.checked) {
            $('.resultContent').show("slow");
        } else {
            $('.resultContent').hide("slow");
        }

        if ($('#search_title')[0].checked) {
            $('.resultTitle').show("slow");
        }
        if ($('#search_tags')[0].checked) {
            $('.resultTag').show("slow");
        }
        results();
    });

    results();
}

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


function handleReplies() {
    // Show and hide comment form
    $("body").on('click', 'a.new-reply', function(e) {
        var classes = $(this).attr("class").split(" ");
        for (elemClass of classes) {
            if (elemClass.match("^id-")) {
                $("form." + elemClass).slideToggle();
            }
        }

        e.preventDefault();
    });


    // Send comment
    $("body").on('click', 'button.new-reply', function() {
        var button = $(this);
        var textArea = button.siblings("textarea");
        if (textArea.val() === undefined || textArea.val() == "") {
            textArea.attr('placeholder', 'Escreva uma mensagem antes de enviar!');
            return false;
        }

        var values = {};
        $(this).siblings().each(function() {
            var elem = $(this);
            values[elem.attr('name')] = elem.val();
        });

        $.ajax({
                type: "post",
                url: "../../api/topic/insertReply.php",
                dataType: 'json',
                data: { values: values }
            })
            .done(function(data) {
                if (data === "success") {
                    html = '<div class="col-md-10 col-md-offset-1 panel-body reply">' +
                        '<span class="text-muted"><strong>You</strong> commented just now:</span> <span class="reply-text">' + values['content'] + '</span>'
                    '</div>';
                    button.parents("div.row").prev("div.row.replies").prepend(
                        $(html).hide().fadeIn('slow')
                    );
                    textArea.val("");
                    textArea.attr('placeholder', 'Insira aqui a sua mensagem...');
                } else {
                    textArea.val("");
                    textArea.attr('placeholder', 'Ocorreu um erro, tente novamente mais tarde.');
                }
            });
    });
}



function handleComments() {
    $("#submit-topic").click(function() {
        var button = $(this);
        var textArea = $("#wmd-input");
        if (textArea.val() === undefined || textArea.val() == "") {
            textArea.attr('placeholder', 'Escreva uma mensagem antes de enviar!');
            return false;
        }

        values = {};
        $(this).closest("div.form-group").siblings("div.form-group").children("input").each(function() {
            var elem = $(this);
            values[elem.attr('name')] = elem.val();
        });
        values['content'] = textArea.val();

        $.ajax({
                type: "post",
                url: "../../api/topic/insertComment.php",
                dataType: 'html',
                data: { values: values }
            })
            .done(function(html) {
                if (html == "error") {
                    textArea.val("");
                    textArea.attr('placeholder', 'Ocorreu um erro, tente novamente mais tarde.');
                    $("#wmd-preview").empty();
                } else {
                    $("#" + values['postid']).parent().append(
                        $(html).hide().fadeIn('slow')
                    );
                }
            });
    });
}

function addDeleteButtons() {
    addDeleteReply();
    addDeleteComment();
    addDeleteTopic();
}

function addDeleteReply() {
    $(".remove-reply").click(
        function() {
            var replyId = $(this).attr("id").substring(5);

            $.post("../../api/topic/deleteReply.php", {
                id: replyId
            });

            $(this).parent().parent().remove();
        }
    );
}

function addDeleteComment() {

}

function addDeleteTopic() {

}

function handleTimeline() {
    if (typeof handleTimeline.showLimit == 'undefined') {
        handleTimeline.showLimit = 5;
    }

    hideShowMore(handleTimeline.showLimit);
    limitTimelineShow(handleTimeline.showLimit);

    $("#show-more").click(function() {
        handleTimeline.showLimit += 5;
        limitTimelineShow(handleTimeline.showLimit);
        hideShowMore(handleTimeline.showLimit);
    });
}

function limitTimelineShow(showLimit) {
    $('#timeline article').each(function(index) {
        if (index < showLimit) {
            $(this).fadeIn("slow");
        } else return;
    });
}

function hideShowMore(showLimit) {
    if (showLimit >= $('#timeline article').length) {
        $("#show-more").hide();
    }
}