$(document).ready(function() {
    $('.pagination').on('click', 'li', function() {
        var page = $(this).text();
        $.getJSON("../../api/member/memberList.php", {
            page: page - 1
        }, function(data) {
            console.log(data);
        });
    });
});
