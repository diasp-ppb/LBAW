<?php
include "templates/header.php"
?>

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

        <div id="wmd-button-bar"></div>
        <textarea id="wmd-input" class="wmd-input"></textarea>
        <div id="wmd-preview" class="wmd-preview text-left well"></div>
        <script>
            var converter = Markdown.getSanitizingConverter();
            var editor = new Markdown.Editor(converter);
            editor.run();
        </script>

        <script>
            $("#wmd-redo-button").addClass( "hidden-xs" );
            $("#wmd-undo-button").addClass( "hidden-xs" );
            $("#wmd-spacer3").addClass( "hidden-xs" );
            $("#wmd-button-row").append("<li class='wmd-spacer hidden-xs' style='left:370'></li>");
            $("#wmd-button-row").append("<li class='wmd-button hidden-xs' id='help-button'  title='Heading <h1>/<h2> Ctrl+Shift+H' style='left: 385px;'><span style='background-position: -240px 0px;'></span></li>");
            $("#help-button").click(function(){
              $("#squarespaceModal").modal('toggle');
            });

            
            
        </script>

        <div class="center">
          <input type="submit" class="btn btn-info" value="Submit"/>
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