"use strict";

// Class definition
var KTSignupGeneral = function() {
    // Elements
    var form;
    var submitButton;
    var validator;
    var passwordMeter;

    // Handle form
    var handleForm  = function(e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
			form,
			{
				fields: {
                    'game-id': {
						validators: {
							notEmpty: {
								message: 'Identifiant de jeu est requis'
							}
						}
                    },
					'first-name': {
						validators: {
							notEmpty: {
								message: 'Le prénom est requis'
							}
						}
                    },
                    'last-name': {
						validators: {
							notEmpty: {
								message: 'Le nom de famille est requis'
							}
						}
					},
					'email': {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: "La valeur n'est pas une adresse e-mail valide",
                            },
							notEmpty: {
								message: 'Adresse e-mail est nécessaire'
							}
						}
					},
                    'password': {
                        validators: {
                            notEmpty: {
                                message: 'Le mot de passe est requis'
                            },
                            callback: {
                                message: 'Veuillez entrer un mot de passe valide',
                                callback: function(input) {
                                    if (input.value.length > 0) {
                                        return validatePassword();
                                    }
                                }
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
                    },
                    'toc': {
                        validators: {
                            notEmpty: {
                                message: 'Vous devez accepter les Termes et Conditions'
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

        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            validator.revalidateField('password');

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



                        // send ajax request to route check_email_exists 
                        var check_route = $("form#kt_sign_up_form").data('check_route');
                        var check_email = $("#kt_sign_up_form .email_input").val();
                        axios.post(check_route, {
                            email: check_email
                          })
                          .then(function (response) {

                            // if email exists = true
                            if ( response.data.exists == true ) {
                                // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                                Swal.fire({
                                    text: "Désolé. cette adresse email '"+check_email+"' existe déja!",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "D'accord, j'ai compris!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }else {


                                // send the form using axios if compte created show the success message and redirect user to login form 
                                // if error return display it 
                                


                                // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                                Swal.fire({
                                    text: "Veuillez patienter, nous créons un nouveau compte pour vous!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "D'accord, j'ai compris!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then(function (result) {
                                    
                                    if (result.isConfirmed) { 
                                        // submit form
                                        form.submit(); 
                                        form.reset();  // reset form                    
                                        passwordMeter.reset();  // reset password meter
                                    }
                                });
                            }


                          });


                    }, 1500);   						
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Désolé, il semble qu'il y ait des erreurs détectées, veuillez réessayer.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "D'accord, j'ai compris!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
		    });
        });

        // Handle password input
        form.querySelector('input[name="password"]').addEventListener('input', function() {
            if (this.value.length > 0) {
                validator.updateFieldStatus('password', 'NotValidated');
            }
        });
    }

    // Password input validation
    var validatePassword = function() {
        return (passwordMeter.getScore() === 100);
    }

    // Public functions
    return {
        // Initialization
        init: function() {
            // Elements
            form = document.querySelector('#kt_sign_up_form');
            submitButton = document.querySelector('#kt_sign_up_submit');
            passwordMeter = KTPasswordMeter.getInstance(form.querySelector('[data-kt-password-meter="true"]'));

            handleForm ();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTSignupGeneral.init();
});
