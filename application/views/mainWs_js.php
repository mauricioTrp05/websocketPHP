<script>
function updateMessage(message){
    $('#divNotify').addClass('alert-warning');
    $('#divDropdowm').append(`   
        <a class="dropdown-item" href="#">${message}</a>
        <div class="dropdown-divider"></div>`);
    // let area = document.getElementById('mensajes');
    // area.innerHTML += message + '\n';
}
const URL = '<?= URL_WS ?>';
const socket = io(URL,{ transports: ['websocket'] });
//
socket.on('connect', () => {
    console.log('Successfully connected!');
  });
  socket.on('message', (data) => {
    console.log(data);
    updateMessage(data)
  });
      //CARGAR USER ID
      if(sessionStorage.getItem('roomId') != null){
        let roomId = sessionStorage.getItem('roomId');
        $('#btnIniciarSesion').prop('disabled', true);
        $('#txtIdUsuario').val(roomId).prop('disabled', true);
        // Iniciar sesión y unirse a un room específico
        socket.emit('login', roomId);  // user123 es el identificador único del usuario
    }
    //
    $('#btnIniciarSesion').on('click', function(){
        $(this).prop('disabled', true);
        $('#txtIdUsuario').prop('disabled', true);
        let roomId = $('#txtIdUsuario').val();
        // Guardar un valor simple
        sessionStorage.setItem('roomId', roomId);
        // Iniciar sesión y unirse a un room específico
        socket.emit('login', roomId);  // user123 es el identificador único del usuario
    });
</script>