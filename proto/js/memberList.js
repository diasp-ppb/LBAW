$(document).ready(function() {
    $('#user-pagination').twbsPagination({
      totalPages: pages,
      visiblePages: 10,
      first: 'Primeira',
      prev: 'Anterior',
      next: 'Seguinte',
      last: 'Última',
      onPageClick: function (event, page) {
          $.getJSON("../../api/member/memberList.php", {
              page: page - 1
          }, function(data) {
              $('#userlist .list-group').empty();
              for (var i = 0; i < data.length; i++) {
                  $('#userlist .list-group').append('<li class="list-group-item"> \
                    <a href="../../pages/member/profile.php?id=' + data[i].id + '">' + data[i].name + '</a> \
                    <i class="glyphicon glyphicon-remove pull-right"></i> \
                    </li>');
              }
          });
      }
  });
});
