<script src="../../js/chartCreationAdmin.js"></script>
<script src="../../js/memberList.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js"></script>
<script>
var pages = '{$pages}'
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-md-offset-1 additional">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul class="list-group text-center hidden-xs hidden-sm">
                        <li class="list-group-item active"> <a href="#userlist"><i class="glyphicon glyphicon-user"></i> Utilizadores</a> </li>
                        <li class="list-group-item"> <a href="#statistics"><i class="glyphicon glyphicon-list-alt"></i> Estatísticas</a> </li>
                    </ul>
                    <ul class="list-inline text-center hidden-md hidden-lg">
                        <li> <a href="#userlist"><i class="glyphicon glyphicon-user"></i> User List</a> </li>
                        <li> <a href="#statistics"><i class="glyphicon glyphicon-dashboard"></i> Statistics</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1 main">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div id="userlist" class="row">
                        <div class="page-header">
                            <h2>Lista de Utilizadores</h2>
                        </div>
                        <div class="list-group">
                            {foreach $users as $user}
                                {include file="userElem.tpl" username=$user.name id=$user.id}
                            {/foreach}
                        </div>
                        <ul id="user-pagination" class="pagination">
                        </ul>
                    </div>
                    <div id="statistics" class="row">
                        <div class="page-header">
                            <h2>Estatísticas</h2>
                        </div>
                        <div class="row">
                            <ul class="list-inline text-center hidden-xs hidden-sm">
                                <li class="statistic">
                                    <h4>Utilizadores</h4>
                                    <span class="glyphicon glyphicon-user blue"></span>
                                    <div class="statistic amount">{$totalUsers}</div>
                                </li>
                                <li class="statistic">
                                    <h4>Utilizadores ativos</h4>
                                    <span class="glyphicon glyphicon-user green"></span>
                                    <div class="statistic amount">{$activeUsers}</div>
                                </li>
                                <li class="statistic">
                                    <h4>Tópicos criados</h4>
                                    <span class="glyphicon glyphicon-question-sign orange"></span>
                                    <div class="statistic amount">{$topicCount}</div>
                                </li>
                            </ul>
                            <ul id="phone_statistics" class="text-center hidden-md hidden-lg">
                                <li class="statistic">
                                    <h4>Utilizadores</h4>
                                    <span class="glyphicon glyphicon-user blue"></span>
                                    <div class="statistic amount">12455</div>
                                </li>
                                <li class="statistic">
                                    <h4>Utilizadores ativos</h4>
                                    <span class="glyphicon glyphicon-user green"></span>
                                    <div class="statistic amount">12455</div>
                                </li>
                                <li class="statistic">
                                    <h4>Tópicos criados</h4>
                                    <span class="glyphicon glyphicon-question-sign orange"></span>
                                    <div class="statistic amount">12455</div>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col col-md-6 col-md-offset-3">
                                <h3>Tópicos por curso</h3>
                                <canvas id="topics-by-course"></canvas>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-md-6 col-md-offset-3">
                                <h3>Tags mais utilizadas</h3>
                                <canvas id="topics-by-tags"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="common/footer.tpl"};
