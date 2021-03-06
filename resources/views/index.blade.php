<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="{{ config('app.locale') }}"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="{{ config('app.locale') }}"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="{{ config('app.locale') }}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="{{ config('app.locale') }}"> <!--<![endif]-->
<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=5; IE=8; IE=9; IE=10;" >
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="icon" href="{{ asset('favicon.png') }}" type="text/css" sizes="16x16">

    <!-- STYLES CSS -->
    <link rel="stylesheet" type="text/css" href="/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="/css/custom.css">

    @yield('head')

</head>

<body>
<div class="container">
    <div class="pesquisa">
        <h1>Pesquise sua função<br> na <span>artemsite</span></h1>
        <form name="frm" id="frm" method="get" action="/pesquisar/">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Pesquise pelo seu e-mail">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-5">
                <button type="submit" class="btn btn-success btn-lg">Pesquisar</button>
            </div>
        </form>
    </div>

    @if (!empty($Result))
        @foreach($Result as $rs)
            <div class="resultado">
                Olá {{$rs->nome}} de tal tudo bem?<br/>
                Huuummm vejo que você é Programador que chique kkkkk
            </div>
        @endforeach
    @endif
</div>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@yield('footer')
</body>
</html>
