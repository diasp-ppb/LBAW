<div class="container-fluid">
<div class="row">
  <div class="col-md-2 col-md-offset-1 additional">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <div class="user-info text-center">
            <img src="{$user.image}" class="img-circle img-thumbnail" style="height: 200px; width: 200px" alt="Profile Picture">
            <h3>{$user.name}</h3>
            <p hidden><i class="glyphicon glyphicon-map-marker"></i> Porto, Portugal</p>
            {foreach from=$emails item=$email}
            <p><i class="glyphicon glyphicon-envelope"></i>{$email.mail}</p>
            {/foreach}
            {foreach from=$links item=$link}
            <p><i class="glyphicon glyphicon-globe"></i>{$link}</p>
            {/foreach}
          </div>
        <ul class="list-group text-center hidden-xs hidden-sm">
          <li class="list-group-item active"> <a href="#"><i class="glyphicon glyphicon-home"></i>Perfil</a> </li>
          <li class="list-group-item"> <a href="./editProfile.php?id={$user.id}"><i class="glyphicon glyphicon-cog"></i>Definições</a> </li>
          <li class="list-group-item"> <a href="#stats"><i class="glyphicon glyphicon-list-alt"></i>Estatísticas</a> </li>
          <li class="list-group-item"> <a href="#my-topics"><i class="glyphicon glyphicon-question-sign"></i>Tópicos</a> </li>
        </ul>
        <ul class="list-inline text-center hidden-md hidden-lg">
          <li> <a href="#"><i class="glyphicon glyphicon-home"></i>Perfil</a> </li>
          <li> <a href="./editProfile.php?id={$user.id}"><i class="glyphicon glyphicon-cog"></i>Definições</a> </li>
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
          <div id="timeline" class="timeline-centered">
            {foreach $timeline as $event}
                {include file="member/timelinePresentation.tpl" event=$event}
            {/foreach}
            <article class="timeline-entry begin">
              <div class="timeline-entry-inner">
                  <div class="timeline-icon bg-success" style="transform: rotate(-90deg); -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                      <i class="entypo-flight"></i>
                  </div>
                  <div class="timeline-label">
                      <h2>Nasceu</h2>
                      <p>{$creationDate}</p>
                  </div>
              </div>
            </article>
          </div>
          <div class="text-center">
            <button id="show-more" type="button" class="btn">+</button>
          </div>

          <div class="row" id="stats">
            <div class="page-header">
              <h2>As minhas estatísticas</h2>
            </div>
            <div class="col col-md-5 col-sm-12">
              <h4>Respostas aceites:</h4>
              <canvas id="accepted-answers"></canvas>
            </div>
            <div class="col col-md-5 col-sm-12">
              <h4>Onde comento:</h4>
              <canvas id="where-i-comment"></canvas>
            </div>
          </div>
          <div class="row" id="my-topics">
            <div class="page-header">
              <h2>Os meus tópicos</h2>
            </div>
            {foreach $topics as $topic1 }
                {include file="common/topicPresentation.tpl" votes=$topic1.rating answers=10 visua=$topic1.visualizations topicId=$topic1.id topic=$topic1.title  tags=$topic1.tags  author=$topic1.author}
            {/foreach}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{include file='common/footer.tpl'}
