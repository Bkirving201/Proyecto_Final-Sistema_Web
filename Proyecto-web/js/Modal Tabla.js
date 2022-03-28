function PopUp(title, message, oktext, okfunction, canceltext, cancelfunction) {
    var $myModal = $('#myModal');
    $("#myModal .modal-title").html(!title ? "<br />" : title);
    $("#myModal .modal-body").html(!message ? "" : message);
    var  $myModalFooter = $("#myModal .modal-footer").empty();
    if (canceltext) {
        if (!(typeof (cancelfunction) === 'function')) {
            cancelfunction = function () { $myModal.modal('hide'); };
        }
        $myModalFooter.append('<button id="cancelfunction" type="button" class="btn btn-default">' + canceltext + '</button>');
        $("#cancelfunction").on("click", function () { cancelfunction(); return false; });
    }
    if (oktext) {
        if (!(typeof (okfunction) === 'function')) {
            okfunction = function () { $myModal.modal('hide'); };
        }
        $myModalFooter.append('<button id="okfunction" type="button" class="btn btn-primary">' + oktext + '</button>');
        $("#okfunction").on("click", function () { okfunction(); return false; });
    }
    $myModal.modal('show');
}
$("#openModal").on("click",function(){
    PopUp("Título de Ejemplo",
        "<p>Mensaje de Ejemplo</p>",
        "Aceptar",
        function(){
            alert("aceptar!");
            $('#myModal').modal('hide');
        },
        "Cancelar"
    );
    return false;
});