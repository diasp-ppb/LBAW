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
          <input type="text" class="form-control" id="title" placeholder="Titulo da pergunta"/>
        </div>
        <div class=" form-group">
          <label for="tags">Tags</label>
          <input type="text" class="form-control" id="tags" placeholder="Tags"/>
        </div>
        <div id="editor">
          <textarea :value="input" @input="update"></textarea>
          <div v-html="compiledMarkdown"></div>
        </div>
        <div class="center">
          <input type="submit" class="btn btn-info" value="Submit Button"/>
          <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Click Me</button>
        </div>

        <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">Markdown Help</h3>
              </div>
              <div class="modal-body">
                <table class="table table-striped">
                  <tbody>
                  <tr>
                    <td><strong>Negrito</strong></td>
                    <td>**Negrito**</td>
                  </tr>
                  <tr>
                    <td><i>Itálico</i></td>
                    <td>*Itálico</td>
                  </tr>
                  <tr>
                    <td><del>Riscar</del></td>
                    <td>~~Riscar~~</td>
                  </tr>
                  <tr>
                    <td>Título</td>
                    <td>#H1 ##H2 ###H3</td>
                  </tr>
                  <tr>
                    <td><li>item</li></td>
                    <td>* item</td>
                  </tr>
                  <tr>
                    <td>Blockquotes</td>
                    <td>> Blockquotes </td>
                  </tr>
                  <tr>
                    <td><span class="trpChatText"><span class="mention">@somebody</span> (mention)</span></td>
                    <td>@somebody</td>
                  </tr>
                  <tr>
                    <td><span class="issue open">#123</span> (issue)</td>
                    <td>#123</td>
                  </tr>
                  <tr>
                    <td><a href="https://guides.github.com/features/mastering-markdown/" target="_rick">Link</a></td>
                    <td>[title](http://)</td>
                  </tr>
                  <tr>
                    <td>Imagem</td>
                    <td>![alt](http://)</td>
                  </tr>
                  <tr>
                    <td><code>código</code></td>
                    <td>`código`</td>
                  </tr>
                  <tr>
                    <td>L<sup>a</sup>T<sub>e</sub>X</td>
                    <td>$$LaTeX code$$</td>
                  </tr>
                  <tr>
                    <td><pre style="display: inline-block; margin: 4px 0"><code><span id="var-code" class="keyword">var </span>code = <span id="variable-code" class="string">"formatted"</span>;</code></pre></td>
                    <td style="line-height: 100%">``` <i style="color: rgba(0,0,0,0.5)">(shift+enter for line break)</i><br>var code = "formatted";<br>```</td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include  "templates/footer.php"?>