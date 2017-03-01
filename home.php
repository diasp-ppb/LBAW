<?php
include "templates/header.php"
?>

  <div style="padding:0; margin: 0 auto; width: 100%" class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 main">
        <div style="margin: 0 auto; width: 100%" class="container">
          <div class="row">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#featured">Em destaque</a></li>
              <li><a data-toggle="tab" href="#recent">Mais recentes</a></li>
            </ul>
          </div>
          <div class="tab-content">
            <?php
                include 'templates/topicPresentation.php';
                topicPresentation('featured','Xauxixinhas','Varvosinha','99','99','0');
            ?>
            <?php
                topicPresentation('recent','Mineiro, picadinho, francesinha, giro, lindo , teuxugo, manga, ananas,kiwi','Varvosinha','99','99','0');
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
include "templates/footer.php"
?>