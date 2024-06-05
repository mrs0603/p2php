<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
    

</head>
 <body>
    
        <div class='header'> 
            <div class='logo'> <img src="{{asset('img/logo.png')}}" alt="" srcset=""></div>
            <div class='span'> Hotéis.Potter </div>

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


