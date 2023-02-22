

jQuery(document).ready(function ($) {
    var valid = true;

    function validChamps() {
        $('#location-form .input-group input.required').each(function(){
            if($(this).val().length == 0){
                $(this).siblings('span.error').css('display', 'block');
                valid = false;
            }
        })
    }

    function removeSpan() {
        $('#location-form .input-group input.required').siblings(".error").css('display', 'none');
    }

   
    $('#location-form input.envoi').click(function (e) { 
        e.preventDefault();
        removeSpan();
        validChamps();
        if(valid) {
            $("#location-form").submit();
        }
    });

    $('#deleteform #deleteloc').click(function (e) {
        e.preventDefault();
        var confirm =confirm("Souhaitez-vous vraiment supprimer cet emplacement?");
        if(confirm) {
            $("#deleteform").submit();
        }
    })

    $('#shortcode').click(function(e) {
        e.preventDefault();
        var shortcode = $(this).text();
        var textarea = $('<textarea/>').val(shortcode).appendTo('body').select();
        document.execCommand('copy');
        textarea.remove();
        $(this).text('Copié !');
    })

});

  