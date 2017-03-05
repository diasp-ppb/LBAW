<?php
include "templates/header.php"
?>


<div class="container-fluid">
    <div class="row" role="tabpanel">
        <div class="col-md-2 col-md-offset-1 additional">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-4 col-xs-offset-4">
                    <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                        <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Quem eu sou</a></li>
                        <li role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-picture"></i> Imagem de perfil</a></li>
                        <li role="presentation" class="brand-nav"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-lock"></i> Segurança</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 main">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-6 col-xs-offset-3">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1">

                            <form>
                                <div class="form-group user name">
                                    <div class="icon-addon addon-md">
                                        <input type="text" placeholder="Nome" class="form-control" name="name" value="João Barbosa">
                                        <label for="name" class="glyphicon glyphicon-user" rel="tooltip"></label>
                                    </div>
                                </div>

                                <div class="form-group user location">
                                    <div class="icon-addon addon-md">
                                        <input type="text" placeholder="Localização" class="form-control" name="location" value="Porto, Portugal">
                                        <label for="location" class="glyphicon glyphicon-map-marker" rel="tooltip"></label>
                                    </div>
                                </div>

                                <div class="form-group user email">
                                    <div class="icon-addon addon-md">
                                        <input type="text" placeholder="E-mail" class="form-control" name="email[]" value="bmpj13@hotmail.com">
                                        <label for="email" class="glyphicon glyphicon-envelope" rel="tooltip"></label>
                                    </div>
                                </div>

                                <div class="form-group user email">
                                    <div class="icon-addon addon-md">
                                        <input type="text" placeholder="E-mail" class="form-control" name="email[]" value="">
                                        <label for="email" class="glyphicon glyphicon-envelope" rel="tooltip"></label>
                                    </div>
                                </div>

                                <div class="form-group user link">
                                    <div class="icon-addon addon-md">
                                        <input type="text" placeholder="Website" class="form-control" name="link[]" value="www.github.com/bmpj13">
                                        <label for="email" class="glyphicon glyphicon-link" rel="tooltip"></label>
                                    </div>
                                </div>

                                <div class="form-group user link">
                                    <div class="icon-addon addon-md">
                                        <input type="text" placeholder="Website" class="form-control" name="link[]" value="">
                                        <label for="email" class="glyphicon glyphicon-link" rel="tooltip"></label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Atualizar</button>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <div class="row">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Turkish_Van_Cat.jpg/700px-Turkish_Van_Cat.jpg" class="img-circle img-thumbnail" style="height: 200px; width: 200px" alt="Profile Picture">
                            </div>

                            <form>
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

                                <button type="submit" class="btn btn-success">Atualizar</button>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="tab3">
                            <form>
                                <div class="form-group user password">
                                    <div>
                                        <label for="name" rel="tooltip">Password atual</label>
                                        <input type="password" class="form-control" name="current_pw">
                                    </div>
                                    <div>
                                        <label for="name" rel="tooltip">Nova password</label>
                                        <input type="password" class="form-control" name="new_pw">
                                    </div>
                                    <div>
                                        <label for="name" rel="tooltip">Confirmar password</label>
                                        <input type="password" class="form-control" name="confirm_pw">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Atualizar</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab4">
                            <p>
                                Collaboratively administrate empowered markets via plug-and-play networks.
                                Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without
                                revolutionary ROI.
                            </p>
                            <p>
                                Efficiently unleash cross-media information without cross-media value.
                                Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar
                                solutions without functional solutions.
                            </p>
                            <p>
                                Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate
                                one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service
                                for state of the art customer service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "templates/footer.php"
?>