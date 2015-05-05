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
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Note-Taking</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Navbar Link</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Navbar Link</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </nav>
        <div class="section no-pad-bot" id="index-banner">
            <div class="containe">
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


        <div class="container grey lighten-5" id="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Eloquent Javascript</span>
                                <p>This is a good book to read</p>
                            </div>
                            <div class="card-action">
                               <a class="waves-effect waves-light"><i class="small mdi-editor-border-color"></i></a>
                               <a class="waves-effect waves-light"><i class="small mdi-action-delete"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card red lighten-2">
                            <div class="card-content white-text">
                                <span class="card-title">Shopping</span>
                                <ul>
                                    <li>Salad</li>
                                    <li>Meat</li>
                                </ul>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href='#'>This is a link</a>
                            </div>
                        </div>
                    </div>
                     <div class="col s12 m4">
                        <div class="card amber lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">OOP PHP and Angular JS</span>
                                <p>Example of using OOP PHP as backend service for AngularJS front end</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href='#'>This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card red lighten-2">
                            <div class="card-content white-text">
                                <span class="card-title">Reading</span>
                                <ul>
                                    <li>OOP PHP</li>
                                    <li>Database MySQL</li>
                                    <li>Learn Ruby</li>
                                </ul>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href='#'>This is a link</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>

        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Company Bio</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Settings</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
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


        <!--  Scripts-->
        <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        
        <script src="js/noteApp.js" type="text/javascript"></script>
        

    </body>
</html>
