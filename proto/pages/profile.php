  <?php
include "templates/header.php"
?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-md-offset-1 additional">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="user-info text-center">
                <img src="https://avatars2.githubusercontent.com/u/17344964?v=3&s=400" class="img-circle img-thumbnail" style="height: 200px; width: 200px" alt="Profile Picture">
                <h3>João Barbosa</h3>
                <p><i class="glyphicon glyphicon-map-marker"></i> Porto, Portugal</p>
                <p><i class="glyphicon glyphicon-envelope"></i> bmpj13@hotmail.com</p>
                <p><i class="glyphicon glyphicon-globe"></i> www.github.com/bmpj13</p>
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
          <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
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
                      <h2><a href="#">José Soares </a> <span>aceitou a tua resposta.</span></h2>
                      <p>A tua resposta ao tópico "Diferenças de tipos de Web Service: SOAP, REST, XML" satisfez os requisitos do utilizador com sucesso.</p>
                    </div>
                  </div>
                </article>


              <article class="timeline-entry">

                <div class="timeline-entry-inner">

                  <div class="timeline-icon bg-primary">
                    <i class="entypo-feather"></i>
                  </div>

                  <div class="timeline-label">
                    <h2>Comentaste o tópico <span>"Diferenças de tipos de Web Service: SOAP, REST, XML"</span></h2>
                  </div>
                </div>
              </article>
              
              </div>




              <div class="row">
                <div class="page-header">
                  <h2>As minhas estatísticas</h2>
                </div>
                <div class="col col-md-5 col-sm-12">
                  <h4>Respostas aceites:</h4>
                  <canvas id="accepted-answers"></canvas>
                  <script>
                    var ctx = document.getElementById("accepted-answers").getContext('2d');
                    var myChart = new Chart(ctx, {
                      type: 'pie',
                      data: {
                        labels: ["javaScript", "C++", "web-design", "java", "C#", ".net", "web"],
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
                          data: [6, 7, 1, 7, 24, 15, 3]
                        }]
                      }
                    });
                  </script>
                </div>
                <div class="col col-md-5 col-sm-12">
                  <h4>Onde comento:</h4>
                  <canvas id="where-i-comment"></canvas>
                  <script>
                    var ctx = document.getElementById("where-i-comment").getContext('2d');
                    var myChart = new Chart(ctx, {
                      type: 'pie',
                      data: {
                        labels: ["javaScript", "C++", "web-design", "java", "C#", ".net", "web"],
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
                <a class="title" href="#">Como gerar relatório PDF firemonkey android?</a>
                <div class="tags">
                  <span class="tag">android</span>
                  <span class="tag">delphi</span>
                  <span class="tag">firemonkey</span>
                </div>

                <a class="title" href="#">Como enviar uma imagem dinâmica para o PHP com a função ajax do jQuery</a>
                <div class="tags">
                  <span class="tag">jquery</span>
                  <span class="tag">file-upload</span>
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