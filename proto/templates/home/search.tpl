
<div class="container-fluid">
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
                            Conteúdo
                            <div class="material-switch pull-right">
                                <input id="search_content" name="search_content" type="checkbox" checked="checked"/>
                                <label for="search_content" class="label-primary"></label>
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
                            <div class"search-notify-topics ">
                                 <p class="alert alert-info info-msg-topic">Não foram encontrados resultados para a pesquisa </p>
                            </div>
                            {foreach $result as $topic1}
                                {include file="home/searchResultTopic.tpl" type=$topic1.class topicId=$topic1.id title=$topic1.title tags=$topic1.tags topic=$topic1.title  tags=$topic1.tags  author=$topic1.author}
                            {/foreach}

                        </div>

                        <div class="search users">
                            <div class="page-header">
                                <h2>Utilizadores</h2>
                            </div>

                            <div class"search-notify-users">
                                 <p class="alert alert-info info-msg-user">Não foram encontrados resultados para a pesquisa </p>
                            </div>

							{foreach $users as $profile}
                            <div class="user-info pull-left resultUser">
                                <div class="user text-center">
                                    <a href='../../pages/member/profile.php?id={$profile.id}' style="color: #303641">
                                        <img src={getUserImage($profile.id)} class="img-thumbnail" style="height: 80px; width: 80px" alt="Profile Picture">
                                        <h4><a href="../member/profile.php?id={$profile.id}">{$profile.name}</a></h4>
                                    </a>
                                </div>
                            </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
