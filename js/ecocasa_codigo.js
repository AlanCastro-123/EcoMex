$(".img-circular").click(function(){
    var id = $(this).attr("data-id");
    window.location.href = "detalles_ecocasa_view.php?id="+id;
});

$('#confirm-delete').on('show.bs.modal', function (e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

$('.editar').on('click', function (e) {
    var id = $(this).attr("data-id");
    window.location.href = "editar_ecocasa_admin.php?id=" + id;
});

$("#btnNuevo").click(function () {
    window.location.href = "publicar_ecocasa_admin.php";
});