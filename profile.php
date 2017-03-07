<?php
include "templates/header.php"
?>

  <script>
    var isMobile = false; //initiate as false
    // device detection
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;

      if(isMobile)
        Chart.defaults.global.legend.display = false;
      else {
        Chart.defaults.global.legend.display = true;
      }
    })
  </script>


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-md-offset-1 additional">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="user-info text-center">
              <img src="https://avatars2.githubusercontent.com/u/17344964?v=3&s=400" class="img-circle img-thumbnail" style="height: 200px; width: 200px" alt="Profile Picture">
              <h3>João Barbosa</h3>
              <p><i class="glyphicon glyphicon-map-marker"></i> Porto, Portugal</p>
              <p><i class="glyphicon glyphicon-envelope"></i>bmpj13@hotmail.com</p>
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
          <div class="col-md-10 col-md-offset-1 col-xs-12">
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
                </div>
                <div class="timeline-centered">
                   <article class="timeline-entry">

                  <div class="timeline-entry-inner">

                    <div class="timeline-icon bg-primary">
                      <i class="entypo-feather"></i>
                    </div>

                    <div class="timeline-label">
                      <h2>Comentas te o tópico <span>"Diferenças de tipos de Web Service: SOAP, REST, XML"</span></h2>
                    </div>
                  </div>

                </article>
              </div>
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
              <div class="col col-md-5 col-sm-12">
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
              <a class="title" href="#">Como gerar relatóriod PDF firemonkey android?</a>
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