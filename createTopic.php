<?php
include "templates/header.php"


?>
<div class="col-md-2" style="background-color:#dee2e8; height:100%;">


</div>


<div class="col-md-offset-1 col-md-6 form text-center">
    <div id="row text-center">
        <h2> Criar Tópico </h2>
    </div>
    <div class="form-group">
             <label for="title">Titulo</label>
             <input type="text" class="form-control" id="title" placeholder="Titulo da pergunta" />
    </div>

        </br>
  
        
    <div class=" form-group">
             <label for="tags">Tags</label>
             <input type="text" class="form-control" id="tags" placeholder="Tags"/>
    </div>
        
    </br>


    <div class=" form-group">
             <textarea class="form-control" id="content" style="min-height: 9% " value="" placeholder="Pergunta aqui "></textarea>
    </div>

    
     </br>
        
        
        
        <input type="submit" class="btn btn-info" value="Submit Button"/>
        </br>

 </div>

 <div class="col-md-2 col-md-offset-1" style="background-color:#dee2e8; height:100%;">


</div>


<div>

<?php include  "templates/footer.php"?>