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
                                    <?php topicPresentation('403 Forbidden nginx/1.11.9 - Laravel 4','Ze Gomes','2','193','7',array('laravel','nginx','laravel-4')); 
                                          topicPresentation('REGEX para Seleciar uma linha que contem um string desenjada',' Diego  Garcia','0','17','2',array('pyhon','notepad++'));
                                          topicPresentation('Cordova, como mudar a cor da barra de controles: voltar, home e janelas','Pedro Dias','1','14','7',array('android','apache-cordova'));
                                          topicPresentation('Remover todas as quebras de linhas numa coluna de um arquivo csv no Linux','Rita Torres','7','8','4',array('linux','csv','quebra-de-linha','awk','sed'));
                                          topicPresentation('Como enviar uma imagem dinâmica para o PHP com a função ajax do jQuery','Miguel Lira','0','7','0',array('jquery','file-upload'));
                                    ?>
                                </div>
                                <div class="tab-pane" id="hot">
                                   <?php topicPresentation('Por que as vezes é necessário o setTimeout com valor 0 (zero)?','João Barbosa','11','221','3',array('javascript','settimeout')); 
                                         topicPresentation('Como fazer hash de senhas de forma segura?','Salvador Fonseca','17','13k','6',array('hash','segurança','senhas','criptografia'));
                                         topicPresentation('Por que não devemos usar funções do tipo mysql_*?','Luis Aguiar','147','5k','6',array('php','mysql'));
                                         topicPresentation('Como prevenir injeção de código SQL no meu código PHP','Manuel Justo','111','8k','5',array('php','sql','sql-injection'));
                                         topicPresentation('Diferenças de tipos de Web Service: SOAP, REST, XML','José Soares','2','50k','12',array('web-service'));
                                   ?>
                                </div>
                                <div class="tab-pane" id="recent">
                                     <?php topicPresentation('O que é o Accelerated Mobile Pages (AMP)?','Rui Pereira','2','5','0',array('amp','html')); 
                                         topicPresentation('Conexão Cliente/Servidor','Miriam Gonçalves','0','4','0',array('C#','.net'));
                                         topicPresentation('Como gerar relatóriod PDF firemonkey android?','Jõao Madureira','0','8','0',array('android','delphi','firemonkey'));
                                         topicPresentation('FloatingActionButtonMenu','António Ramos','0','14','0',array('android','mobile'));
                                         topicPresentation('Como gravar uma imagem base64_encode com mais de 4000 caracteres no Oracle usando php','Fernando Rocha','0','9','0',array('php','imagem','oracle','base64'));
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
include "templates/footer.php"
?>