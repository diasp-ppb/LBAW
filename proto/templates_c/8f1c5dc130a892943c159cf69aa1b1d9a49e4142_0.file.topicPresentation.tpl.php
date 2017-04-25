<?php
/* Smarty version 3.1.30, created on 2017-04-25 01:32:25
  from "/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/topicPresentation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fe9919a9e0b1_50772311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f1c5dc130a892943c159cf69aa1b1d9a49e4142' => 
    array (
      0 => '/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/topicPresentation.tpl',
      1 => 1493076074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fe9919a9e0b1_50772311 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a class="title" href="topic.php?id=<?php echo $_smarty_tpl->tpl_vars['topicId']->value;?>
">
          <?php echo $_smarty_tpl->tpl_vars['topic']->value;?>

        </a>
        <div class="tags">

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
           <span class="tag"> <a href='../pages/search.php?search=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
'  class="linkTopicTag" title="" rel="tag"> <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 </a> </span>
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
