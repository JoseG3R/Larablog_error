<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera vista</title>
</head>
<body>
    <h1>Hola larablog   - {{"Hola $nombre $apellido"}}</h1>

    <ul>

        @isset($posts2)
            isset
        @endisset
        @empty($posts2)
            empty
        @endempty

    @forelse ($posts as $post)

    <?php //dd($loop) ?>

        <li>
            @if ($loop->first)
                Primero :
            @elseif ($loop->last)
                Último :
            @else
            Medio :
            @endif
                {{$post}}
        </li>
            @empty
            <p>No hay posts</p>
            @endforelse
    </ul>
</body>
</html>
