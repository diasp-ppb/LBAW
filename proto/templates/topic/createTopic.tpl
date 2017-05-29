<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 form text-center">
            <div id="row text-center">
                <label id="top-title">Criar Tópico</label>
            </div>

            <form id="createTopicForm" role="form" method="post" action="../../actions/topic/createTopic.php">
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title" required="required" placeholder="Titulo da pergunta"/>
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control typeAhead" id="tags" name="tags" placeholder="Tags" data-role="tagsinput" />
                    <script type="text/javascript" src="../../js/typeAhead.js"></script>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control hidden" id="s_token" name="s_token" value="{$smarty.session.s_token}"/>
                </div>
                {include file='common/textEditor.tpl'}
            </form>
            <div style="margin-top: 1em;" id="createTopic-messages"></div>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
