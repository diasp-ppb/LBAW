<?php /* Smarty version Smarty-3.1.15, created on 2017-04-25 01:19:12
         compiled from "/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204838209558fe9600f2c2e2-11656357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53b5bb9eae54d1a11eb1b075babfa432d1e1cc7d' => 
    array (
      0 => '/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/search.tpl',
      1 => 1493077747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204838209558fe9600f2c2e2-11656357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'topic1' => 0,
    'result2' => 0,
    'result3' => 0,
    'result4' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fe9601201803_86689223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe9601201803_86689223')) {function content_58fe9601201803_86689223($_smarty_tpl) {?><div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-md-offset-1 additional">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-8 col-xs-offset-2">
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
                <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">

                        <div class="search topics">
                            <div class="page-header">
                                <h2>Tópicos</h2>
                            </div>

                            <?php  $_smarty_tpl->tpl_vars['topic1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic1']->key => $_smarty_tpl->tpl_vars['topic1']->value) {
$_smarty_tpl->tpl_vars['topic1']->_loop = true;
?>
                                <?php echo $_smarty_tpl->getSubTemplate ("searchResultTopic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>'','topicId'=>$_smarty_tpl->tpl_vars['topic1']->value['id'],'title'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'tags'=>$_smarty_tpl->tpl_vars['topic1']->value['tags'],'topic'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'author'=>$_smarty_tpl->tpl_vars['topic1']->value['author']), 0);?>

                            <?php } ?>

                            <?php  $_smarty_tpl->tpl_vars['topic1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic1']->key => $_smarty_tpl->tpl_vars['topic1']->value) {
$_smarty_tpl->tpl_vars['topic1']->_loop = true;
?>
                                <?php echo $_smarty_tpl->getSubTemplate ("searchResultTopic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>'','topicId'=>$_smarty_tpl->tpl_vars['topic1']->value['id'],'title'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'tags'=>$_smarty_tpl->tpl_vars['topic1']->value['tags'],'topic'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'author'=>$_smarty_tpl->tpl_vars['topic1']->value['author']), 0);?>

                            <?php } ?>

                            <?php  $_smarty_tpl->tpl_vars['topic1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic1']->key => $_smarty_tpl->tpl_vars['topic1']->value) {
$_smarty_tpl->tpl_vars['topic1']->_loop = true;
?>
                                <?php echo $_smarty_tpl->getSubTemplate ("searchResultTopic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>'','topicId'=>$_smarty_tpl->tpl_vars['topic1']->value['id'],'title'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'tags'=>$_smarty_tpl->tpl_vars['topic1']->value['tags'],'topic'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'author'=>$_smarty_tpl->tpl_vars['topic1']->value['author']), 0);?>

                            <?php } ?>
                        </div>

                        <div class="search users">
                            <div class="page-header">
                                <h2>Utilizadores</h2>
                            </div>
							
							<?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
                            <div class="user-info pull-left">
                                <div class="user text-center">
                                    <img src="https://avatars2.githubusercontent.com/u/17344964?v=3&s=400" class="img-thumbnail" style="height: 80px; width: 80px" alt="Profile Picture">
                                    <h4>$profile.name</h4>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
