<?php
include "templates/header.php"
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-md-offset-1 additional">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="user-info text-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Turkish_Van_Cat.jpg/700px-Turkish_Van_Cat.jpg" class="img-circle img-thumbnail" style="height: 200px; width: 200px" alt="Profile Picture">
                        <h3>Whiskas Saquetas</h3>
                        <p><i class="glyphicon glyphicon-map-marker"></i> Porto, Portugal</p>
                        <p><i class="glyphicon glyphicon-envelope"></i> amizade@hotmail.com</p>
                        <p><i class="glyphicon glyphicon-globe"></i> amizade.github.io</p>
                    </div>
                    <ul class="list-group text-center hidden-xs hidden-sm">
                        <li class="list-group-item active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Perfil</a> </li>
                        <li class="list-group-item"> <a href="#"><i class="glyphicon glyphicon-cog"></i> Definições</a> </li>
                        <li class="list-group-item"> <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Estatísticas</a> </li>
                        <li class="list-group-item"> <a href="#"><i class="glyphicon glyphicon-question-sign"></i> Tópicos</a> </li>
                    </ul>
                    <ul class="list-inline text-center hidden-md hidden-lg">
                        <li> <a href="#"><i class="glyphicon glyphicon-home"></i> Perfil</a> </li>
                        <li> <a href="#"><i class="glyphicon glyphicon-cog"></i> Definições</a> </li>
                        <li> <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Estatísticas</a> </li>
                        <li> <a href="#"><i class="glyphicon glyphicon-question-sign"></i> Tópicos</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1 main">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-6 col-xs-offset-3">
                    <div class="row">
                        <div class="page-header">
                            <h2>Atividade</h2>
                        </div>
                        <div class="timeline-centered">
                            <article class="timeline-entry">

                                <div class="timeline-entry-inner">

                                    <div class="timeline-icon bg-primary">
                                        <i class="entypo-feather"></i>
                                    </div>

                                    <div class="timeline-label">
                                        <h2><a href="#">Varvosinha</a> <span>aceitou a tua resposta.</span></h2>
                                        <p>A tua resposta ao tópico "Porque é que sou giro?" satisfez os requisitos do utilizador com sucesso.</p>
                                    </div>
                                </div>

                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <div class="page-header">
                            <h2>As minhas estatísticas</h2>
                        </div>
                        <div class="col col-md-5">
                            <h4>Respostas aceites:</h4>
                            <canvas id="accepted-answers"></canvas>
                            <script>
                                var ctx = document.getElementById("accepted-answers").getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'pie',
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
                        <div class="col col-md-5">
                            <h4>Onde comento:</h4>
                            <canvas id="where-i-comment"></canvas>
                            <script>
                                var ctx = document.getElementById("where-i-comment").getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'pie',
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
                        <div class="page-header">
                            <h2>Os meus tópicos</h2>
                        </div>
                        <a class="title" href="#">Porque é que o Diogo é bicha e feio, mas mesmo assim gostava de o afiambrar? Não entendo esta minha vida meu deus meu deus nossa senhora</a>
                        <div class="tags">
                            <span class="tag">Java</span> <span class="tag">Homossexualidade</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "templates/footer.php"
?>
