<div id="topic">
     <div class="col-md-1 topic-status hidden-xs hidde-sm">
        {$votes}
        <div>Votos</div>
     </div>

    <div class="col-md-1 topic-status hidden-xs hidde-sm">

      {$answers}

        <div>Respostas</div>
    </div>
    
    <div class="col-md-1 topic-status hidden-xs hidde-sm">

      {$visua}

        <div>Visualizações</div>
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
