<html>
<head>
    <title>Teste Técnico Go Score!</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/app.css" type="text/css" />
    <script src="/js/app.js" type="text/javascript"></script>
    <!-- Jquery 3.1.1 -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>-->



    <script src="/js/jquery-3.2.1.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="/css/template.css" type="text/css" />

    <script type="text/javascript" src="/js/pagina_problema1.js"></script>
    <script type="text/javascript" src="/js/pagina_problema3.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <div class="top">
                <p class="navbar-brand" href="#" style="color: #ffffff; font-size: 21pt;">Teste Técnico GoScore!</p>
            </div>

        </div>

    </div>
</nav>

<div class="container">

    <div class="row-fluid">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">@yield('titulo_secao')</div>
                <div class="panel-body">

                    @yield('conteudo')

                </div>
            </div>

        </div>
    </div>

</div>

<div class="container-fluid footer">
    <p class="text-center">Go Score!<br> Todos os direitos reservados.</p>
</div>

</body>
</html>