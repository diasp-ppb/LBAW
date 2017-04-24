<div class="row attach-container" id="{$id}">
    <div class="col-md-1">
        <div class="thumbnail hidden-xs hidden-sm">
            <img class="img-responsive user-photo" src="{getUserImage($userId)}">
        </div>
    </div>
    <div class="col-md-10 panel panel-default">
        <div class="comment-header panel-heading">
            <strong>{getNameById($userId)}</strong> <span class="text-muted">commented {calculateTimeDiff($id)} days ago</span>
            <span class="pull-right">
                <button type="button" class="upvote btn" onclick="verifyVote('upvote',{$id})"><i class="glyphicon glyphicon-circle-arrow-up"></i></button>
                <button type="button" class="downvote btn" onclick="verifyVote('downvote',{$id})"><i class="glyphicon glyphicon-circle-arrow-down"></i></button>
                <button type="button" class="correct btn"><i class="glyphicon glyphicon-ok"></i></button>
                <button type="button" id="rating" class="rating btn" disabled="disabled">{$rating}</button>
            </span>
        </div>

        <div class="row comment-body">
            {textToMarkdown($id)}
        </div>
    </div>
</div>
<br>