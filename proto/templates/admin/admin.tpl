<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-md-offset-1 additional">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul class="list-group text-center hidden-xs hidden-sm">
                        <li class="list-group-item active"> <a href="#userlist"><i class="glyphicon glyphicon-user"></i> Utilizadores</a> </li>
                        <li class="list-group-item"> <a href="#statistics"><i class="glyphicon glyphicon-list-alt"></i> Estatísticas</a> </li>
                    </ul>
                    <ul class="list-inline text-center hidden-md hidden-lg">
                        <li> <a href="#userlist"><i class="glyphicon glyphicon-user"></i> User List</a> </li>
                        <li> <a href="#statistics"><i class="glyphicon glyphicon-dashboard"></i> Statistics</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1 main">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div id="userlist" class="row">
                        <div class="page-header">
                            <h2>Lista de Utilizadores</h2>
                        </div>
                        <div class="list-group">
                            {foreach $users as $user}
                                {include file="userElem.tpl" username=$user.name id=$user.id}
                            {/foreach}
                            <ul class="pagination">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="statistics" class="row">
                        <div class="page-header">
                            <h2>Estatísticas</h2>
                        </div>
                        <div class="row">
                            <ul class="list-inline text-center hidden-xs hidden-sm">
                                <li class="statistic">
                                    <h4>Utilizadores</h4>
                                    <span class="glyphicon glyphicon-user blue"></span>
                                    <div class="statistic amount">12455</div>
                                </li>
                                <li class="statistic">
                                    <h4>Utilizadores ativos</h4>
                                    <span class="glyphicon glyphicon-user green"></span>
                                    <div class="statistic amount">12455</div>
                                </li>
                                <li class="statistic">
                                    <h4>Tópicos criados</h4>
                                    <span class="glyphicon glyphicon-question-sign orange"></span>
                                    <div class="statistic amount">12455</div>
                                </li>
                            </ul>
                            <ul id="phone_statistics" class="text-center hidden-md hidden-lg">
                                <li class="statistic">
                                    <h4>Utilizadores</h4>
                                    <span class="glyphicon glyphicon-user blue"></span>
                                    <div class="statistic amount">12455</div>
                                </li>
                                <li class="statistic">
                                    <h4>Utilizadores ativos</h4>
                                    <span class="glyphicon glyphicon-user green"></span>
                                    <div class="statistic amount">12455</div>
                                </li>
                                <li class="statistic">
                                    <h4>Tópicos criados</h4>
                                    <span class="glyphicon glyphicon-question-sign orange"></span>
                                    <div class="statistic amount">12455</div>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col col-md-6 col-md-offset-3">
                                <h3>Tópicos por curso</h3>
                                <canvas id="topics-by-course"></canvas>
                                <script>
                                    var ctx = document.getElementById("topics-by-course").getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'doughnut',
                                        data: {
                                            labels: ["M", "T", "W", "T", "F", "S", "S"],
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
                                                data: [12, 19, 3, 17, 28, 24, 7]
                                            }]
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-md-6 col-md-offset-3">
                                <h3>Tags mais utilizadas</h3>
                                <canvas id="topics-by-tags"></canvas>
                                <script>
                                    var ctx = document.getElementById("topics-by-tags").getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ["M", "T", "W", "T", "F", "S", "S"],
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
                                                data: [12, 19, 3, 17, 28, 24, 7]
                                            }]
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{include file="common/footer.tpl"}
