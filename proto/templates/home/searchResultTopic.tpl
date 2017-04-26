<div class="row entry {$type}">
    <div class="col-md-10">
      <a class="title" href="../topic/topic.php?id={$topicId}">
        {$title}
      </a>
      <div class="tags">
        {foreach $tags as $v}
          <span class="tag"> <a href='../home/search.php?search={$v.name}'  class="linkTopicTag" title="" rel="tag"> {$v.name} </a> </span>
        {/foreach}
      </div>
    </div>
    <div class="col-md-10">
      <p>Postado por: {$author}</p>
    </div>
</div>
