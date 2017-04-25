<?php /* Smarty version Smarty-3.1.15, created on 2017-04-25 01:09:00
         compiled from "/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174840723058fe939c858666-55284842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '708318e7f6c9bd32c0f704849f2ed46defce8c48' => 
    array (
      0 => '/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/home.tpl',
      1 => 1493076074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174840723058fe939c858666-55284842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'featuredTopics' => 0,
    'topic1' => 0,
    'HotTopics' => 0,
    'recentTopics' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fe939ca6cc59_37650561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe939ca6cc59_37650561')) {function content_58fe939ca6cc59_37650561($_smarty_tpl) {?><div class="container-fluid">
    <div class="row">
        <div class="col-md-12  main">
            <div class="row">
                <div id="logoDIV" class="header hidden-xs hidden-sm hidden-md">
                    <div id="logo"></div>
                </div>
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div id="title-tags" class="page-header text-center">
                        <h2>Explore os nossos tópicos</h2>
                        <div id="explore-tags">
                                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                 <a href='../pages/search.php?search=<?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
' class="home-tag" title="" rel="tag"> <?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
 </a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12-col-sm-12 col-lg-10 col-lg-offset-1">
                    <div class="tabbable-panel col-md-12">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs ">
                                <li class="active col-xs-3">
                                    <a href="#featured" data-toggle="tab"><i class="glyphicon glyphicon-star hidden-xs"></i> Em destaque</a>
                                </li>
                                <li class="col-xs-3">
                                    <a href="#hot" data-toggle="tab"><i class="glyphicon glyphicon-fire hidden-xs"></i> Mais cobiçadas</a>
                                </li>
                                <li class="col-xs-3">
                                    <a href="#recent" data-toggle="tab"><i class="glyphicon glyphicon-circle-arrow-up hidden-xs"></i> Mais recentes</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="featured">
                                        <?php  $_smarty_tpl->tpl_vars['topic1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featuredTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic1']->key => $_smarty_tpl->tpl_vars['topic1']->value) {
$_smarty_tpl->tpl_vars['topic1']->_loop = true;
?>
                                        <?php echo $_smarty_tpl->getSubTemplate ("topicPresentation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('votes'=>$_smarty_tpl->tpl_vars['topic1']->value['rating'],'answers'=>$_smarty_tpl->tpl_vars['topic1']->value['answers'],'visua'=>10,'topicId'=>$_smarty_tpl->tpl_vars['topic1']->value['id'],'topic'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'tags'=>$_smarty_tpl->tpl_vars['topic1']->value['tags'],'author'=>$_smarty_tpl->tpl_vars['topic1']->value['author']), 0);?>

                                        <?php } ?>
                                </div>
                                <div class="tab-pane" id="hot">
                                        <?php  $_smarty_tpl->tpl_vars['topic1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HotTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic1']->key => $_smarty_tpl->tpl_vars['topic1']->value) {
$_smarty_tpl->tpl_vars['topic1']->_loop = true;
?>
                                            <?php echo $_smarty_tpl->getSubTemplate ("topicPresentation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('votes'=>$_smarty_tpl->tpl_vars['topic1']->value['rating'],'answers'=>$_smarty_tpl->tpl_vars['topic1']->value['answers'],'visua'=>10,'topicId'=>$_smarty_tpl->tpl_vars['topic1']->value['id'],'topic'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'tags'=>$_smarty_tpl->tpl_vars['topic1']->value['tags'],'author'=>$_smarty_tpl->tpl_vars['topic1']->value['author']), 0);?>

                                        <?php } ?>
                                </div>
                                <div class="tab-pane" id="recent">
                                        <?php  $_smarty_tpl->tpl_vars['topic1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recentTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic1']->key => $_smarty_tpl->tpl_vars['topic1']->value) {
$_smarty_tpl->tpl_vars['topic1']->_loop = true;
?>
                                            <?php echo $_smarty_tpl->getSubTemplate ("topicPresentation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('votes'=>$_smarty_tpl->tpl_vars['topic1']->value['rating'],'answers'=>$_smarty_tpl->tpl_vars['topic1']->value['answers'],'visua'=>10,'topicId'=>$_smarty_tpl->tpl_vars['topic1']->value['id'],'topic'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'tags'=>$_smarty_tpl->tpl_vars['topic1']->value['tags'],'author'=>$_smarty_tpl->tpl_vars['topic1']->value['author']), 0);?>

                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
