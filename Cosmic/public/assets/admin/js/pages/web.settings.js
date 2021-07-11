jQuery(document).ready(function() {


    var datatableCompare = function() {

        if ($('#kt_datatable_chatlogs').length === 0) {
            return;
        } else {
            if ($.trim($('#kt_datatable_chatlogs').html()).length) {
                $("#kt_datatable_chatlogs").KTDatatable("destroy")
            }
        }

        var t;
        $("#kt_datatable_chatlogs").KTDatatable({
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: '/housekeeping/api/settings/getcurrencys',
                        headers: {
                            'Authorization': 'housekeeping_config'
                        }
                    }
                },
                pageSize: 10
            },
            layout: {
                scroll: !1,
                footer: !1
            },
            pagination: !0,
            search: {
                input: $("#generalSearch")
            },
            columns: [{
                field: "currency",
                title: "Monnaie",
                width: 75
            }, {
                field: "type",
                title: "Type de devise"
            }, {
                field: "amount",
                title: "Montant"
            }, {
                field: "Action",
                title: "Action",
                overflow: "visible",
                autoHide: !1,
                template: function() {
                    return '<a class="btn light plain btn-sm btn-clean btn-icon" id="deleteCurrency" data-toggle="modal" data-target="#confirm-delete" title="Supprimer"><i class="flaticon2-trash"></i></a>'
                }
            }]
        });

        $("#kt_datatable_reload").on("click", function() {
            $("#kt_datatable_chatlogs").KTDatatable("reload")
        });
    };

    datatableCompare();

    $("body").unbind().on("click", "#deleteCurrency", function(e) {
        e.preventDefault();
        let type = $(e.target).closest('.kt-datatable__row').find('[data-field="type"]').text();
        let currency = $(e.target).closest('.kt-datatable__row').find('[data-field="currency"]').text();

        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(".modal-title").html("Supprimer " + currency);

            $(".btn-ok").click(function() {
                var self = this;
                this.ajax_manager = new WebPostInterface.init();
                self.ajax_manager.post("/housekeeping/api/settings/deletecurrency", {
                    type: type,
                    currency: currency
                }, function(result) {
                    if (result.status == "success") {
                        $("#kt_datatable_chatlogs").KTDatatable("reload");
                    }
                });
            });
        });
    });

    $(".saveCurrency").unbind().click(function() {
        var self = this;
        this.ajax_manager = new WebPostInterface.init();
        self.ajax_manager.post("/housekeeping/api/settings/addcurrency", {
            currency: $("#currency_name").val(),
            type: $("#currency_type").val(),
            amount: $("#currency_amount").val()
        }, function(result) {
            if (result.status == "success") {
                $('#addCategoryModal').modal('toggle');
                $("#kt_datatable_chatlogs").KTDatatable("reload");
            }
        });
    });

    $('.targetRole').select2({
        placeholder: 'Sélectionnez un rank',
        width: '85%',
        ajax: {
            url: '/housekeeping/search/get/role',
            headers: {
                "Authorization": "housekeeping_permissions"
            },
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    searchTerm: params.term
                };
            },
            processResults: function(data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    });

    // The DOM element you wish to replace with Tagify
    var input = document.querySelector('input[name=vip_badges]');

    // init Tagify script on the above inputs
    new Tagify(input);

    $('.targetCurrency').select2({
        placeholder: 'Sélectionnez une monnaie',
        width: '85%',
        ajax: {
            url: '/housekeeping/search/get/currencys',
            headers: {
                "Authorization": "housekeeping_permissions"
            },
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    searchTerm: params.term
                };
            },
            processResults: function(data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    });

    $('.targetItems').select2({
        placeholder: 'Sélectionnez un item',
        width: '85%',
        ajax: {
            url: '/housekeeping/search/get/items',
            headers: {
                "Authorization": "housekeeping_permissions"
            },
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    searchTerm: params.term
                };
            },
            processResults: function(data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    });
  
    var self = this;
    this.ajax_manager = new WebPostInterface.init();

var Values = new Array();
Values.push("value1");
Values.push("value2");
Values.push("value3");

$(".targetItems").val(Values).trigger('change');

    tinymce.init({
        selector: 'textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save | insertfile image media link anchor | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '30m',
        image_advtab: true,
        importcss_append: true,
        file_picker_callback: function (callback, value, meta) {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
            }
        },
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        skin: 'oxide-dark',
        content_css: 'dark',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
});