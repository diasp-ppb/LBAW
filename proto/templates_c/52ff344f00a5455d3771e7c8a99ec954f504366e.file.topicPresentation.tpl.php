<?php /* Smarty version Smarty-3.1.15, created on 2017-04-25 01:08:51
         compiled from "/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/topicPresentation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54236362358fe939389e114-62436967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52ff344f00a5455d3771e7c8a99ec954f504366e' => 
    array (
      0 => '/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/topicPresentation.tpl',
      1 => 1493076074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54236362358fe939389e114-62436967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'votes' => 0,
    'answers' => 0,
    'visua' => 0,
    'topicId' => 0,
    'topic' => 0,
    'tags' => 0,
    'v' => 0,
    'author' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fe93938b6564_71972742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe93938b6564_71972742')) {function content_58fe93938b6564_71972742($_smarty_tpl) {?><div class="topic-presentation">
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

          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
           <span class="tag"> <a href='../pages/search.php?search=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
'  class="linkTopicTag" title="" rel="tag"> <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 </a> </span>
          <?php } ?>
        </div>
    </div>
    
    
    <div class="col-md-3 author text-right">
        <?php echo $_smarty_tpl->tpl_vars['author']->value;?>

    </div>
</div>
<?php }} ?>
