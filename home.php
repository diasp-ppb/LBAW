<?php
include "templates/header.php"
?>

<div class="container-fluid">
    <div class="header hidden-xs hidden-sm">
        <div id="logo"></div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 main">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div id="title-tags" class="page-header text-center">
                        <h2>Explore os nossos tópicos</h2>
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
                            <a href="#" class="home-tag" title="" rel="tag">Amizade</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-panel">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs ">
                                <li class="active">
                                    <a href="#featured" data-toggle="tab"><i class="glyphicon glyphicon-star"></i> Em destaque</a>
                                </li>
                                <li>
                                    <a href="#hot" data-toggle="tab"><i class="glyphicon glyphicon-fire"></i> Mais cobiçadas</a>
                                </li>
                                <li>
                                    <a href="#recent" data-toggle="tab"><i class="glyphicon glyphicon-circle-arrow-up"></i> Mais recentes</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <?php include 'templates/topicPresentation.php'; ?>
                                <div class="tab-pane active" id="featured">
                                    <?php topicPresentation('featured','Xauxixinhas','Varvosinha','99','99','0'); ?>
                                </div>
                                <div class="tab-pane" id="hot">
                                    <p>
                                        Howdy, I'm in Tab 2.
                                    </p>
                                    <p>
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                                    </p>
                                    <p>
                                        <a class="btn btn-warning" href="http://j.mp/metronictheme" target="_blank">
                                            Click for more features...
                                        </a>
                                    </p>
                                </div>
                                <div class="tab-pane" id="recent">
                                    <?php topicPresentation('recent','Mineiro, picadinho, francesinha, giro, lindo , teuxugo, manga, ananas,kiwi','Varvosinha','99','99','0'); ?>
                                </div>
                            </div>
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