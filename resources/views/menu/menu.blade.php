<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
    </head>
 <body>
        <div class='header'> 

            <div class='span'> </div>

            <div class='nav'>
            
                 <ul>
                <li> <a href={{route('site.index')}}>Home</a></li>
                </ul>

                <ul>
                <li> <a href={{route('site.about')}}>About us</a></li>
                </ul>

                <ul>
                <li> <a href={{route('site.room')}}>Rooms</a></li>
                </ul>

                <ul>
                <li> <a href={{route('site.register')}}>Register</a></li>
                </ul>

                

            </div>
        </div>

        <main class='main'>
            @yield('conteudo')
    </main>
</body>
</html>


