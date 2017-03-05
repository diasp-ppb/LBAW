<?php
include "templates/header.php"
?>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="header hidden-xs hidden-sm">
                <div id="logo"></div>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="text-center">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Oops:
                        <small>Page not found - <b>404 error</b></small>
                    </h3>
                </div>
                <div class="panel-body">
                    <p> A página que procuras não se encontra disponível. Verifique as seguintes possíveis soluções:</p>
                    <ul class="list-group">
                        <li class="list-group-item">Garanta que o <em>link</em> utilizado está correto.</li>
                        <li class="list-group-item">Se chegou a esta página carregando num <em>link</em>, contacte-nos para reportar o erro.</li>
                        <li class="list-group-item">Esqueça que isto acontence e volte para a página anterior :)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>

<?php
include "templates/footer.php"
?>