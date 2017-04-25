<?php /* Smarty version Smarty-3.1.15, created on 2017-04-25 01:08:51
         compiled from "/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44139060858fe93937aacc4-27149043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c468b609a8d2502dae07ba7b406f4f1312f272a' => 
    array (
      0 => '/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/profile.tpl',
      1 => 1493076074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44139060858fe93937aacc4-27149043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'emails' => 0,
    'email' => 0,
    'links' => 0,
    'link' => 0,
    'topics' => 0,
    'topic1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fe9393898ae0_32373662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe9393898ae0_32373662')) {function content_58fe9393898ae0_32373662($_smarty_tpl) {?><div class="container-fluid">
<div class="row">
  <div class="col-md-2 col-md-offset-1 additional">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <div class="user-info text-center">
            <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['image'];?>
" class="img-circle img-thumbnail" style="height: 200px; width: 200px" alt="Profile Picture">
            <h3><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h3>
            <p hidden><i class="glyphicon glyphicon-map-marker"></i> Porto, Portugal</p>
            <?php  $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['email']->value] = new Smarty_Variable; $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['email']->value]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['email']->value]->key => $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['email']->value]->value) {
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['email']->value]->_loop = true;
?>
            <p><i class="glyphicon glyphicon-envelope"></i><?php echo $_smarty_tpl->tpl_vars['email']->value['mail'];?>
</p>
            <?php } ?>
            <?php  $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['link']->value] = new Smarty_Variable; $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['link']->value]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['link']->value]->key => $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['link']->value]->value) {
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['link']->value]->_loop = true;
?>
            <p><i class="glyphicon glyphicon-globe"></i><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</p>
            <?php } ?>
          </div>
        <ul class="list-group text-center hidden-xs hidden-sm">
          <li class="list-group-item active"> <a href="#"><i class="glyphicon glyphicon-home"></i>Perfil</a> </li>
          <li class="list-group-item"> <a href="../pages/editProfile.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><i class="glyphicon glyphicon-cog"></i>Definições</a> </li>
          <li class="list-group-item"> <a href="#stats"><i class="glyphicon glyphicon-list-alt"></i>Estatísticas</a> </li>
          <li class="list-group-item"> <a href="#my-topics"><i class="glyphicon glyphicon-question-sign"></i>Tópicos</a> </li>
        </ul>
        <ul class="list-inline text-center hidden-md hidden-lg">
          <li> <a href="#"><i class="glyphicon glyphicon-home"></i>Perfil</a> </li>
          <li> <a href="../pages/editProfile.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><i class="glyphicon glyphicon-cog"></i>Definições</a> </li>
          <li> <a href="#stats"><i class="glyphicon glyphicon-list-alt"></i>Estatísticas</a> </li>
          <li> <a href="#my-topics"><i class="glyphicon glyphicon-question-sign"></i>Tópicos</a> </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-8 col-md-offset-1 main">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
        <div class="row">
          <div class="page-header">
            <h2>Atividade</h2>
          </div>
          <div class="timeline-centered">
            <article class="timeline-entry">

              <div class="timeline-entry-inner">

                <div class="timeline-icon bg-primary">
                  <i class="entypo-feather"></i>
                </div>

                <div class="timeline-label">
                  <h2><a href="#">José Soares </a> <span>aceitou a tua resposta.</span></h2>
                  <p>A tua resposta ao tópico "Diferenças de tipos de Web Service: SOAP, REST, XML" satisfez os requisitos do utilizador com sucesso.</p>
                </div>
              </div>
            </article>


          <article class="timeline-entry">

            <div class="timeline-entry-inner">

              <div class="timeline-icon bg-primary">
                <i class="entypo-feather"></i>
              </div>

              <div class="timeline-label">
                <h2>Comentaste o tópico <span>"Diferenças de tipos de Web Service: SOAP, REST, XML"</span></h2>
              </div>
            </div>
          </article>

          </div>




          <div class="row" id="stats">
            <div class="page-header">
              <h2>As minhas estatísticas</h2>
            </div>
            <div class="col col-md-5 col-sm-12">
              <h4>Respostas aceites:</h4>
              <canvas id="accepted-answers"></canvas>
              <script>
                var ctx = document.getElementById("accepted-answers").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'pie',
                  data: {
                    labels: ["javaScript", "C++", "web-design", "java", "C#", ".net", "web"],
                    datasets: [{
                      backgroundColor: [
                        "#2ecc71",
                        "#3498db",
                        "#95a5a6",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e"
                      ],
                      data: [6, 7, 1, 7, 24, 15, 3]
                    }]
                  }
                });
              </script>
            </div>
            <div class="col col-md-5 col-sm-12">
              <h4>Onde comento:</h4>
              <canvas id="where-i-comment"></canvas>
              <script>
                var ctx = document.getElementById("where-i-comment").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'pie',
                  data: {
                    labels: ["javaScript", "C++", "web-design", "java", "C#", ".net", "web"],
                    datasets: [{
                      backgroundColor: [
                        "#2ecc71",
                        "#3498db",
                        "#95a5a6",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e"
                      ],
                      data: [12, 19, 3, 17, 28, 24, 7]
                    }]
                  }
                });
              </script>
            </div>
          </div>
          <div class="row" id="my-topics">
            <div class="page-header">
              <h2>Os meus tópicos</h2>
            </div>

                    <?php  $_smarty_tpl->tpl_vars['topic1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic1']->key => $_smarty_tpl->tpl_vars['topic1']->value) {
$_smarty_tpl->tpl_vars['topic1']->_loop = true;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("topicPresentation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('votes'=>$_smarty_tpl->tpl_vars['topic1']->value['rating'],'answers'=>10,'visua'=>10,'topicId'=>$_smarty_tpl->tpl_vars['topic1']->value['id'],'topic'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'tags'=>$_smarty_tpl->tpl_vars['topic1']->value['tags'],'author'=>$_smarty_tpl->tpl_vars['topic1']->value['author']), 0);?>

                    <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
