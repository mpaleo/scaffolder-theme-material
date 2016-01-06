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
        body, html {
            background : #E7E7E7;
        }

        main {
            margin-top : 60px;
        }

        .brand-logo {
            font-weight : 300;
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
    <nav class="teal" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/" class="brand-logo">Laravel scaffolder</a>
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

    <main>
        <div class="row">
            <div class="col s12 l4 offset-l4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Admin dashboard</span>

                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="username" type="text" autocomplete="off">
                                        <label for="username">Username</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" autocomplete="off">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="#" class="btn-flat pink-text waves-effect" onclick="Materialize.toast('Not implemented yet', 4000)">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $('.button-collapse').sideNav();
    </script>
</body>
</html>