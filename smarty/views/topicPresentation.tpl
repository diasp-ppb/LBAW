<div class="topic-presentation">
    <div class="col-md-3 hidden-xs  hidden-sm">
      <div class="row">
        <div class="col-md-4 topic-status hidden-xs hidden-sm">
        {$votes}
        <div>Votos</div>
     </div>

    <div class="col-md-4 topic-status hidden-xs hidden-sm">

      {$answers}

        <div>Respostas</div>
    </div>
    
    <div class="col-md-4 topic-status hidden-xs hidden-sm">

      {$visua}

        <div>Visualizações</div>
    </div>     
      </div>
    </div>
     
    
    <div class="col-md-6">
        <a class="title" href="#">
          {$topic}
        </a>
        <div class="tags">

          {foreach name=outer item=v from=$tags}
          <span class="tag">{$v}</span> 
          {/foreach}
        </div>
    </div>
    
    
    <div class="col-md-3 author text-right">
        {$author}
    </div>
</div>
