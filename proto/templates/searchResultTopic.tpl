<div class="row entry {$type}">
    <div class="col-md-10">
      <a class="title" rel="../../page/topic.php?id={$topicId}">
        {$title}
      </a>
      <div class="tags">
        {foreach $tags as $v}
          <span class="tag"> <a href='../pages/search.php?search={$v.name}'  class="linkTopicTag" title="" rel="tag"> {$v.name} </a> </span>
        {/foreach}
      </div>
    </div>
    <div class="col-md-10">
      <p>Postado por: {$author}</p>
    </div>
</div>
