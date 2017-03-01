<?php
/* Smarty version 3.1.30, created on 2017-03-01 11:52:03
  from "/home/syram/Documents/Projects/LBAW/PROJ/LBAW/smarty/views/topicPresentation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b6b5e39a9833_86520627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '815cb6926c7a29d5954703d30090999bc0bb2c7c' => 
    array (
      0 => '/home/syram/Documents/Projects/LBAW/PROJ/LBAW/smarty/views/topicPresentation.tpl',
      1 => 1488369121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b6b5e39a9833_86520627 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id= <?php echo ((string)$_smarty_tpl->tpl_vars['tab']->value);?>
  class="vertical-align tab-pane fade in">
    <div style="padding: 0" class="col-md-1 topic-status">
        <?php echo $_smarty_tpl->tpl_vars['votes']->value;?>

        <div>Votos</div>
    </div>
    <div style="padding: 0" class="col-md-1 topic-status">

      <?php echo $_smarty_tpl->tpl_vars['answers']->value;?>


        <div>Respostas</div>
    </div>
    <div style="padding: 0" class="col-md-1 topic-status">

      <?php echo $_smarty_tpl->tpl_vars['visua']->value;?>


        <div>Visualizações</div>
    </div>
    <div class="col-md-6">
      <a class="title" href="#">
        <?php echo $_smarty_tpl->tpl_vars['topic']->value;?>

      </a>
      <div class="tags">
        <span class="tag">Java</span> <span class="tag">Homossexualidade</span>
      </div>
    </div>
    <div class="col-md-3">
      <p>
        Postado por:
        <?php echo $_smarty_tpl->tpl_vars['author']->value;?>

      </p>
    </div>
  </div>
<?php }
}
