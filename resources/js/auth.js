"use strict";

// Class Definition
var KTLogin = function() {
    var _login;

    var _handleSignInForm = function() {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_signin_form'),
			{
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Este campo es obligatorio.'
							},
							emailAddress:{
								message: 'Por favor, escribe una dirección de correo válida.'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'Este campo es obligatorio.'
							}
						}
					}
				},
				plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#kt_login_signin_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
		        if (status != 'Valid') {
					swal.fire({
		                text: "Usted tiene campos obligatorios del formulario sin completar, registre la información faltante y vuelva a intentar.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Aceptar",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

    }

    var _handleSignUpForm = function(e) {
        var validation;
        var form = KTUtil.getById('kt_login_signup_form');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			form,
			{
				fields: {
					name: {
						validators: {
							notEmpty: {
								message: 'Este campo es obligatorio.'
							},
							stringLength: {
								max: 100,
								message: 'Por favor, no escribas más de 100 caracteres.'
							}
						}
					},
					lastname: {
						validators: {
							notEmpty: {
								message: 'Este campo es obligatorio.'
							},
							stringLength: {
								max: 100,
								message: 'Por favor, no escribas más de 100 caracteres.'
							}
						}
					},
					email: {
                        validators: {
							notEmpty: {
								message: 'Este campo es obligatorio.'
							},
                            emailAddress: {
								message: 'Por favor, escribe una dirección de correo válida.'
							}
						}
					},
					phone: {
                        validators: {
							notEmpty: {
								message: 'Este campo es obligatorio.'
							},
                            integer: {
								message: 'Por favor, escribe un número válido.',
								// The default separators
								thousandsSeparator: '',
								decimalSeparator: ''
							}
						}
					},
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'Este campo es obligatorio.'
                            },
							stringLength: {
								min: 8,
								message: 'Por favor, no escribas menos de 8 caracteres.'
							}
                        }
                    },
                    password_confirmation: {
                        validators: {
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'Por favor, escribe el mismo valor de nuevo.'
                            }
                        }
                    },
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#kt_login_signup_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
		        if (status != 'Valid') {
					swal.fire({
		                text: "Usted tiene campos obligatorios del formulario sin completar, registre la información faltante y vuelva a intentar.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Aceptar",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });
    }

    var _handleForgotForm = function(e) {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_forgot_form'),
			{
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Este campo es obligatorio.'
							},
                            emailAddress: {
								message: 'Por favor, escribe una dirección de correo válida.'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        // Handle submit button
        $('#kt_login_forgot_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
		        if (status != 'Valid') {
					swal.fire({
						text: "Usted tiene campos obligatorios del formulario sin completar, registre la información faltante y vuelva a intentar.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Aceptar",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });
        
    }

    // Public Functions
    return {
        // public functions
        init: function() {
            _login = $('#kt_login');
			if($('#kt_login_signin_form').length){
				_handleSignInForm();
			}
			if($('#kt_login_signup_form').length){
				_handleSignUpForm();
			}
			if($('#kt_login_forgot_form').length){
				_handleForgotForm();
			}
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});
