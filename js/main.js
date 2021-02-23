$(document).ready(function() {

    var fillValue = function (input, value) {
        var modal = $(this),
            btn = $(input.relatedTarget),
            id = btn.data('id');
        console.log(input.attr('name'), input[0].nodeName, input.attr('type'));
        
        
        // input text
        if (input[0].nodeName == 'INPUT' && input.attr('type') == 'text') {
            input.val(value);
        }
        // input radio
        if (input[0].nodeName == 'INPUT' && input.attr('type') == 'radio') {
            input.filter('[value="' + value + '"]').prop("checked", true);
        }
        // input checkbox
        if (input[0].nodeName == 'INPUT' && input.attr('type') == 'checkbox' && value == 1) {
            input.prop("checked", true);
        }
        // select
        // textarea

    }

    $('#editimg').on('show.bs.modal', function (e) {
        var modal = $(this),
            btn = $(e.relatedTarget),
            id = btn.data('id'),
            data = imgs['img_' + id];
        
        if (id == 0) {
            // nouvelle image
            console.log(input.attr('name'), input[0].nodeName, input.attr('type'));
            if (input[0].nodeName == 'INPUT' && input.attr('type') == 'hidden') {
                input.val("formNew");
            }

        }
        else {
            // Modification d'image
            for(i in data) {
                //console.log(i, data[i]);
                // Chercher un champ qui a l'id "i"
                var input = $('[name="' + i + '"]');
                // si trouvé, remplir value
                if (input.length) {
                    //console.log('ok');
                    fillValue(input, data[i]);
                }
                else {
                    console.log('ko', i);
                }

            }
        }
    });

})