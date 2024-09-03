<script>
    $('#btnEnviar').on('click', function(){
        let message = $('#txtMensaje').val();
        let roomId = $('#txtIdUsuario').val();
        //
        $.ajax({
            url: '<?= base_url('Ws_Controller/emitWs/')?>',
            data: {data:{room:roomId, message:message}},
            method : 'post',
            dataType : 'json',
            success: function(data){
                console.log('quedo clean')
            },
            error: function(data){
                console.log('valio verdura padrino')
            }
        });
    });
</script>