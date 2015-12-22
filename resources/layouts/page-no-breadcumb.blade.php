<!DOCTYPE html>
<html>
<head>
    <title>{{page_title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- jQuery --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    {{-- Datatable --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" media="screen" title="no title" charset="utf-8">
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    {{-- Material icons --}}
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- Materialize --}}
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.4/css/materialize.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.4/js/materialize.min.js"></script>

    {{-- Styles --}}
    <link href="/styles/main.css" rel="stylesheet">
</head>
<body>
    {{-- Nav --}}
    <nav class="blue">

        {{-- Top --}}
        <ul class="topbar right hide-on-med-and-down">
            <li>
                <a href="#">
                    Administrator
                </a>
            </li>
        </ul>

        {{-- Side --}}
        <ul id="slide-out" class="side-nav fixed">
            <li class="logo waves-effect">
                <a href="/{{route_prefix}}/dashboard">
                    {{app_name}}
                </a>
            </li>
            {{links}}

        </ul>

        <a href="#" data-activates="slide-out" class="button-collapse waves-effect">
            <i class="mdi-navigation-menu"></i>
        </a>
    </nav>

    <main>
        <div class="row">
            @yield('content')
        </div>
    </main>

    {{-- Main script --}}
    <script src="/scripts/main.js"></script>

    {{-- Scripts --}}
    @stack('scripts')
</body>
</html>