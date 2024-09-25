<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.datatables.net/v/dt/dt-2.1.5/datatables.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a id="divNotify"class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Notificaciones
        </a>
        <div class="dropdown-menu" id="divDropdowm">
        </div>
      </li>
    </ul>
  </div>
</nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Mensajes Recibidos</label>
                    <textarea class="form-control" name="txtMensaje" id="txtMensaje"></textarea>
                </div>
            </div>
        </div>
    <div class="container mt-3 border-top" style="padding-top:1rem;">
        <div class="row">
            <div class="col-12">
              <table id="tblExample" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Cita</th>
                        <th>Estatus</th>
                        <th>Asesor</th>
                        <th>Acreditado</th>
                    </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
        </div>
    </div>
    <div class="container mt-3 border-top" style="padding-top:1rem;">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">ID Usuario</label>
                    <input type="text" class="form-control" id="txtIdUsuario" placeholder="Ingresa un mensaje">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-primary" id="btnIniciarSesion">Iniciar Sesión</button> 
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.socket.io/4.7.5/socket.io.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-2.1.5/datatables.min.js"></script>
</html>