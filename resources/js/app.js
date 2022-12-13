var CustomUtilFunctions = (function () {
    let arrows;
    if (KTUtil.isRTL()) {
        arrows = {
            leftArrow: '<i class="la la-angle-right"></i>',
            rightArrow: '<i class="la la-angle-left"></i>',
        };
    } else {
        arrows = {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>',
        };
    }
    function formatState(state) {
        if (!state.id) {
            return state.text;
        }
        const $state = $(
            `<span class="preview_font"><i class="${state.id}"></i> ${state.text}</span>`
        );
        return $state;
    }
    function colorState(state) {
        if (!state.id) {
            return state.text;
        }
        var $state = $(
            `<span class="text-${state.id} font-weight-bold">${state.text}</span>`
        );
        return $state;
    }
    function colorSelection(state) {
        if (!state.id) {
            return state.text;
        }
        var $state = $(
            `<span class="text-${state.id} font-weight-bold">${state.text}</span>`
        );
        return $state;
    }
    var selects = function () {
        if (jQuery().select2) {
            $(".select2").select2({
                placeholder: "-Seleccionar-",
                allowClear: true,
            });
            $(".select2M").select2({
                placeholder: "-Seleccionar-",
                allowClear: true,
                multiple: true,
                search: true,
            });
            $(".select2_multi").select2({
                placeholder: "-Seleccionar-",
                search: true,
                multiple: true,
                maximumSelectionLength: 1,
                //allowClear: true
            });
            $(".select2Html").select2({
                placeholder: "-Seleccionar-",
                allowClear: true,
                templateResult: formatState,
            });
            $(".select2C").select2({
                placeholder: "-Seleccionar-",
                allowClear: true,
                templateResult: colorState,
                templateSelection: colorSelection,
            });
        }
    };
    let tableData = function () {
        if (jQuery().DataTable) {
            $(".dataTable-EA").each(function () {
                let elememt = $(this);
                elememt.DataTable({
                    order: [],
                    responsive: true,
                    columnDefs: [
                        {
                            targets: 0,
                            orderable: false,
                            searchable: false,
                        },
                        {
                            targets: -1,
                            responsivePriority: -1,
                            orderable: false,
                            searchable: false,
                        },
                    ],
                    language: {
                        sProcessing: "Procesando...",
                        sLengthMenu: "Mostrar _MENU_ registros",
                        sZeroRecords: "No se encontraron resultados",
                        sEmptyTable: "No tiene registros.",
                        sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        sInfoEmpty:
                            "Mostrando registros del 0 al 0 de un total de 0 registros",
                        sInfoFiltered:
                            "(filtrado de un total de _MAX_ registros)",
                        sInfoPostFix: "",
                        sSearch: "Buscar:",
                        sUrl: "",
                        sInfoThousands: ",",
                        sLoadingRecords: "Cargando...",
                        oPaginate: {
                            sFirst: "Primero",
                            sLast: "Último",
                            sNext: "Siguiente",
                            sPrevious: "Anterior",
                        },
                        oAria: {
                            sSortAscending:
                                ": Activar para ordenar la columna de manera ascendente",
                            sSortDescending:
                                ": Activar para ordenar la columna de manera descendente",
                        },
                    },
                });
            });
        }
    };
    let rangeDate = () => {
        const dateFormat = {
            format: "DD/MM/YYYY",
            separator: " - ",
            applyLabel: "Aceptar",
            cancelLabel: "Limpiar",
            fromLabel: "De",
            toLabel: "A",
            customRangeLabel: "Custom",
            weekLabel: "S",
            daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            monthNames: [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre",
            ],
            firstDay: 1,
        };
        if (jQuery().daterangepicker) {
            $(".date_range").each(function () {
                let elememt = $(this);
                elememt.daterangepicker(
                    {
                        locale: dateFormat,
                        autoUpdateInput: false,
                        showDropdowns: true,
                        minDate: moment(elememt.data("start"), "DD/MM/YYYY"),
                        maxDate: moment(),
                        autoApply: true,
                        linkedCalendars: false,
                        drops: "up",
                    },
                    function (start, end) {
                        elememt.val(
                            `${start.format("DD/MM/YYYY")} - ${end.format(
                                "DD/MM/YYYY"
                            )}`
                        );
                        elememt.attr("data-ini", start.unix());
                        elememt.attr("data-end", end.unix());
                    }
                );
            });
        }
        if (jQuery().datepicker) {
            $(".input-daterange").each(function () {
                let elememt = $(this);
                elememt.datepicker({
                    format: "dd/mm/yyyy",
                    endDate: "0d",
                    todayHighlight: true,
                    language: "es",
                    todayHighlight: true,
                    templates: {
                        leftArrow: '<i class="la la-angle-left"></i>',
                        rightArrow: '<i class="la la-angle-right"></i>',
                    },
                });
            });
            $(".input_date_year").datepicker({
                todayHighlight: true,
                startView: 2,
                assumeNearbyYear: true,
                orientation: "bottom left",
                templates: arrows,
                language: "es",
                format: "dd/mm/yyyy",
                autoclose: true,
                endDate: "-18Y",
            });
        }
    };

    return {
        init: function () {
            selects();
            tableData();
            rangeDate();
        },
    };
})();

