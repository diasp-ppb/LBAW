<?php
include "templates/header.php"
?>

<div style="padding:0; margin: 0 auto; width: 100%" class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-1 additional">
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item active">
                        Pesquisar por:
                    </li>
                    <li class="list-group-item">
                        Título
                        <div class="material-switch pull-right">
                            <input name="search_option" type="checkbox" checked="checked"/>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Tags
                        <div class="material-switch pull-right">
                            <input name="search_option" type="checkbox" checked="checked"/>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Utilizadores
                        <div class="material-switch pull-right">
                            <input name="search_option" type="checkbox" checked="checked"/>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1 main">
            <div style="margin: 0 auto; width: 100%" class="container">
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

<?php
include "templates/footer.php"
?>