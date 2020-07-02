
//const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.translate').editable({
    params: function(params) {
        params.code = $(this).editable().data('code');
        return params;
    }
});

$('.translate-key').editable({
    validate: function(value) {
        if($.trim(value) == '') {
            return 'Key es requerido';
        }
    }
});

$('body').on('click', '.remove-key', function(){
    var cObj = $(this);


    if (confirm("Está seguro que desea eliminar?")) {
        $.ajax({
            url: cObj.data('action'),
            method: 'DELETE',
            success: function(data) {
                cObj.parents("tr").remove();
                window.location.replace(window.location.href);
                alert("Se eliminó correctamente!");
            }
        });
    }


});

$(document).ready(function() {
    $('.table-lang').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
} );

// Array.from(document.querySelectorAll('.remove-key')).map((btn) => {
//     btn.addEventListener('click', () => {
//         if (confirm("Desea eliminar!?")) {
//             let url = btn.dataset.action;
//             fetch(url, {
//                 method: 'DELETE',
//                 headers: {
//                     'Content-Type': 'application/json',
//                     "X-CSRF-Token": csrfToken
//                 }
//             })
//             .then((result) => {
//                 btn.parentNode.parentNode.remove();
//                 alert("Llave eliminado.");
//             })
//             .catch(err => {
//                 alert(err);
//             })
//         }
        
//     });
//});

