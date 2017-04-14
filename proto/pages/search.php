<?php
include "../templates/header.php"
?>

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
                            <div class="row entry">
                                <div class="col-md-10">
                                    <a class="title" href="#">
                                        Alguém sabe usar a API de sockets em Java ?</a>
                                    <div class="tags">
                                        <span class="tag">Java</span> <span class="tag">Socket</span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <p>Postado por: João Barbosa</p>
                                </div>
                            </div>
                            <div class="row entry">
                                <div class="col-md-10">
                                    <a class="title" href="#">A nomenclatura da água é mesmo H2O ?</a>
                                    <div class="tags">
                                        <span class="tag">H2O</span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <p>Postado por: Pedro Dias</p>
                                </div>
                            </div>
                            <div class="row entry">
                                <div class="col-md-10">
                                    <a class="title" href="#">
                                        Existe vetores em PROLOG ?</a>
                                    <div class="tags">
                                        <span class="tag">PROLOG</span> <span class="tag">Vectores</span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <p>Postado por: José Pedro Monteiro</p>
                                </div>
                            </div>
                            <div class="row entry">
                                <div class="col-md-10">
                                    <a class="title" href="#">
                                        Python é assim tão lento ? Gosto de desenvolver esta linguagem mas pelo que parece não é muito eficiente.
                                    </a>
                                    <div class="tags">
                                        <span class="tag">Python</span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <p>Postado por: Diogo Campos</p>
                                </div>
                            </div>
                            <div class="row entry">
                                <div class="col-md-10">
                                    <a class="title" href="#">
                                        Gestão de processos varia de que forma entre sistemas operativos ?
                                    </a>
                                    <div class="tags">
                                        <span class="tag">SO</span> <span class="tag">Windows</span> <span class="tag">Ubuntu</span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <p>Postado por: Pedro Dias</p>
                                </div>
                            </div>
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

<?php
include "../templates/footer.php"
?>