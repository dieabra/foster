/*$(function() {
    

    $("input,textarea").not(".submit").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events          
            event.preventDefault();
            event.stopPropagation();
        },
        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            $("#btnSubmit").attr("disabled", true);
            event.preventDefault();
            event.stopPropagation();
            
            // get values from FORM
            var empresa = $("input#empresa").val();
            var nombreDeContacto = $("input#telephone").val();
            var telephone = $("input#nombreDeContacto").val();
            var email = $("input#email").val();
            var message = $("textarea#message").val();
            var firstName = empresa; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = empresa.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "../mail/contact_me.php",
                type: "POST",
                data: {
                    empresa: empresa,
                    nombreDeContacto: nombreDeContacto,
                    telephone: telephone,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
                    //Enable button & show success message
                    $("#btnSubmit").attr("disabled", false);
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Su mensaje ha sido envíado. A la brevedad nos pondremos en contacto. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    // window.location.href = "/thankyou.php";

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {

                    

                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Disculpe " + firstName + ", es probable que el servidor no este funcionando. Intenta más tarde.");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");

                    
                },
            })


            
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });

 
});*/

// When clicking on Full hide fail/success boxes
$('#name').focus(function() {
    $('#success').html('');
});