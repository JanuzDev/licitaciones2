let requireItem = true;
let getInputValue = function (name, isChecked = false) {
	let value = jQuery(`[name="${name}"]${(isChecked) ? ':checked' : ''}`).val();
	return (value != '' && value) ? value : 0;
};
let sendData = function (url, data) {
	jQuery.ajax({
		type: 'POST',
		url: url,
		dataType: "json",
		data: data,
		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		timeout: 10000,
		beforeSend: function (data) {
			KTApp.block('body', { message: 'Espere por favor...' });
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
					toastr.error('Ocurrió un problema en el servidor, inténtelo nuevamente más tarde.', '¡Error!', {});
				}
			}
		},
		complete: function (data) {
			jQuery('#user_modal').modal('hide');
			KTApp.unblock('body');
		},
		error: function (data, textstatus) {
			if (textstatus == 'timeout') {
				swal({
					type: 'error',
					title: 'Error',
					text: "Lamentablemente se excedio el tiempo para realizar el proceso, por favor intente nuevamente.",
					buttons: {
						catch: {
							text: "Aceptar",
							value: true,
						},
					},
					closeOnEsc: false,
					closeOnClickOutside: false,
				}).then(function (r) { location.reload(); });
			} else {
				toastr.error('Ocurrió un problema en el servidor, inténtelo nuevamente más tarde.', '¡Error!', {});
			}
		}
	});
};
let settingForm = function () {
	let getFormValue = function () {
		let data = {
			register: parseInt(getInputValue('register', true)),
			password: parseInt(getInputValue('password', true)),
		};
		return data;
	};
	jQuery('#settingForm').validate({
		lang: 'es',
		errorClass: 'error invalid-feedback',
		ignore: [],
		success: "valid",
		rules: {
			register: {
				required: false,
			},
			password: {
				required: false,
			},
		},
		submitHandler: function (form) {
			const url = jQuery(form).attr('action');
			const data = getFormValue();
			console.log(data);
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
			jQuery(element).addClass('is-invalid').removeClass(validClass);
		},
		unhighlight: function (element, errorClass, validClass) {
			jQuery(element).addClass(validClass + ' is-valid').removeClass(errorClass + ' is-invalid');
		},
		errorPlacement: function (error, element) {
			if (element.attr("type") == "radio" || element.attr("type") == "checkbox") {
				error.appendTo(element.parent().parent().parent());
				return;
			} else {
				if (element.hasClass('select2')) {
					error.insertAfter(element.parent().find('.select2-container'));
					return;
				}
				if (element.parent().hasClass('input-group')) {
					error.insertAfter(element.parent());
					return
				} else {
					error.insertAfter(element);
				}
			}
		}
	});
};
let KTBootstrapSwitch = function () {
	// Private functions
	var demos = function () {
		// minimum setup
		$('[data-switch=true]').bootstrapSwitch();
	};
	return {
		// public functions
		init: function () {
			demos();
		},
	};
}();
jQuery(document).ready(function () {
	KTBootstrapSwitch.init();
	settingForm();
});