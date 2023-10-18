<html>
        <head>
            <title> Buat Laporan @yield('title')</title>
    
        </head>
    <body>
       @include('layout.navbar')
     
            <div class="container" style="margin-top: 100;">
                @yield('content')
            </div>
    </body>
</html>
