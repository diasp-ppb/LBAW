<script src="../js/editProfile.js"></script>

<div class="container-fluid">
    <div class="row" role="tabpanel">
        <div class="col-md-2 col-md-offset-1 additional">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul class="nav nav-pills brand-pills nav-stacked hidden-xs hidden-sm" role="tablist">
                        <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Quem eu sou</a></li>
                        <li role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-picture"></i> Imagem de perfil</a></li>
                    </ul>
                    <ul class="list-inline text-center hidden-md hidden-lg">
                        <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Quem eu sou</a></li>
                        <li role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-picture"></i> Imagem de perfil</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 main">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <form id="editProfile" action="../actions/editProfile.php" method="post">
                                <input type="hidden" name="id" value="5">
                                <div class="form-group user name">
                                    <div class="icon-addon addon-md">
                                        <input type="text" placeholder="Nome" class="form-control" name="name" value="{$user.name}">
                                        <label for="name" class="glyphicon glyphicon-user" rel="tooltip"></label>
                                    </div>
                                </div>

                                <div class="form-group hide user location">
                                    <div class="icon-addon addon-md">
                                        <input type="text" placeholder="Localiza��o" class="form-control" name="location" value="Porto, Portugal">
                                        <label for="location" class="glyphicon glyphicon-map-marker" rel="tooltip"></label>
                                    </div>
                                </div>

                                <div class="form-group user email">
                                    <div class="input-group">
                                        <div class="icon-addon addon-md">
                                            <input type="text" placeholder="E-mail" class="form-control" name="email[]" value="{$emails[0].mail}">
                                            <label for="email" class="glyphicon glyphicon-envelope" rel="tooltip"></label>
                                        </div>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default form-control add-email"><i class="fa fa-plus"></i></button>
                                        </span>
                                    </div>
                                </div>

                                {foreach from=$emails item=$email key=$index}
                                    {if $index != 0}
                                    <div class="form-group user email">
                                        <div class="input-group">
                                            <div class="icon-addon addon-md">
                                                <input type="text" placeholder="E-mail" class="form-control" name="email[]" value="{$email.mail}">
                                                <label for="email" class="glyphicon glyphicon-envelope" rel="tooltip"></label>
                                            </div>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default form-control remove-email"><i class="fa fa-minus"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    {/if}
                                {/foreach}

                                <div class="form-group hide user email" id="email-template">
                                    <div class="input-group">
                                        <div class="icon-addon addon-md">
                                            <input type="text" placeholder="E-mail" class="form-control" name="email[]" value="">
                                            <label for="email" class="glyphicon glyphicon-envelope" rel="tooltip"></label>
                                        </div>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default form-control remove-email"><i class="fa fa-minus"></i></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group user link">
                                    <div class="input-group">
                                        <div class="icon-addon addon-md">
                                            <input type="text" placeholder="Website" class="form-control" name="link[]" value="{$links[0]}">
                                            <label for="link" class="glyphicon glyphicon-link" rel="tooltip"></label>
                                        </div>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default form-control add-link"><i class="fa fa-plus"></i></button>
                                        </span>
                                    </div>
                                </div>

                                {foreach from=$links item=$link key=$index}
                                    {if $index != 0}
                                    <div class="form-group user link">
                                        <div class="input-group">
                                            <div class="icon-addon addon-md">
                                                <input type="text" placeholder="Website" class="form-control" name="link[]" value="{$link}">
                                                <label for="link" class="glyphicon glyphicon-link" rel="tooltip"></label>
                                            </div>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default form-control remove-link"><i class="fa fa-minus"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    {/if}
                                {/foreach}
                                <div class="form-group hide user link" id="link-template">
                                    <div class="input-group">
                                        <div class="icon-addon addon-md">
                                            <input type="text" placeholder="Website" class="form-control" name="link[]" value="">
                                            <label for="link" class="glyphicon glyphicon-link" rel="tooltip"></label>
                                        </div>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default form-control remove-link"><i class="fa fa-minus"></i></button>
                                        </span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Atualizar</button>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <div class="row">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Turkish_Van_Cat.jpg/700px-Turkish_Van_Cat.jpg" class="img-circle img-thumbnail" style="height: 200px; width: 200px" alt="Profile Picture">
                            </div>

                            <form action="../actions/editProfile.php" method="post">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="col-md-3">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="image" value="option1" checked="checked">
                                                <i class="fa fa-university" aria-hidden="true"></i> Utilizar fotografia da UP
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="image" value="option2">
                                                <i class="fa fa-github" aria-hidden="true"></i> Utilizar fotografia do Github
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" placeholder="Username do Github" class="form-control" name="git_username" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="image" value="option3">
                                                Importar imagem
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <!-- image-preview-filename input [CUT FROM HERE]-->
                                                <div class="input-group image-preview">
                                                    <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                                    <span class="input-group-btn">
                                                        <!-- image-preview-clear button -->
                                                        <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                            <span class="glyphicon glyphicon-remove"></span> Clear
                                                        </button>
                                                                                            <!-- image-preview-input -->
                                                        <div class="btn btn-default image-preview-input">
                                                            <span class="glyphicon glyphicon-folder-open"></span>
                                                            <span class="image-preview-input-title">Browse</span>
                                                            <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                                                        </div>
                                                    </span>
                                                </div><!-- /input-group image-preview [TO HERE]-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Atualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{include file='footer.tpl'}
