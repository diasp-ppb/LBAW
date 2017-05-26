<script src="../../js/createTopic.js"></script>
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

                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css">
                    <script type="text/javascript" src="../../js/typeAhead.js"></script>
                </div>
                <div class="form-group">
                    <div id="wmd-button-bar"></div>
                    <textarea id="wmd-input" name="wmd-input" required="required" class="wmd-input"></textarea>
                    <div id="wmd-preview" class="wmd-preview text-left well"></div>

                    <script type="text/javascript" src="../../js/textEditor.js"></script>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input id="submit-topic" name="submit" type="submit" value="Submit" class="btn btn-info">
                    </div>
                </div>
            </form>
            <div id="createTopic-messages"></div>
            <script src="../../js/lockSubmit.js"> </script>
            {include file="common/helpModal.tpl"}
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
