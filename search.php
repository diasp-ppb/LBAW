<?php
include "templates/header.php"
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-md-offset-1 additional">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-4 col-xs-offset-4">
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
                <div class="col-md-10 col-md-offset-1 col-xs-6 col-xs-offset-3">
                    <div class="row entry">
                        <div class="row">
                            <div class="col-md-10">
                                <a class="title" href="#">Porque é que o Diogo é bicha e feio, mas mesmo assim gostava de o afiambrar? Não entendo esta minha vida meu deus meu deus nossa senhora</a>
                                <div class="tags">
                                    <span class="tag">Java</span> <span class="tag">Homossexualidade</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <p>Postado por: João Varvosa</p>
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