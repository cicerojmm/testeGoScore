<html>
<head>
    <title>@yield("title")</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/app.css" type="text/css" />
    <script src="/js/app.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


    <link rel="stylesheet" href="/css/template.css" type="text/css" />

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