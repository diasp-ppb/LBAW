{debug}
<div class="container-fluid">
    <p> TESTESTESTE </p>
    <div class="row">
        <div class="col-md-2 col-md-offset-1 additional">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-8 col-xs-offset-2">
                    <ul class="list-group">
                        <li class="list-group-item active">
                            Pesquisar por:
                        </li>
                        <li class="list-group-item">
                            Título
                            <div class="material-switch pull-right">
                                <input id="search_title" name="search_option" type="checkbox" checked="checked"/>
                                <label for="search_title" class="label-primary"></label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Tags
                            <div class="material-switch pull-right">
                                <input id="search_tags" name="search_tags" type="checkbox" checked="checked"/>
                                <label for="search_tags" class="label-primary"></label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Utilizadores
                            <div class="material-switch pull-right">
                                <input id="search_users" name="search_option" type="checkbox" checked="checked"/>
                                <label for="search_users" class="label-primary"></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1 main">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        
                        <div class="search topics">
                            <div class="page-header">
                                <h2>Tópicos</h2>
                            </div>
                            
                            {foreach $result as $topic1}
                                {include file="searchResultTopic.tpl" type="" topicId=$topic1.id title=$topic1.title tags=$topic1.tags topic=$topic1.title  tags=$topic1.tags  author=$topic1.author}
                            {/foreach}

                            {foreach $result2 as $topic1}
                                {include file="searchResultTopic.tpl" type="" topicId=$topic1.id title=$topic1.title tags=$topic1.tags topic=$topic1.title  tags=$topic1.tags  author=$topic1.author}
                            {/foreach}

                            {foreach $result3 as $topic1}
                                {include file="searchResultTopic.tpl" type="" topicId=$topic1.id title=$topic1.title tags=$topic1.tags topic=$topic1.title  tags=$topic1.tags  author=$topic1.author}
                            {/foreach}
                        </div>
                        
                        <div class="search users">
                            <div class="page-header">
                                <h2>Utilizadores</h2>
                            </div>

                            <div class="user-info pull-left">
                                <div class="user text-center">
                                    <img src="https://avatars2.githubusercontent.com/u/17344964?v=3&s=400" class="img-thumbnail" style="height: 80px; width: 80px" alt="Profile Picture">
                                    <h4>João Barbosa</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>