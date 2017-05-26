<div class="row replies">
    {foreach $comments as $comment}
        <div class="col-md-10 col-md-offset-1 panel-body reply">
            <span class="text-muted"><strong>{$comment.publisher}</strong> commented {getTimeDiff($comment.creationdate)} days ago:</span> <span class="reply-text">{$comment.content}</span>
        </div>
    {/foreach}
</div>
<div class="row">
    <form role="form" class="col-md-10 col-md-offset-1 new-reply">
        <div class="form-group">
            <input type="hidden" name="postid" value={$postid}>
            <input type="hidden" name="userid" value={$smarty.session.id}>
            <textarea name="content" class="form-control" placeholder="Insira aqui a sua mensagem..." required></textarea>
        </div>
    </form>
</div>
<br><br>