<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title')
        <title>Genérico</title>
    @show

    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="/assets/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    
    <div class="container">
        <nav>
            <a href="{{route('home')}}">
                <img src="/images/logo-icon.png" alt="">
            </a>
            @section('navigation')
            
            @show
        </nav>

        <main>
            @yield('content')
        </main>

        
        <footer>
            @section('footer')
            @show
            Desenvolvido por Gustavo Pinheiro
            
        </footer>
    </div>

</body>
</html>