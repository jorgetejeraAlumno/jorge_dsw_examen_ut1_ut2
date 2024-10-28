<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <ul>
                @foreach($messages as $message)
                    <li>
                        @if($message['subrayado']&&$message['negrita'])
                        <u><b>
                            {{ $message->text }}
                        </b></u>
                        @elseif($message['subrayado'])
                        <u>
                            {{$message->text}}
                        </u>
                        @elseif($message['negrita'])
                        <u>
                            {{$message->text}}
                        </u>
                        @else
                        {{$message->text}}
                        @endif
                        <button onclick={{route('editMessage',($message->id))}}>Editar</button>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>