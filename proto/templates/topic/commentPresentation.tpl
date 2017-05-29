<div class="row attach-container comment" id="{$postid}">
    <div class="col-md-1">
        <div class="thumbnail hidden-xs hidden-sm">
            <img class="img-responsive user-photo" src="{getUserImage($userId)}">
        </div>
    </div>
    <div class="col-md-10 panel panel-default">
        <div class="comment-header panel-heading" id="{$postid}header">
            <strong><a href='../../pages/member/profile.php?id={$topicInfo.userid}' style="color: #303641">{getNameById($userId)}</a></strong> <span class="text-muted">comentou há {calculateTimeDiff($id)} dias </span>
            <span class="pull-right">
                {if $smarty.session.id!=getUserIdByTopic($postid)}
                <button type="button" class="upvote btn" onclick="verifyVote('upvote',{$postid})"><i class="glyphicon glyphicon-circle-arrow-up"></i></button>
                <button type="button" class="downvote btn" onclick="verifyVote('downvote',{$postid})"><i class="glyphicon glyphicon-circle-arrow-down"></i></button>
                {if (hasAlreadyAnAccept($postid) && $smarty.session.id==getUserAcceptTopic($postid))}
                    <button type="button" class="correct btn" onclick="verifyVote('accept',{$postid})"><i class="glyphicon glyphicon-ok"></i>ola1</button>
                {elseif ($smarty.session.usertype == 'expert' || $creatorId == $smarty.session.id) && !hasAlreadyAnAccept($postid)}
                        <button type="button" class="correct btn" onclick="verifyVote('accept',{$postid})"><i class="glyphicon glyphicon-ok"></i>ola2</button>
                {/if}
                {/if}
                <button type="button" id="rating" class="rating btn" disabled="disabled">{$rating}</button>
                {if isset($smarty.session)}
                    {if $smarty.session.usertype == 'admin'}
                    <button id="comment{$postid}" type="buton" class="remove remove-comment btn"><i class="glyphicon glyphicon-remove"></i></button>
                    {/if}
                {/if}
            </span>
        </div>
        <div class="row comment-body panel-body">
            {textToMarkdown($content)}
            <br>
            {if isset($smarty.session.id)}
                <a href="#" class="pull-right new-reply id-{$postid}"><small>Responder</small></a>
            {/if}
        </div>
    </div>
    <script>
        verifyVotesButtons({$postid}, {$smarty.session.id});
        verifyAcceptVotes({$postid});
    </script>
</div>
{include file="topic/replyPresentation.tpl" postid=$postid comments=$comments}
