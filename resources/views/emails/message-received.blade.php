<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Recibiste un mensaje de: {{ $msg['name'] }}[{{ $msg['email'] }}]</p>
<p><strong>Teléfono: </strong>{{ $msg['phone-number'] }}</p>
<p><strong>Asunto: </strong>{{ $msg['Subject'] }}</p>
<p><strong>Mensaje: </strong>{{ $msg['message'] }}</p>
</body>
</html>