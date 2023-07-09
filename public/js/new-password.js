"use strict";

// Class Definition
var KTAuthNewPassword = function() {
    // Elements
    var form;
    var submitButton;
    var validator;
    var passwordMeter;

    var handleForm = function(e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
			form,
			{
				fields: {					 
                    'password': {
                        validators: {
                            notEmpty: {
                                message: 'Le mot de passe est requis'
                            }
                        }
                    },
                    'confirm-password': {
                        validators: {
                            notEmpty: {
                                message: 'La confirmation du mot de passe est requise'
                            },
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'Le mot de passe et sa confirmation ne sont pas les mêmes'
                            }
                        }
                    }
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger({
                        event: {
                            password: false
                        }  
                    }),
					bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',  // comment to enable invalid state icons
                        eleValidClass: '' // comment to enable valid state icons
                    })
				}
			}
		);

        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            //validator.revalidateField('password');

            validator.validate().then(function(status) {
		        if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click 
                    submitButton.disabled = true;

                    // Simulate ajax request
                    setTimeout(function() {

                        // Hide loading indication
                        submitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        submitButton.disabled = false;

                        // submit the form
                        form.submit();


                        // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        // Swal.fire({
                        //     text: "Vous avez réinitialisé votre mot de passe avec succès !",
                        //     icon: "success",
                        //     buttonsStyling: false,
                        //     confirmButtonText: "D'accord, j'ai compris !",
                        //     customClass: {
                        //         confirmButton: "btn btn-primary"
                        //     }
                        // }).then(function (result) {
                        //     if (result.isConfirmed) { 
                        //         form.querySelector('[name="password"]').value= "";   
                        //         form.querySelector('[name="confirm-password"]').value= "";      
                        //         passwordMeter.reset();  // reset password meter
                        //         //form.submit();

                        //         var redirectUrl = form.getAttribute('data-kt-redirect-url');
                        //         if (redirectUrl) {
                        //             location.href = redirectUrl;
                        //         }
                        //     }
                        // });
                        
                    }, 1500);   						
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Désolé, il semble qu'il y ait des erreurs détectées, veuillez réessayer.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "D'accord, j'ai compris !",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
		    });
        });

        form.querySelector('input[name="password"]').addEventListener('input', function() {
            if (this.value.length > 0) {
                validator.updateFieldStatus('password', 'NotValidated');
            }
        });
    }

    var validatePassword = function() {
        return  (passwordMeter.getScore() === 100);
    }

    // Public Functions
    return {
        // public functions
        init: function() {
            form = document.querySelector('#kt_new_password_form');
            submitButton = document.querySelector('#kt_new_password_submit');
            passwordMeter = KTPasswordMeter.getInstance(form.querySelector('[data-kt-password-meter="true"]'));

            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTAuthNewPassword.init();
});
