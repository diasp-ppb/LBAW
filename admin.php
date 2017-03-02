<?php
include "templates/header.php";
include 'templates/userElem.php';
?>
    <div style="padding:0; margin: 0 auto; width: 100%" class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-1 additional">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="list-group">
                            <a href="#userlist" class="text-center list-group-item active">
                                <i class="glyphicon glyphicon-user"></i>
                                User List
                            </a>
                            <a href="#statistics" class="text-center list-group-item">
                                <i class="glyphicon glyphicon-dashboard"></i>
                                Statistics
                            </a>
                            <a href="#backup" class="text-center list-group-item">
                                <i class="glyphicon glyphicon-hdd"></i>
                                Backup
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 main">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <section id="userlist">
                            <div class="page-header">
                                <h1>Lista de Utilizadores</h1>
                            </div>
                            <div class="list-group">
                                <?php
                                userElem('Whiskas Saquetas');
                                userElem('João Varvosa');
                                userElem('Pedro Dias que não está preso');
                                userElem('Pedro Dias que está preso');
                                ?>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <section id="statistics">
                            <div class="page-header">
                                <h1>Estatísticas</h1>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-1 statistic">
                                    <h4>Utilizadores</h4>
                                    <span class="glyphicon glyphicon-user blue"></span>
                                    <div class="statistic amount">12455</div>
                                </div>
                                <div class="col-md-2 col-md-offset-2 statistic">
                                    <h4>Utilizadores ativos</h4>
                                    <span class="glyphicon glyphicon-user green"></span>
                                    <div class="statistic amount">12455</div>
                                </div>
                                <div class="col-md-2 col-md-offset-2 statistic">
                                    <h4>Tópicos criados</h4>
                                    <span class="glyphicon glyphicon-question-sign orange"></span>
                                    <div class="statistic amount">12455</div>
                                </div>
                            </div>
                            <div class="row">
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
                            <div class="row">
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
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "templates/footer.php"
?>