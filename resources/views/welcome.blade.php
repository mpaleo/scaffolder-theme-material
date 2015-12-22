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
                <li><a class="waves-effect" href="https://github.com/mPaleo/scaffolder-theme-material" target="_blank">GitHub</a></li>
                <li><a class="waves-effect" href="https://github.com/mPaleo/scaffolder-theme-material#basic-customization" target="_blank">Wiki</a></li>
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

            <h1 class="header center deep-orange-text">Starter material template</h1>

            <div class="row center">
                <h5 class="header col s12 light">Craft your next application easier and faster</h5>
            </div>
            <div class="row center">
                <a href="#" id="download-button" class="btn-large waves-effect waves-light deep-orange">Get Started</a>
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
                        <h2 class="center deep-orange-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Speeds up development</h5>

                        <p class="light center-align">
                            Remove the headache of creating over and over again the base code for the 85% of your
                            projects. Also you can recreate the base app with only some of the generated files !
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center deep-orange-text"><i class="material-icons">grade</i></h2>
                        <h5 class="center">Easy to work with</h5>

                        <p class="light center-align">
                            We have provided detailed documentation as well as specific code examples to help new users
                            get started. We are also always open to feedback and can answer any questions a user may
                            have
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center deep-orange-text"><i class="material-icons">code</i></h2>
                        <h5 class="center">Extend</h5>

                        <p class="light center-align">
                            You are free to extend it the way you need. We only generate things that you need to start,
                            always keeping the code clean and abstract. Are you hungry ? Fork it !
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="section">
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center deep-orange-text"><i class="material-icons">keyboard</i></h2>
                        <h5 class="center">Versatile</h5>

                        <p class="light center-align">
                            There are more than one way to craft an application. You can use the console commands or the
                            UI if you dont feel hacky today
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center deep-orange-text"><i class="material-icons">devices</i></h2>
                        <h5 class="center">Design</h5>

                        <p class="light center-align">
                            The generated application, uses a minimalist interface design to help you to build on top of
                            it, or you can throw away and put your own cool interface
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center deep-orange-text"><i class="material-icons">thumb_up</i></h2>
                        <h5 class="center">Enjoyable</h5>

                        <p class="light center-align">
                            Scaffolder is tailored following the principle that the development process must be a happy
                            thing so, code and enjoy !
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
                        <li><a class="white-text" href="http://laravel.com/" target="_blank">Laravel</a></li>
                        <li><a class="white-text" href="http://materializecss.com/" target="_blank">Materialize</a></li>
                        <li><a class="white-text" href="https://getcomposer.org/" target="_blank">Composer</a></li>
                        <li><a class="white-text" href="https://www.google.com.uy/search?q=how+are+you+meme&tbm=isch" target="_blank">You</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">More ...</h5>
                    <ul>
                        <li><a class="white-text" href="https://www.npmjs.com/" target="_blank">NPM</a></li>
                        <li><a class="white-text" href="http://bower.io/" target="_blank">Bower</a></li>
                        <li><a class="white-text" href="https://jquery.com/" target="_blank">jQuery</a></li>
                        <li><a class="white-text" href="https://google.com/" target="_blank">Google</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                2015 Laravel scaffolder
                <a class="grey-text text-lighten-4 right" href="//en.wikipedia.org/wiki/Uruguay" target="_blank">
                    Made with <i class="tiny material-icons deep-orange-text">favorite</i> in Uruguay
                </a>
            </div>
        </div>
    </footer>

    <script>
        $('.button-collapse').sideNav();
    </script>
</body>
</html>