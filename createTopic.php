<?php
include "templates/header.php"


?>

<div class="col-md-offset-3 col-md-6 form text-center">
    <div id="row text-center">
        <h2> Criar Tópico </h2>
    </div>
    <div class="row form-group">
             <label for="title">Titulo</label>
             <input type="text" class="form-control" id="title" />
    </div>

        </br>
  
        
    <div class="row form-group">
             <label for="tags">Tags</label>
             <input type="text" class="form-control" id="tags" />
    </div>
        
    </br>


    <div class="row form-group">
             <textarea class="form-control" id="content" style="min-height: 9% " value=""></textarea>
    </div>

    
     </br>
        
        
        
        <input type="submit" class="btn btn-info" value="Submit Button"/>
        </br>

 </div>

<div>