<script>
    function updateMessage(message, socketId){
    $('#containerMessage').append(`   
    <div class="alert alert-warning alert-dismissible fade show animate__animated animate__bounce" role="alert" id="${socketId}">
        ${message}
        <button type="button" class="close" onclick="cerrarAlerta('${socketId}')" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>`)
    // let area = document.getElementById('mensajes');
    // area.innerHTML += message + '\n';
  }
  function cerrarAlerta(id) {
        let alerta = $(`#${id}`);
        if (alerta) {
            alerta.removeClass('show');
            alerta.addClass('fade');
            // alerta.classList.remove('show');
            // alerta.classList.add('fade');
            setTimeout(() => alerta.remove(), 150); // Elimina la alerta después de que se desvanezca
        }
    }
// Manejo del mensaje WebSocket
const URL = '<?= URL_WS ?>';
const socket = io(URL,
  {
    withCredentials: true
  }
);
//
socket.on('connect', () => {
    console.log('Successfully connected!');
  });
  socket.on('upConnection', (data) => {
    console.log(data);
  });
  socket.on('downConnection', (data) => {
    console.log(data);
  });
  socket.on('message', (data) => {
    console.log(data);
    updateMessage(data)
  });
</script>