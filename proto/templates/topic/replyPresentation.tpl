<div class="row replies">
    {foreach $comments as $comment}
        <div class="col-md-10 col-md-offset-1 panel-body reply">
            <span class="text-muted"><strong>{$comment.publisher}</strong> commented {getTimeDiff($comment.creationdate)} days ago:</span> <span class="reply-text">{$comment.content}</span>
        </div>
    {/foreach}
</div>