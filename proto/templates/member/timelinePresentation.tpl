<article class="timeline-entry">
    <div class="timeline-entry-inner">
        {if $event.tablename == 'question'}
            <div class="timeline-icon bg-primary">
        {elseif $event.tablename == 'answer'}
            <div class="timeline-icon bg-info">
        {elseif $event.tablename == 'comment'}
            <div class="timeline-icon bg-info">
        {/if}
                <i class="entypo-feather"></i>
            </div>

        <div class="timeline-label">
            {if $event.tablename == 'question'}
                <h2><span>Criou o tópico</span> <a href='../../pages/topic/topic.php?id={$event.postid}' style="color: #303641">{$event.title}</a></h2>
                <p>{$event.creationdate}</p>
            {elseif $event.tablename == 'answer'}
                <h2><span>Respondeu ao tópico</span> <a href='../../pages/topic/topic.php?id={$event.postid}' style="color: #303641">{$event.posttitle}</a></h2>
                <p>{$event.creationdate}</p>
            {elseif $event.tablename == 'comment'}
                <h2><span>Comentou o tópico</span> <a href='../../pages/topic/topic.php?id={$event.postid}' style="color: #303641">{$event.title}</a></h2>
                <p>{$event.creationdate}</p>
            {/if}
        </div>
    </div>
</article>