<!DOCTYPE html>
<html>
<head>
    <title>App starter template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    {{-- jQuery --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    {{-- Material icons --}}
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- Materialize --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.4/css/materialize.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.4/js/materialize.min.js"></script>

    <style>
        .brand-logo {
            font-weight : 300;
        }

        .icon-block {
            padding : 0 15px;
        }

        .icon-block .material-icons {
            font-size : inherit;
        }

        ::selection {
            background : rgba(255, 204, 128, 0.5);
            color      : inherit;
        }

        ::-moz-selection {
            background : rgba(255, 204, 128, 0.5);
            color      : inherit;
        }
    </style>
</head>
<body>
    <nav class="grey darken-3" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">Laravel scaffolder</a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a class="waves-effect" href="https://github.com/mPaleo/scaffolder-theme-material" target="_blank">GitHub</a>
                </li>
                <li>
                    <a class="waves-effect" href="https://github.com/mPaleo/scaffolder-theme-material/issues" target="_blank">Help</a>
                </li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a class="waves-effect" href="#" target="_blank">GitHub</a></li>
                <li><a class="waves-effect" href="#" target="_blank">Wiki</a></li>
            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse">
                <i class="material-icons">menu</i>
            </a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br>
            <br>

            <h1 class="header center teal-text">Starter material template</h1>

            <div class="row center">
                <h5 class="header col s12 light">Craft your next application easier and faster</h5>
            </div>
            <div class="row center">
                <a href="#" class="btn-large waves-effect waves-light teal">Get Started</a>
            </div>
            <br>
            <br>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Speeds up development</h5>

                        <p class="light center-align">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quis, enim ex nesciunt
                            voluptas quam necessitatibus, quo beatae.
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">grade</i></h2>
                        <h5 class="center">Easy to work with</h5>

                        <p class="light center-align">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quis, enim ex nesciunt
                            voluptas quam necessitatibus, quo beatae.
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">code</i></h2>
                        <h5 class="center">Extend</h5>

                        <p class="light center-align">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quis, enim ex nesciunt
                            voluptas quam necessitatibus, quo beatae.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="section">
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">keyboard</i></h2>
                        <h5 class="center">Versatile</h5>

                        <p class="light center-align">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quis, enim ex nesciunt
                            voluptas quam necessitatibus, quo beatae.
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">devices</i></h2>
                        <h5 class="center">Design</h5>

                        <p class="light center-align">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quis, enim ex nesciunt
                            voluptas quam necessitatibus, quo beatae.
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">thumb_up</i></h2>
                        <h5 class="center">Enjoyable</h5>

                        <p class="light center-align">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quis, enim ex nesciunt
                            voluptas quam necessitatibus, quo beatae.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Fun facts</h5>

                    <p class="grey-text text-lighten-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aperiam quis, enim ex nesciunt voluptas quam necessitatibus, quo beatae. Minima perferendis
                        mollitia delectus aut nostrum incidunt harum blanditiis, optio quod tenetur.</p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Friends</h5>
                    <ul>
                        <li><a class="white-text" href="#">Link stub 1</a></li>
                        <li><a class="white-text" href="#">Link stub 2</a></li>
                        <li><a class="white-text" href="#">Link stub 3</a></li>
                        <li><a class="white-text" href="#">Link stub 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">More ...</h5>
                    <ul>
                        <li><a class="white-text" href="#">Link stub 5</a></li>
                        <li><a class="white-text" href="#">Link stub 6</a></li>
                        <li><a class="white-text" href="#">Link stub 7</a></li>
                        <li><a class="white-text" href="#">Link stub 8</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                2015 Laravel scaffolder
                <a class="grey-text text-lighten-4 right" href="//en.wikipedia.org/wiki/Uruguay" target="_blank">
                    Made with <i class="tiny material-icons teal-text">favorite</i> in Uruguay
                </a>
            </div>
        </div>
    </footer>

    <script>
        $('.button-collapse').sideNav();
    </script>
</body>
</html>