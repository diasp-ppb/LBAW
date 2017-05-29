<div class="container-fluid">
    <div class="row">
    {if $status == "OK"}
      <div id="messages"  class="alert alert-success">
        <p> Mensagem enviada com sucesso com o email {$smarty.SESSION.email}! </p>
      </div>
      <br>
    {/if}
      
    {if $status == "MISS"}
      <div id="messages"  class="alert alert-danger">
        <p> Não foi possivel enviar a mensagem! </p>
      </div>
      <br>
    {/if}

    {if $status != "OK" && $status != "MISS"} 
      <div id="messages"  class="alert alert-info">
        <p> Mensagem será enviada com o email {$smarty.SESSION.email}! </p>
      </div>
      <br>
    {/if}
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-8 form text-center">
            <div id="row text-center">
                <h2 id="top-title">Suporte via email</h2>
            </div>

            <form id="sendEmailForm" role="form" method="post" action="../../actions/home/sendHelp.php">
                <div class="form-group">
                    <label for="title"></label>
                    <input type="text" class="form-control" id="title" name="title" required="required" placeholder="Assunto"/>
                    <br>
                    <textarea style="height: 25em;" name="text" class="form-control" placeholder="Insira aqui a sua mensagem..."></textarea>
                    <br>
                    <input type="text" class="form-control hidden" id="s_token" name="s_token" value="{$smarty.session.s_token}"/>
                    <button type="submit" class="btn btn-primary new-reply">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}