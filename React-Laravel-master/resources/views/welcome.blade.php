<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#000000" />
        
        <!--
          manifest.json provides metadata used when your web app is added to the
          homescreen on Android. See https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/
        -->
        <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
        <link rel="shortcut icon" href="%PUBLIC_URL%/favicon.ico" />
        <link rel="apple-touch-icon" sizes="76x76" href="%PUBLIC_URL%/apple-icon.png" />
        <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css" />
        <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" type="text/css" media="screen" />
         <!--     Fonts and icons     -->
        <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        
        {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"> --}}

        
        <title>Laravel</title>
    </head>
    <body>
        <div id="root"></div>
        <script type="text/javascript" src="{{asset('js/app.js')}}" ></script>
    </body>
</html>
