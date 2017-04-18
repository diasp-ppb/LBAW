<?php
include_once "../templates/header.php";
include_once "../templates/topicPresentation.php";
include_once "../database/topics.php";
include_once "../database/tags.php";
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
                            <?php
                                $tags = getTags();
                                foreach ($tags as $tag) {
                             ?>
                                <a href="#" class="home-tag" title="" rel="tag"> <?php echo $tag["name"] ?> </a>
                             <?php
                                }
                             ?>
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
                                        $featuredTopics = getFeaturedTopics();

                                        foreach ($featuredTopics as $topic) {
                                            topicPresentation($topic);
                                        }
                                    ?>
                                </div>
                                <div class="tab-pane" id="hot">
                                   <?php
                                        $HotTopics = getHotTopics();

                                        foreach ($HotTopics as $topic) {
                                            topicPresentation($topic);
                                        }
                                    ?>
                                </div>
                                </div>
                                <div class="tab-pane" id="recent">
                                     <?php
                                        $recentTopics = getMostRecentTopics();

                                        foreach ($recentTopics as $topic) {
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