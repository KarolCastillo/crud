<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
<!--
 <nav class="navbar navbar-inverse bg-inverse">
     <a class="navbar-brand" href="{{url ('/')}}">LISTADO DE USUARIOS </a>
 </nav>
 <div class="container">

 </div> -->

<!-- Image and text -->
<nav class="navbar navbar-light bg-info">
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="https://images.vexels.com/media/users/3/136558/isolated/preview/43cc80b4c098e43a988c535eaba42c53-icono-de-usuario-de-persona.png"
             width="70" height="60" class="d-inline-block align-top" alt="">
        LISTADO DE USUARIOS
    </a>
</nav>
    <div class="container">
    @yield('content')
    </div>

</body>
</html>
