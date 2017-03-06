<?php
include "templates/header.php"
?>
  <script src="https://unpkg.com/marked@0.3.6"></script>
  <script src="https://unpkg.com/lodash@4.16.0"></script>
  <script src="js/vue.min.js"></script>
  <script src="js/vue-editor.js"></script>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 form text-center">
        <div id="row text-center">
          <label id="top-title">Criar Tópico</label>
        </div>
        <div class="form-group">
          <label for="title">Titulo</label>
          <input type="text" class="form-control" id="title" placeholder="Titulo da pergunta" />
        </div>
        <div class=" form-group">
          <label for="tags">Tags</label>
          <input type="text" class="form-control" id="tags" placeholder="Tags" />
        </div>
        <div id="editor">
          <textarea :value="input" @input="update"></textarea>
          <div v-html="compiledMarkdown"></div>
        </div>
        <input type="submit" class="btn btn-info" value="Submit Button" />
      </div>
    </div>
  </div>


  <?php include  "templates/footer.php"?>