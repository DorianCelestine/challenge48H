$(document).ready(function() {

    var fillValue = function (input, value) {
        // input text
        if (input[0].nodeName == 'INPUT' && (input.attr('type') == 'text' || input.attr('type') == 'hidden')) {
            input.val(value);
        }
        // input date
        if (input[0].nodeName == 'INPUT' && input.attr('type') == 'date' && value != null) {
            input.val(value.substring(0, 10));
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
            console.log(id);
        
        if (id == 0) { 
            // nouvelle image

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
                }
                
                modal.find('input[name="tags"]').amsifySuggestags({
                    suggestions: tags.map(tag => tag.name)
                });
            }
        }
    });

    $('#editimg').on('hide.bs.modal', function (e) {
        var modal = $(this);
        modal.find('input[name="tags"]').amsifySuggestags({}, 'destroy');
    });
    

    $('input[name="search"]').amsifySuggestags({
        suggestions: tags.map(tag => tag.name),
        tagLimit: 1,
        afterAdd : function(value) {
            console.info(this); // Parameter will be value
            var cards = $('.card');
            cards.show();
            cards.not('.tag-' + value.replaceAll(' ', '-')).hide();
        },
        afterRemove : function(value) {
            console.info(value); // Parameter will be value
            var cards = $('.card');
            cards.show();
        },
        suggestMatch : function(suggestionItem, value) {
            return ~suggestionItem.toString().toLowerCase().indexOf(value.toString().toLowerCase());
        }
    });
})