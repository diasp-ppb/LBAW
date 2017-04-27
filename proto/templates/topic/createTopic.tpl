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
                    <input type="text" class="form-control" id="tags" name="tags" placeholder="Tags" data-role="tagsinput" />
                </div>
                <div class="form-group">
                    <div id="wmd-button-bar"></div>
                    <textarea id="wmd-input" name="wmd-input" required="required" class="wmd-input"></textarea>
                    <div id="wmd-preview" class="wmd-preview text-left well"></div>

                    <script type="text/javascript" src="../../js/textEditor.js"></script>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-info">
                    </div>
                </div>
            </form>
            <script src="../../js/lockSubmit.js"> </script>
            {include file="common/helpModal.tpl"}
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
