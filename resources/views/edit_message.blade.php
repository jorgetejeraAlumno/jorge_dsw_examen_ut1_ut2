<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <form action="">
        @csrf
        @method('POST')
        <label for="message">
        </label>
        <label for="message">
            Mensaje:
            <input type="text" name="message">
        </label>
        <button type="submit"></button>
    </form>
</body>
</html>