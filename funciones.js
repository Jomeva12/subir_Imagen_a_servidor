$(function() {
    guardar()
});

function guardar() {
    $("#formulario").submit(function(e) {


        e.preventDefault();
        var dato = new FormData($("#formulario")[0]);
        $.ajax({
            url: 'enviar.php',
            type: 'POST',
            data: dato,
            contentType: false,
            processData: false,
            success: function(response) {
                $("#respuesta").html(
                    `<img src="${response}" alt="" style="width: 500px; height: 300px;">`



                );
                console.log(response)
            }

        });


    });
}