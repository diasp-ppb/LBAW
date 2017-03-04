<?php
include "templates/header.php"
?>

  <div style="padding:0; margin: 0 auto; width: 100%" class="container">
    <div class="header">
      <div id="logo"></div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 main">
        <div style="margin: 0 auto; width: 100%" class="container">
          <div id="title-tags">
            Explore as nossas questões
          </div>
          <div id="explore-tags">
            <a href="#" class="home-tag" title="" rel="tag">PHP</a>
            <a href="#" class="home-tag" title="" rel="tag">Quimica</a>
            <a href="#" class="home-tag" title="" rel="tag">Newton</a>
            <a href="#" class="home-tag" title="" rel="tag">jQuery</a>
            <a href="#" class="home-tag" title="" rel="tag">AutoCad</a>
            <a href="#" class="home-tag" title="" rel="tag">VisualStudio</a>
            <a href="#" class="home-tag" title="" rel="tag">Maxima</a>
            <a href="#" class="home-tag" title="" rel="tag">web</a>
            <a href="#" class="home-tag" title="" rel="tag">Hidrogénio</a>
            <a href="#" class="home-tag" title="" rel="tag">Amizade</a>
          </div>
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