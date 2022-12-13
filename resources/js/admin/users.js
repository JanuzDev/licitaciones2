let requireItem = true;
let getInputValue = function (name, isChecked = false) {
    let value = jQuery(`[name="${name}"]${isChecked ? ":checked" : ""}`).val();
    return value != "" ? value : null;
};
let sendData = function (url, data) {
    jQuery.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        data: data,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        timeout: 10000,
        beforeSend: function (data) {
            KTApp.block("body", { message: "Espere por favor..." });
        },
        success: function (data) {
            if (data.success) {
                Swal.fire({
                    text: data.detail,
                    icon: "success",
                    confirmButtonText: "Aceptar",
                }).then(function () {
                    //window.location.href = data.url;
                    location.reload();
                    KTUtil.scrollTop();
                });
            } else {
                if (data.detail) {
                    Swal.fire({
                        text: data.detail,
                        icon: "error",
                        confirmButtonText: "Aceptar",
                    }).then(function () {
                        KTUtil.scrollTop();
                    });
                } else {
                    toastr.error(
                        "Ocurrió un problema en el servidor, inténtelo nuevamente más tarde.",
                        "¡Error!",
                        {}
                    );
                }
            }
        },
        complete: function (data) {
            jQuery("#user_modal").modal("hide");
            KTApp.unblock("body");
        },
        error: function (data, textstatus) {
            if (textstatus == "timeout") {
                swal({
                    type: "error",
                    title: "Error",
                    text: "Lamentablemente se excedio el tiempo para realizar el proceso, por favor intente nuevamente.",
                    buttons: {
                        catch: {
                            text: "Aceptar",
                            value: true,
                        },
                    },
                    closeOnEsc: false,
                    closeOnClickOutside: false,
                }).then(function (r) {
                    location.reload();
                });
            } else {
                toastr.error(
                    "Ocurrió un problema en el servidor, inténtelo nuevamente más tarde.",
                    "¡Error!",
                    {}
                );
            }
        },
    });
};
let userForm = function () {
    let getFormValue = function () {
        let data = {
            user_id: getInputValue("user_id"),
            institution_id: getInputValue("institution_id"),
            role: getInputValue("role"),
            name: getInputValue("name"),
            lastname: getInputValue("lastname"),
            phone: getInputValue("phone"),
            email: getInputValue("email"),
            password: getInputValue("password"),
        };
        return data;
    };
    jQuery("#user_form").validate({
        lang: "es",
        errorClass: "error invalid-feedback",
        ignore: [],
        success: "valid",
        rules: {
            role: {
                required: true,
            },
            institution_id: {
                required: function() {
					let data = getInputValue('role');
					return  data == 'admin' || data == 'institution';
				},
            },
            name: {
                required: true,
                minlength: 3,
                maxlength: 20,
            },
            lastname: {
                required: true,
                minlength: 3,
                maxlength: 50,
            },
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
                digits: true,
            },
            password: {
                required: function () {
                    return !getInputValue("user_id");
                },
                minlength: 8,
                maxlength: 20
            },
        },
        submitHandler: function (form) {
            const url = jQuery(form).attr("action");
            const data = getFormValue();
            sendData(url, data);
        },
        invalidHandler: function (event, validator) {
            Swal.fire({
                text: "Usted tiene campos obligatorios del formulario sin completar, registre la información faltante y vuelva a intentar.",
                icon: "error",
                confirmButtonText: "Aceptar",
            }).then(function () {
                KTUtil.scrollTop();
            });
        },
        highlight: function (element, errorClass, validClass) {
            jQuery(element).addClass("is-invalid").removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            jQuery(element)
                .addClass(validClass + " is-valid")
                .removeClass(errorClass + " is-invalid");
        },
        errorPlacement: function (error, element) {
            if (
                element.attr("type") == "radio" ||
                element.attr("type") == "checkbox"
            ) {
                error.appendTo(element.parent().parent().parent());
                return;
            } else {
                if (element.hasClass("select2")) {
                    error.insertAfter(
                        element.parent().find(".select2-container")
                    );
                    return;
                }
                if (element.parent().hasClass("input-group")) {
                    error.insertAfter(element.parent());
                    return;
                } else {
                    error.insertAfter(element);
                }
            }
        },
    });
	let changeRole = ()=>{
		let input = $(`[name='role']`);
		let container = $(`[name='institution_id']`).parent().parent();
		input.on('change', function(){
			let value = $(this).val();
			if(value == 'admin' || value == 'institution'){
				container.removeClass('d-none');
			}else{
				container.addClass('d-none');
			}
		});
	};
	changeRole();
    let editUser = function () {
        jQuery("body").on("click", ".user_edit", function () {
            jQuery('[name="role"]').val($(this).data("role")).trigger('change');
            jQuery('[name="user_id"]').val($(this).data("user"));
            jQuery('[name="institution_id"]').val($(this).data("institution")).trigger('change');
            jQuery('[name="name"]').val($(this).data("name"));
            jQuery('[name="lastname"]').val($(this).data("lastname"));
            jQuery('[name="email"]').val($(this).data("email"));
            jQuery('[name="phone"]').val($(this).data("phone"));
            jQuery('[name="password"]').parent().parent().addClass("d-none");
            jQuery("#user_modal").modal("show");
        });
    };
    editUser();
    $("#user_modal").on("hidden.bs.modal", function (e) {
        jQuery('[name="role"]').val("").trigger('change');
        jQuery('[name="user_id"]').val("");
        jQuery('[name="name"]').val("");
        jQuery('[name="lastname"]').val("");
        jQuery('[name="email"]').val("");
        jQuery('[name="phone"]').val("");
        jQuery('[name="password"]').parent().parent().removeClass("d-none");
    });
    let archiveUser = function () {
        jQuery("body").on("click", ".user_archive", function () {
            const url = $(this).data("url");
            const data = {
                user_id: $(this).data("user"),
            };
            Swal.fire({
                title: `¿Archivar Usuario?`,
                text: `Una vez archivado no se podran realizar más cambios.`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: `Sí, archivar`,
            }).then(function (result) {
                if (result.value) {
                    sendData(url, data);
                }
            });
        });
    };
    archiveUser();
    let activeUser = function () {
        jQuery("body").on("click", ".user_active", function () {
            const url = $(this).data("url");
            const data = {
                user_id: $(this).data("user"),
            };
            sendData(url, data);
        });
    };
    activeUser();
};
let studentForm = function () {
    let getFormValue = function () {
        let data = {
            user_id: getInputValue("student_user_id"),
            email: getInputValue("student_email"),
        };
        return data;
    };
    jQuery("#student_form").validate({
        lang: "es",
        errorClass: "error invalid-feedback",
        ignore: [],
        success: "valid",
        rules: {
            student_email: {
                required: true,
                email: true,
            },
        },
        submitHandler: function (form) {
            const url = jQuery(form).attr("action");
            const data = getFormValue();
            sendData(url, data);
        },
        invalidHandler: function (event, validator) {
            Swal.fire({
                text: "Usted tiene campos obligatorios del formulario sin completar, registre la información faltante y vuelva a intentar.",
                icon: "error",
                confirmButtonText: "Aceptar",
            }).then(function () {
                KTUtil.scrollTop();
            });
        },
        highlight: function (element, errorClass, validClass) {
            jQuery(element).addClass("is-invalid").removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            jQuery(element)
                .addClass(validClass + " is-valid")
                .removeClass(errorClass + " is-invalid");
        },
        errorPlacement: function (error, element) {
            if (
                element.attr("type") == "radio" ||
                element.attr("type") == "checkbox"
            ) {
                error.appendTo(element.parent().parent().parent());
                return;
            } else {
                if (element.hasClass("select2")) {
                    error.insertAfter(
                        element.parent().find(".select2-container")
                    );
                    return;
                }
                if (element.parent().hasClass("input-group")) {
                    error.insertAfter(element.parent());
                    return;
                } else {
                    error.insertAfter(element);
                }
            }
        },
    });
    let editUser = function () {
        jQuery("#kt_table_1").on("click", ".student_edit", function () {
            console.log("start edit");
            jQuery('[name="student_user_id"]').val($(this).data("user"));
            jQuery("#student_name").text($(this).data("name"));
            jQuery("#student_lastname").text($(this).data("lastname"));
            jQuery("#student_old_email").text($(this).data("email"));
            jQuery('[name="email"]').val("");
            jQuery("#student_modal").modal("show");
        });
    };
    editUser();
};
jQuery(document).ready(function () {
    userForm();
    studentForm();
});
