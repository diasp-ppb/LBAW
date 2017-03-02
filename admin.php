<?php
include "templates/header.php";
include 'templates/userElem.php';
?>
    <div style="padding:0; margin: 0 auto; width: 100%" class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-1 additional">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="list-group">
                            <a href="#userlist" class="text-center list-group-item active">
                                <i class="glyphicon glyphicon-user"></i>
                                User List
                            </a>
                            <a href="#statistics" class="text-center list-group-item">
                                <i class="glyphicon glyphicon-dashboard"></i>
                                Statistics
                            </a>
                            <a href="#backup" class="text-center list-group-item">
                                <i class="glyphicon glyphicon-hdd"></i>
                                Backup
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 main">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <section id="userlist">
                            <div class="page-header">
                                <h1>User List</h1>
                            </div>
                            <div class="list-group">
                                <?php
                                userElem('Whiskas Saquetas');
                                userElem('João Varvosa');
                                userElem('Pedro Dias que não está preso');
                                userElem('Pedro Dias que está preso');
                                ?>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <section id="statistics">
                            <div class="page-header">
                                <h1>Statistics</h1>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <section id="backup">
                            <div class="page-header">
                                <h1>Backups</h1>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "templates/footer.php"
?>