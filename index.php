<!DOCTYPE html>
<html lang="en" ng-app="noteApp">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Note-Taking App</title>
        <!-- CSS  -->
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body ng-controller="noteCtrl">
        <!--navigation-->
        <nav class="light-blue">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo">Note-Taking-Application</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#addModal" class="modal-trigger">Add Note</a></li>
                    <li><a href="#!">Reset</a></li>
                </ul>
                <ul id="slide-out" class="side-nav">
                    <li><a href="#!">Add Note</a></li>
                    <li><a href="#!">Reset</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </nav>
        <header>
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row">
                        <div class="input-field col s12 m4 offset-l3 offset-m4">
                            <input id="search" name="search" type="text" class="validate" placeholder="Search">

                        </div>
                        <div class="input-field col s12 m4">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                <i class="mdi-action-search left"></i>
                            </button>
                        </div>

                    </div>
                    <br>

                </div>
            </div>
        </header>

        <main>   
            <div class="container grey lighten-5" id="container">
                <div class="section">
                    <!--   Icon Section   -->
                    <div class="row">
                        <div class="col s12 m4" ng-repeat="note in notes">
                            <div class="card {{note.category| categoryFilter}}">
                                <div class="card-content white-text">
                                    <span class="card-title">{{note.title}}</span>
                                    <p ng-bind-html="note.content"></p>
                                </div>
                                <div class="card-action">
                                    <a ng-click="openModal(note)" class="modal-trigger waves-effect waves-light">
                                        <i class="small mdi-editor-border-color"></i>
                                    </a>
                                    <a ng-click="deleteNote(note.id)" class="waves-effect waves-light"><i class="small mdi-action-delete"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer grey lighten-1">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5>Note-Taking-App</h5>
                        <p class="grey-text text-lighten-4">Simple Google Keep Clone</p>

                    </div>
                    <div class="col l3 offset-l3 s12">
                        <h5>Built with</h5>
                        <ul>
                            <li><a class="white-text" href="#!">PHP</a></li>
                            <li><a class="white-text" href="#!">MySQL</a></li>
                            <li><a class="white-text" href="#!">Angular</a></li>
                            <li><a class="white-text" href="#!">MaterializeCSS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
                </div>
            </div>
        </footer>
        <?php
            include './templates/add.modal.html';
            include './templates/edit.modal.html';
        ?>
            <!-- end modal -->
            <!--  Scripts-->
            <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular-sanitize.min.js"></script>
            <script src="js/materialize.js"></script>
            <script src="js/init.js"></script>

            <script src="js/noteApp.js" type="text/javascript"></script>

    </body>
</html>
