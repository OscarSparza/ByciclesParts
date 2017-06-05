
$(document).ready(
        function () {
            formCliente();
        }
);

function formCliente() {
    $('#paso2').hide();
    $('#back').hide();
    $('#next').click(function () {
        if (!('#cedula' == "")) {
            $('#paso2').show('slow');
            $('#back').show('slow');
            $('#paso1').hide();
            $('#next').hide();
        }
    });
    $('#back').click(function () {
        $('#paso1').show('slow');
        $('#next').show('slow');
        $('#paso2').hide();
        $('#back').hide();
    });

}