window.UploadFile = (function () {
    return {
        initDropzone: function (
            container,
            name = "file",
            child,
            size,
            type = "image/*",
            pHash = "default",
            nameFile = "",
            folder = ""
        ) {
            var Drop = $(container).dropzone({
                url: "/ajax/uploadFile",
                timeout: 3600000,
                paramName: name,
                maxFiles: 1,
                maxFilesize: size,
                addRemoveLinks: true,
                dictDefaultMessage: "Arrastra los archivos aquí para subirlos",
                dictFallbackMessage:
                    "Su navegador no admite la carga de archivos con arrastrar y soltar.",
                dictFallbackText:
                    "Por favor, use el formulario de reserva a continuación para cargar sus archivos como en los días anteriores.",
                dictFileTooBig:
                    "El archivo es muy grande ({{filesize}}MB) el limite es de {{maxFilesize}}MB",
                dictInvalidFileType: "No puedes subir archivos de este tipo.",
                dictResponseError:
                    "El servidor respondió con el código {{statusCode}}.",
                dictCancelUpload: "Cancelar la Carga del Archivo",
                dictUploadCanceled: "Carga de Archivo cancelada.",
                dictCancelUploadConfirmation:
                    "¿Estás seguro de que quieres cancelar la carga del archivo?",
                dictRemoveFile: "eliminar archivo",
                dictMaxFilesExceeded: "No puedes subir más archivos.",
                acceptedFiles: type,
                maxfilesexceeded: function (file) {
                    this.removeAllFiles();
                    this.addFile(file);
                },
                init: function () {
                    this.cleaningUp = false; //=> add
                    this.on("success", function (file, response) {
                        if (response.success) {
                            $(`[name="${child}"]`).val(response.file);
                        }
                        toastr.success(
                            "Archivo cargado exitosamente.",
                            "Archivo Cargado",
                            {}
                        );
                    });
                    this.on("removedfile", function (file) {
                        $(`[name="${child}"]`).val("");
                    });
                    this.on("sending", function (file, xhr, formData) {
                        formData.append("type", pHash);
                        if (nameFile != "") {
                            formData.append("file_name", nameFile);
                        }
                        if (folder != "") {
                            formData.append("folder", folder);
                        }
                    });

                    if (
                        $(`[name="${child}"]`).val() &&
                        $(`[name="${child}"]`).val() != ""
                    ) {
                        var mockFile = {
                            name: $(`[name="${child}"]`).attr("data-file"),
                            size: $(`[name="${child}"]`).attr("data-size"),
                            type: $(`[name="${child}"]`).attr("data-type"),
                            accepted: true,
                            status: "success",
                            upload: {},
                        };
                        this.emit("addedfile", mockFile);
                        this.emit("complete", mockFile);
                        if ((img = $(`[name="${child}"]`).attr("data-img"))) {
                            this.emit("thumbnail", mockFile, img);
                        }
                        this.files.push(mockFile);
                    }
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                error: function (file, mensaje) {
                    this.removeFile(file);
                    toastr.warning(mensaje, "¡Advertencia!", {});
                },

                processing: function () {
                    KTApp.block(".dropzone ");
                },

                /*sending: function (file, xhr, formData) {
                        KTApp.block('.dropzone ');
                    },*/

                complete: function () {
                    KTApp.unblock(".dropzone");
                    $(".dz-progress").remove();
                },
            });
        },
    };
})();
window.Jvalidation = (function () {
    return {
        init: function (container, validations, handler) {
            var Validation = jQuery(container).validate({
                lang: "es",
                errorClass: "error invalid-feedback",
                ignore: [],
                success: "valid",
                rules: validations,
                submitHandler: function (form) {
                    handler(form);
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
                    jQuery(element)
                        .addClass("is-invalid")
                        .removeClass(validClass);
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
        },
    };
})();
window.getInputValue = (function () {
    return {
        init: function (name, isChecked = false) {
            let value = jQuery(
                `[name="${name}"]${isChecked ? ":checked" : ""}`
            ).val();
            return value != "" ? value : null;
        },
    };
})();

jQuery(document).ready(function () {
    CustomUtilFunctions.init();
});