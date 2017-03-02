<?php
include "templates/header.php"
?>

<script src="js/bootstrap-markdown.js"></script>
<script src="js/markdown.min.js"></script>
<script src="js/marked.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-markdown.min.css">

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
     <textarea name="content" data-provide="markdown" rows="10"></textarea>
    </div>

    
     </br>
        
        
        
        <input type="submit" class="btn btn-info" value="Submit Button"/>
        </br>

 </div>

 <div class="col-md-2 col-md-offset-1" style="background-color:#dee2e8; height:100%;">


</div>


<div>

<?php include  "templates/footer.php"?>