jQuery.validator.addMethod("noSpace", function(value, element) {
    return value == '' || value.trim().length != 0;
}, "No space please and don't leave it empty");
jQuery.validator.addMethod("customEmail", function(value, element) {
    return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value );
}, "Please enter valid email address!");
$.validator.addMethod( "alphanumeric", function( value, element ) {
    return this.optional( element ) || /^\w+$/i.test( value );
}, "Letters, numbers, and underscores only please" );
var $registrationForm = $('#register-form');
if($registrationForm.length){
    $registrationForm.validate({
        rules:{
            //username is the name of the textbox
            username: {
                required: true,
                //alphanumeric is the custom method, we defined in the above
                alphanumeric: true
            },
            email: {
                required: true,
                customEmail: true
            },
            password: {
                required: true
            },
            password_confirm: {
                required: true,
                equalTo: '#password'
            },
            full_name: {
                required: true,
                noSpace: true
            },
            phone: {
                required: true,
                noSpace: true
            },
        },
        messages:{
            username: {
                //error message for the required field
                required: 'Please enter username!'
            },
            email: {
                required: 'Please enter email!',
                //error message for the email field
                email: 'Please enter valid email!'
            },
            password: {
                required: 'Please enter password!'
            },
            password_confirm: {
                required: 'Please enter confirm password!',
                equalTo: 'Please enter same password!'
            },
            full_name: {
                required: 'Please enter full name!'
            },
            phone: {
                required: 'Enter a valid phone number!'
            },
        },
        // errorPlacement: function(error, element)
        // {
        //     if (element.is(":radio"))
        //     {
        //         error.appendTo(element.parents('.gender'));
        //     }
        //     else if(element.is(":checkbox")){
        //         error.appendTo(element.parents('.hobbies'));
        //     }
        //     else
        //     {
        //         error.insertAfter( element );
        //     }
        //
        // }
    });
}