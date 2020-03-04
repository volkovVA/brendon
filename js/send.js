"use strict"; 
$(document).on( 'ready', function() { 
    $("#ajaxform").submit(function(){ 
        var form = $(this); 
        var error = false;
        form.find('input, textarea').each( function(){
            if ($(this).val() == '') { 
                alert('Fill in the field "'+$(this).attr('placeholder')+'"!'); 
                error = true; 
            }
        });
        if (!error) { 
            var data = form.serialize(); 
            $.ajax({ 
               type: 'POST', 
               url: 'scripts/send.php',
               dataType: 'json', 
               data: data, 
               beforeSend: function(data) { 
                    form.find('input[type="submit"]').attr('disabled', 'disabled'); 
                  },
               success: function(data){ 
                    if (data['error']) { 
                        alert(data['error']); 
                    } else { 
                        $('#ajaxform')[0].reset();
                        alert('The message was successfully sent'); 
                    }
                 },
               error: function (xhr, ajaxOptions, thrownError) { 
                    alert(xhr.status); 
                    alert(thrownError);
                 },
               complete: function(data) { 
                    form.find('input[type="submit"]').prop('disabled', false); 
                 }
                          
                 });
        }
        return false; 
    });
});