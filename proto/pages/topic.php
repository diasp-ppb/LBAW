<?php
include "../templates/header.php"
?>


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 main">
        <div class="row attach-container">
          <div class="col-md-1">
            <div class="row">
              <div class="thumbnail hidden-xs hidden-sm">
                <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
              </div>
            </div>
          </div>
          <div class="col-md-10 topic-main panel panel-default">
            <div class="row topic-header panel-heading">
              <div>
                <strong>José Soares</strong> <span class="text-muted">posted 5 days ago</span>
                <span class="pull-right">
                    <button type="button" class="upvote btn"><i class="glyphicon glyphicon-circle-arrow-up"></i></button>
                    <button type="button" class="downvote btn"><i class="glyphicon glyphicon-circle-arrow-down"></i></button>
                    <button type="button" class="rating btn" disabled="disabled">1</button>
                </span>
              </div>

              <a class="title" href="#">Diferenças de tipos de Web Service: SOAP, REST, XML</a>

              <div class="tags">
                <span class="tag">web-service</span>
              </div>
            </div>
            <div class="row topic-body panel-body">

              <ul>
                <li>Quais as principais diferenças entre esses tipos de Web Service? </li>
                <li>Em quais casos se aplicam?</li>
                <li>Existe alguma diferença de performance?</li>
              </ul>

            </div>
          </div>
        </div>
        <div class="row replies">
          <div class="col-md-10 col-md-offset-1 panel-body reply">
            <span class="text-muted"><strong>Fábio Caramelo</strong>  commented 5 days ago:</span> <span class="reply-text">Tenho a mesma duvida!</span>
          </div>
        </div>

        <div class="row attach-container">
          <div class="col-md-1">
            <div class="thumbnail hidden-xs hidden-sm">
              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div>
          </div>
          <div class="col-md-10 panel panel-default">
            <div class="comment-header panel-heading">
              <strong>Pedro Guerra</strong> <span class="text-muted">commented 5 days ago</span>
              <span class="pull-right">
                <button type="button" class="upvote btn"><i class="glyphicon glyphicon-circle-arrow-up"></i></button>
                <button type="button" class="downvote btn"><i class="glyphicon glyphicon-circle-arrow-down"></i></button>
                <button type="button" class="correct btn"><i class="glyphicon glyphicon-ok"></i></button>
                <button type="button" class="rating btn" disabled="disabled">1</button>
              </span>
            </div>

            <h1>SOAP</h1>

            <p><a href="http://www.w3.org/TR/soap12-part1/"><strong>SOAP</strong></a> é um protocolo de transferência de mensagens em formato XML para uso em ambientes distribuídos. O padrão SOAP funciona como um tipo de framework que permite a interoperabilidade
              entre diversas plataformas com mensagens personalizadas.</p>

            <p>Aplicando este padrão em Web Services, geralmente usa-se o WSDL para descrever a estrutura das mensagens SOAP e as ações possíveis em um <em>endpoint</em>.</p>

            <p>Uma das maiores vantagens disso é que várias linguagens e ferramentas conseguem ler e gerar mensagens facilmente. Várias linguagens de programação permitem a geração de objetos de domínio, Stubs e Skeletons a partir da definição do WSDL, permitindo
              a comunicação remota via <a href="http://en.wikipedia.org/wiki/Remote_procedure_call">RPC</a> através de chamadas a métodos remotos, inclusive com argumentos complexos, como se fossem chamadas locais.</p>

            <p>O problema desse padrão, é que ele adiciona um <em>overhead</em> considerável, tanto por ser em XML quanto por adicionar muitas tags de meta-informação. Além disso, a serialização e desserialização das mensagens pode consumir um tempo considerável.
            </p>

            <h1>REST</h1>

            <p>REST é outro um protocolo de comunicação, baseado no protocolo de hipermídia HTTP. Porém ele não impõe restrições ao formato da mensagem, apenas no comportamento dos componentes envolvidos.</p>

            <p>A maior vantagem do protocolo REST é sua flexibilidade. O desenvolvedor pode optar pelo formato mais adequado para as mensagens do sistema de acordo com sua necessidade específica. Os formatos mais comuns são JSON, XML e texto puro, mas em
              teoria qualquer formato pode ser usado.</p>

            <p>Isso nos leva a outra vantagem: quase sempre Web Services que usam REST são mais "leves" e, portanto, mais rápidos.</p>

            <p>O problema com o REST pode surgir justamente por causa de suas vantagens. Como a definição do corpo de dados fica totalmente a cargo do desenvolvedor, os problemas de interoperabilidade são mais comuns.</p>

            <h1>SOAP ou REST?</h1>

            <p><strong><em>Aviso: Esta é uma opinião pragmática.</em></strong></p>

            <p>Em geral, SOAP é uma boa opção para instituições com padrões rígidos e ambientes complexos (várias plataformas e sistemas). Muitas ferramentas corporativas (como <a href="http://en.wikipedia.org/wiki/Enterprise_service_bus">ESB</a>) tiram
              vantagem do padrão e possibilitam filtrarem, enfileiramento, classificação e redirecionamento das mensagens trocadas entre sistemas.</p>

            <p>No restante, para uso no dia-a-dia, não vejo motivos concretos para não usar REST e JSON. Praticamente todas as plataformas e linguagens modernas que conheço suportam esses conceitos e a solução final é muito mais simples do que o equivalente
              em SOAP. </p>

            <p>Além disso, integrações com alto volume de requisições são inviáveis em SOAP. REST é capaz de atender volume e complexidade sem dificuldades, exigindo apenas um mínimo de experiência do desenvolvedor para estabelecer e reforçar os padrões
              adequados.
            </p>

          </div>
        </div>

        <div id="wmd-button-bar"></div>
        <textarea id="wmd-input" class="wmd-input"></textarea>
        <div id="wmd-preview" class="wmd-preview text-left well"></div>
        <script>
            var converter = Markdown.getSanitizingConverter();
            var editor = new Markdown.Editor(converter);
            editor.run();
        </script>


        <div id="buttondiv" class="text-center">
          <input type="submit" class="btn btn-info" value="Comentar" />
        </div>
      </div>
    </div>
  </div>

  <?php
include "../templates/footer.php"
?>