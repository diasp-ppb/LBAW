<?php
/* Smarty version 3.1.30, created on 2017-04-14 17:19:39
  from "/home/syram/Documents/Projects/LBAW/PROJ/LBAW/proto/lib/smarty/views/topicPresentation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f104abc84f01_99744516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d71ac90641816e9453a26900ed7eee904ef677e' => 
    array (
      0 => '/home/syram/Documents/Projects/LBAW/PROJ/LBAW/proto/lib/smarty/views/topicPresentation.tpl',
      1 => 1488934994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f104abc84f01_99744516 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="topic-presentation">
    <div class="col-md-3 hidden-xs  hidden-sm">
      <div class="row">
        <div class="col-md-4 topic-status hidden-xs hidden-sm">
        <?php echo $_smarty_tpl->tpl_vars['votes']->value;?>

        <div>Votos</div>
     </div>

    <div class="col-md-4 topic-status hidden-xs hidden-sm">

      <?php echo $_smarty_tpl->tpl_vars['answers']->value;?>


        <div>Respostas</div>
    </div>
    
    <div class="col-md-4 topic-status hidden-xs hidden-sm">

      <?php echo $_smarty_tpl->tpl_vars['visua']->value;?>


        <div>Visualizações</div>
    </div>     
      </div>
    </div>
     
    
    <div class="col-md-6">
        <a class="title" href="#">
          <?php echo $_smarty_tpl->tpl_vars['topic']->value;?>

        </a>
        <div class="tags">

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'v', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
          <span class="tag"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> 
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    
    
    <div class="col-md-3 author text-right">
        <?php echo $_smarty_tpl->tpl_vars['author']->value;?>

    </div>
</div>
<?php }
}
