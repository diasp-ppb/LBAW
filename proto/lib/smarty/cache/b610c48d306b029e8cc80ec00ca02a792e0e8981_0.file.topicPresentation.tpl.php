<?php
/* Smarty version 3.1.30, created on 2017-03-01 19:57:43
  from "/home/jpedrotm/Desktop/FEUP/LBAW/LBAW/smarty/views/topicPresentation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b719a7caca82_70063290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b610c48d306b029e8cc80ec00ca02a792e0e8981' => 
    array (
      0 => '/home/jpedrotm/Desktop/FEUP/LBAW/LBAW/smarty/views/topicPresentation.tpl',
      1 => 1488394367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b719a7caca82_70063290 (Smarty_Internal_Template $_smarty_tpl) {
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
