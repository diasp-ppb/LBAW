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
                <h2><a href="#">Criaste o tópico</a> <span>{$event.title}</span></h2>
                <p>{$event.creationdate}</p>
            {elseif $event.tablename == 'answer'}
                <h2><a href="#">Respondeste ao tópico</a> <span>{$event.posttitle}</span></h2>
                <p>{$event.creationdate}</p>
            {elseif $event.tablename == 'comment'}
                <h2><a href="#">Comentaste o tópico</a> <span>{$event.title}</span></h2>
                <p>{$event.creationdate}</p>
            {/if}
        </div>
    </div>
</article>