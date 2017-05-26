<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 main">
            <div class="row attach-container" id="{$topicInfo.id}">
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
                        <strong>{$userName}</strong> <span class="text-muted">posted {$topicInfo.timeDiff} days ago</span>
                        <span class="pull-right">
                            <button type="button" class="upvote btn" onclick="verifyVote('upvote', {$topicInfo.id})"><i class="glyphicon glyphicon-circle-arrow-up"></i></button>
                            <button type="button" class="downvote btn" onclick="verifyVote('downvote', {$topicInfo.id})"><i class="glyphicon glyphicon-circle-arrow-down"></i></button>
                            <button type="button" class="rating btn" disabled="disabled">{$topicInfo.rating}</button>
                        </span>
                    </div>

                    <a class="title" href="#">{$topicInfo.title}</a>

                    <div class="tags">
                       {foreach $tags as $v}
                            <span class="tag"> <a href='../../pages/home/search.php?search={$v.name}'  class="linkTopicTag" title="" rel="tag"> {$v.name} </a> </span>
                       {/foreach}
                    </div>
                </div>
                <div class="row topic-body panel-body">
                    {textToMarkdown($topicInfo.content)}
                    <br>
                    {if isset($smarty.session.id)}
                        <a href="#" class="pull-right"><small>Responder</small></a>
                    {/if}
                </div>
            </div>
        </div>
        
        {include file="topic/replyPresentation.tpl" postid=$topicInfo.id comments=$comments[$topicInfo.id]}

        {foreach $answers as $answer}
            {include file="topic/commentPresentation.tpl" userId=$answer.userid id=$answer.id rating=$answer.rating content=$answer.content postid=$answer.id comments=$comments[$answer.id]}
        {/foreach}

    <div id="wmd-button-bar"></div>
    <textarea id="wmd-input" class="wmd-input"></textarea>
    <div id="wmd-preview" class="wmd-preview text-left well"></div>
    <script type="text/javascript" src="../../js/textEditor.js"></script>
    {include file="common/helpModal.tpl"}
    <div id="buttondiv" class="text-center">
        <input type="submit" class="btn btn-info" value="Comentar"/>
    </div>
</div>
</div>
</div>

{include file='common/footer.tpl'}
