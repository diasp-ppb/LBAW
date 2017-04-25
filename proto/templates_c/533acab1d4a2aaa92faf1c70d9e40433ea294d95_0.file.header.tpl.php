<?php
/* Smarty version 3.1.30, created on 2017-04-25 01:32:25
  from "/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fe991995f9d8_36360258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '533acab1d4a2aaa92faf1c70d9e40433ea294d95' => 
    array (
      0 => '/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/header.tpl',
      1 => 1493076074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fe991995f9d8_36360258 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"><?php echo '</script'; ?>
>

    <!-- Latest compiled and minified JavaScript -->
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="https://use.fontawesome.com/71cda9ffac.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/pagedown/1.0/Markdown.Converter.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/pagedown/1.0/Markdown.Editor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/pagedown/1.0/Markdown.Sanitizer.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="../js/validate_vote.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="//cdn.rawgit.com/balpha/pagedown/master/demo/browser/demo.css"/>



</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">脳</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabel">Log in</h3>
                    </div>
                    <div class="modal-body">

                        <!-- content goes here -->
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="N煤mero de utilizador">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            <div class="btn-group" role="group">
                                <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Log in</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../pages/home.php">
                <img alt="Brand" src="../resources/images/logo.png">
                <img alt="Brand" src="../resources/images/askabit.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">MIEEC</a></li>
                        <li><a href="#">MIEIC</a></li>
                    </ul>
                </li>
            </ul>
            <div class="col-sm-3 col-md-3 col-md-offset-3">
                <form action="../pages/search.php" method="get" class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img class="img-circle" alt="user" src="https://avatars2.githubusercontent.com/u/17344964?v=3&s=400">
                        <span>up201406241</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="../pages/profile.php?id=5"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>
                        <li><a href="../pages/createTopic.php"><i class="glyphicon glyphicon-plus"></i> Novo t贸pico</a></li>
                        <li role="presentation" class="divider"></li>
                        <li><a href="#"><i class="glyphicon glyphicon-off"></i> Sair</a></li>
                    </ul>
                </li>
            </ul>

            <!--
            <ul class="nav navbar-nav navbar-right" data-toggle="modal" data-target="#loginModal">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            -->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php }
}
