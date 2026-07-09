<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
         
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container mt-5">
                <h1>Variable</h1>
                <p>El valor de la variable es: {{ $valor }}</p>
                @if ($valor)
                    <p>La variable tiene un valor.</p>
                @else
                    <p>La variable no tiene valor.</p>
                @endif
                <ul>
                    @foreach ($lista as $elemento)
                        <li>{{ $elemento }}</li>
                    @endforeach
                </ul>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
       
    </body>
</html> 