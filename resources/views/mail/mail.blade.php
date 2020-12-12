<!DOCTYPE html>
<html lang="es">
<header>
    <title>Laravel - Mail</title>
    <meta charset="UTF-8">
    <meta name="title" content="Laravel_DSM43">
    <meta name="Descripcion" content="Descripcion del correo">
</header>
<body >
    <img src="http://asisucede.com.mx/wp-content/uploads/2017/08/logo-universidad-tecnologica-del-valle-de-toluca-300x150.png" alt="">
    <h1>Ejemplo: {{ $ejemplo }}</h1>
    <br><br>
    Estimado alumno: {{ $nombre }} ({{ $correo}}) <br>
    <br>
    Le agradesemos su interes en realizar el correo.... con el asunto "{{ $asunto}}". <br>
    <br>
    con el mensaje: {{ $mensaje }} <br>
    <br>
    <br>
</body>
</html>