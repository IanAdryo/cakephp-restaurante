$(document).ready(function () {
    $('.numeric').on('keyup change', function (event) {
        var cantidad = Math.round($(this).val());
        ajaxupdate($(this).attr("data-id"), cantidad);
    });
    function ajaxupdate(id, cantidad) {
        $.ajax({
            type: "POST",
            url: basePath + "pedidos/itemupdate",
            data: {
                id: id,
                cantidad: cantidad
            },
            dataType: "json",
            success: function (data) {
                
                
                if ($('#subtotal_' + data.mostrar_pedido.id).html() != data.mostrar_pedido.subtotal) {
                    
                    $('#subtotal_' + data.mostrar_pedido.id).html(data.mostrar_pedido.subtotal);
                }
                $('#total').html('$' + data.mostrar_pedido.total);
            }
        });
    }
    
    $('.remove').click(function () {

        ajaxcart($(this).attr("id"), 0);
        return false;
    });
    

    function ajaxcart(id, cantidad) {

        if (cantidad === 0) {
            
            $('#row-' + id).fadeOut(1000, function() { $('#row-' + id).remove(); });
        }
        $.ajax({
            "type": "POST",
            "url": basePath + "pedidos/remove",
            'data': {
                id: id
            },
            "dataType": "json",
            "success": function (data) {
                
                $('#msg').html('<div class="flash-msg alert alert-success">Platillo removido del pedido.</div>');
                $('.flash-msg').delay(2000).fadeOut('slow');

                let valor_total = data.mostrar_total_remove;
                if (valor_total) {

                    $('#total').html('$ ' + data.mostrar_total_remove).animate({backgroundColor: "#ff8"}, 100).animate({backgroundColor: "#fff"}, 500);
                } else {

                    $('#total').html('$ 0').animate({ backgroundColor: "#ff8" }, 100).animate({ backgroundColor: "#fff" }, 500);
                    window.location.replace(basePath + 'platillos/index');
                }
            },
            "error": function () {
                alert("Tenemos problemas!!!");
            }
        });
    }
});