<?php
include_once "../templates/header.php";
include_once "../templates/topicPresentation.php";
include_once "../database/topics.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12  main">
            <div class="row">
                <div id="logoDIV" class="header hidden-xs hidden-sm hidden-md">
                    <div id="logo"></div>
                </div>
                <div class="col-md-8 col-md-offset-2 col-xs-12">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12-col-sm-12 col-lg-10 col-lg-offset-1">
                    <div class="tabbable-panel col-md-12">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs ">
                                <li class="active col-xs-3">
                                    <a href="#featured" data-toggle="tab"><i class="glyphicon glyphicon-star hidden-xs"></i> Em destaque</a>
                                </li>
                                <li class="col-xs-3">
                                    <a href="#hot" data-toggle="tab"><i class="glyphicon glyphicon-fire hidden-xs"></i> Mais cobiçadas</a>
                                </li>
                                <li class="col-xs-3">
                                    <a href="#recent" data-toggle="tab"><i class="glyphicon glyphicon-circle-arrow-up hidden-xs"></i> Mais recentes</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="featured">
                                    <?php 
                                        $topics = getFeaturedTopics();
                                        
                                        foreach ($topics as $topic) { 
                                            topicPresentation($topic);
                                        }
                                    ?>
                                </div>
                                <div class="tab-pane" id="hot">
                                   <?php
                                        $topics = getHotTopics();
                                        
                                        foreach ($topics as $topic) { 
                                            topicPresentation($topic);
                                        }
                                    ?>
                                </div>
                                <div class="tab-pane" id="recent">
                                     <?php 
                                        $topics = getMostRecentTopics();
                                        
                                        foreach ($topics as $topic) { 
                                            topicPresentation($topic);
                                        }
                                      ?>
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
include "../templates/footer.php"
?>