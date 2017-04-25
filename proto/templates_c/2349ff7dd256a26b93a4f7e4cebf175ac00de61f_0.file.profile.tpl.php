<?php
/* Smarty version 3.1.30, created on 2017-04-25 01:32:25
  from "/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fe9919a6b050_03036134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2349ff7dd256a26b93a4f7e4cebf175ac00de61f' => 
    array (
      0 => '/opt/lbaw/lbaw1664/public_html/testePedro/LBAW/proto/templates/profile.tpl',
      1 => 1493076074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:topicPresentation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58fe9919a6b050_03036134 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid">
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emails']->value, 'email');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
?>
            <p><i class="glyphicon glyphicon-envelope"></i><?php echo $_smarty_tpl->tpl_vars['email']->value['mail'];?>
</p>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
            <p><i class="glyphicon glyphicon-globe"></i><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</p>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
              <?php echo '<script'; ?>
>
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
              <?php echo '</script'; ?>
>
            </div>
            <div class="col col-md-5 col-sm-12">
              <h4>Onde comento:</h4>
              <canvas id="where-i-comment"></canvas>
              <?php echo '<script'; ?>
>
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
              <?php echo '</script'; ?>
>
            </div>
          </div>
          <div class="row" id="my-topics">
            <div class="page-header">
              <h2>Os meus tópicos</h2>
            </div>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topics']->value, 'topic1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topic1']->value) {
?>
                        <?php $_smarty_tpl->_subTemplateRender("file:topicPresentation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('votes'=>$_smarty_tpl->tpl_vars['topic1']->value['rating'],'answers'=>10,'visua'=>10,'topicId'=>$_smarty_tpl->tpl_vars['topic1']->value['id'],'topic'=>$_smarty_tpl->tpl_vars['topic1']->value['title'],'tags'=>$_smarty_tpl->tpl_vars['topic1']->value['tags'],'author'=>$_smarty_tpl->tpl_vars['topic1']->value['author']), 0, true);
?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
