<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 main">
            <div class="row attach-container" id="{$userTopicId}">
            <div class="col-md-1">
                <div class="row">
                    <div class="thumbnail hidden-xs hidden-sm">
                        <img class="img-responsive user-photo" src="{$userImage}">
                    </div>
                </div>
            </div>
            <div class="col-md-10 topic-main panel panel-default">
                <div class="row topic-header panel-heading">
                    <div>
                        <strong>{$userName}</strong> <span class="text-muted">posted {$timeDiff} days ago</span>
                        <span class="pull-right">
                            <button type="button" class="upvote btn" onclick="verifyVote('upvote',{$topicId})"><i class="glyphicon glyphicon-circle-arrow-up"></i></button>
                            <button type="button" class="downvote btn" onclick="verifyVote('downvote',{$topicId})"><i class="glyphicon glyphicon-circle-arrow-down"></i></button>
                            <button type="button" class="rating btn" disabled="disabled">{$ratingTopic}</button>
                        </span>
                    </div>

                    <a class="title" href="#">{$topicTitle}</a>

                    <div class="tags">
                        <span class="tag">web-service</span>
                    </div>
                </div>
                <div class="row topic-body panel-body">
                    {textToMarkdown($topicId)}
                </div>
            </div>
        </div>
        <div class="row replies">
            <div class="col-md-10 col-md-offset-1 panel-body reply">
                <span class="text-muted"><strong>Fábio Caramelo</strong>  commented 5 days ago:</span> <span class="reply-text">Tenho a mesma duvida!</span>
            </div>
        </div>
            {foreach $answers as $answer}
                {include file="commentPresentation.tpl" userId=$answer.userid id=$answer.id rating=$answer.rating}
            {/foreach}
    <div id="wmd-button-bar"></div>
    <textarea id="wmd-input" class="wmd-input"></textarea>
    <div id="wmd-preview" class="wmd-preview text-left well"></div>
    <script type="text/javascript" src="../../js/textEditor.js"></script>


    <div id="buttondiv" class="text-center">
        <input type="submit" class="btn btn-info" value="Comentar"/>
    </div>
</div>
</div>
</div>

{include file='common/footer.tpl'}
