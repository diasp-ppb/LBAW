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
                                {foreach $tags as $tag}
                                 <a href='../../pages/home/search.php?search={$tag.name}' class="home-tag" title="" rel="tag"> {$tag.name} </a>
                                {/foreach}
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
                                        {foreach $featuredTopics as $topic1}
                                        {include file="common/topicPresentation.tpl" votes=$topic1.rating answers=$topic1.answers visua=10 topicId=$topic1.id topic=$topic1.title  tags=$topic1.tags  author=$topic1.author userId=$topic1.userid}
                                        {/foreach}
                                </div>
                                <div class="tab-pane" id="hot">
                                        {foreach $HotTopics as $topic1 }
                                            {include file="common/topicPresentation.tpl" votes=$topic1.rating answers=$topic1.answers visua=10 topicId=$topic1.id topic=$topic1.title  tags=$topic1.tags  author=$topic1.author userId=$topic1.userid}
                                        {/foreach}
                                </div>
                                <div class="tab-pane" id="recent">
                                        {foreach $recentTopics as $topic1}
                                            {include file="common/topicPresentation.tpl" votes=$topic1.rating answers=$topic1.answers visua=10 topicId=$topic1.id topic=$topic1.title  tags=$topic1.tags  author=$topic1.author userId=$topic1.userid}
                                        {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
