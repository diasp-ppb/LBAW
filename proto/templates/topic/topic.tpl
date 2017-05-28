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
                            <a href="#" class="pull-right new-reply id-{$topicInfo.id}"><small>Responder</small></a>
                        {/if}
                    </div>
                </div>
                <script> 
                    verifyVotesButtons({$topicInfo.id}, {$smarty.session.id}); 
                </script> 
            </div>

            {include file="topic/replyPresentation.tpl" postid=$topicInfo.id comments=$comments[$topicInfo.id]}
            
            {foreach $answers as $answer}
                {include file="topic/commentPresentation.tpl" creatorId=$topicInfo.userid userId=$answer.userid rating=$answer.rating content=$answer.content postid=$answer.id comments=$comments[$answer.id]}
            {/foreach}
        </div>
        <hr>
        <div class="col-md-8 col-md-offset-2 main">
            <h3 style="margin-bottom:0">A tua resposta</h3>
            {include file="common/textEditor.tpl"}
            <div class="form-group">
                <input type="hidden" name="postid" value={$topicInfo.id}>
                <input type="hidden" name="userid" value={$smarty.session.id}>
            </div>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
