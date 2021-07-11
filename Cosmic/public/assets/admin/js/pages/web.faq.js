var faq = function() {

    return {
        init: function () {
            faq.initDatatable();
        },

        initDatatable: function () {

            var datatableFaqs = function () {

                if ($('#kt_datatable_faq').length === 0) {
                    return;
                }

                var t;
                $("#kt_datatable_faq").KTDatatable({
                    data: {
                        type: 'remote',
                        source: {
                            read: {
                                url: '/housekeeping/api/faq/getfaqs',
                                headers: {
                                    'Authorization': 'housekeeping_website_faq'
                                }
                            }
                        },
                        pageSize: 10
                    },
                    layout: {
                        scroll: !1,
                        footer: !1
                    },
                    sortable: !0,
                    pagination: !0,
                    search: {
                        input: $("#faq_search")
                    },
                    columns: [{
                        field: "id",
                        title: "#",
                        type: "number",
                        width: 40,
                        template: function (data) {
                            return '<span class="kt-font">' + data.id + '</span>';
                        }
                    }, {
                        field: "title",
                        title: "Titre",
                        width: 200,
                        template: function (data) {
                            return '<span class="kt-font">' + data.title + '</span>';
                        }
                    }, {
                        field: "cat_name",
                        title: "Catégorie",
                        width: 200,
                        template: function (data) {
                            return '<span class="kt-font">' + data.cat_name + '</span>'
                        }
                    }, {
                        field: "author",
                        title: "Auteur",
                        width: 75,
                        template: function (data) {
                            return '<span class="kt-font">' + data.author + '</span>';
                        }
                    }, {
                        field: "timestamp",
                        title: "Timestsamp",
                        width: 130,
                        template: function (data) {
                            return '<span class="kt-font">' + data.timestamp + '</span>';
                        }
                    }, {
                        field: "Actions",
                        title: "Actions",
                        sortable: !1,
                        width: 110,
                        overflow: "visible",
                        textAlign: "left",
                        autoHide: !1,
                        template: function () {
                            return '<a class="btn light btn-sm btn-clean btn-icon" id="editFaq" title="Editer"><i class="flaticon2-edit"></i></a> <a class="btn light btn-sm btn-clean btn-icon" id="deleteFaq" data-toggle="modal" data-target="#confirm-delete" title="Supprimer"><i class="flaticon2-trash"></i></a>'
                        }
                    }]
                });

                $("#kt_datatable_faq_reload").on("click", function () {
                    $("#kt_datatable_faq").KTDatatable("reload")
                });
            };

            $("#kt_datatable_faq").unbind().on("click", "#editFaq, #deleteFaq", function (e) {
                e.preventDefault();
                let id = $(e.target).closest('.kt-datatable__row').find('[data-field="id"]').text();
                let title = $(e.target).closest('.kt-datatable__row').find('[data-field="title"]').text();

                if ($(this).attr("id") == "editFaq") {
                    faq.faqRequest(id);
                } else {
                    $('#confirm-delete').on('show.bs.modal', function (e) {
                        $(".modal-title").html("Supprimer " + title);
                        $(".btn-ok").unbind().click(function () {
                            faq.deleteFaq(id);
                        });
                    });
                }
            });

            $(".addFaqPage").unbind().click(function () {
                faq.faqRequest(null);
            });

            $(".getCategory").unbind().click(function () {
                faq.categoryList();
                $("#faqTable").hide();
                $("#categoryList").show();
            });

            datatableFaqs();

        },

        categoryList: function () {
            var datatableCategory = function () {

                if ($('#kt_datatable_faq_category').length === 0) {
                    return;
                }

                var t;
                $("#kt_datatable_faq_category").KTDatatable({
                    data: {
                        type: 'remote',
                        source: {
                            read: {
                                url: '/housekeeping/api/faq/getcategorys',
                                headers: {
                                    'Authorization': 'housekeeping_website_faq'
                                }
                            }
                        },
                        pageSize: 10
                    },
                    layout: {
                        scroll: !1,
                        footer: !1
                    },
                    sortable: !0,
                    pagination: !0,
                    search: {
                        input: $("#searchLatestPlayers")
                    },
                    columns: [{
                        field: "id",
                        title: "#",
                        type: "number",
                        width: 75,
                        template: function (data) {
                            return '<span class="kt-font">' + data.id + '</span>';
                        }
                    }, {
                        field: "category",
                        title: "Catégorie",
                        template: function (data) {
                            return '<span class="kt-font">' + data.category + '</span>';
                        }
                    }, {
                        field: "Actions",
                        title: "Actions",
                        sortable: !1,
                        overflow: "visible",
                        width: 100,
                        textAlign: "left",
                        autoHide: !1,
                        template: function () {
                            return '<a class="btn light btn-sm btn-clean btn-icon" data-toggle="modal" data-target="#editCategoryModal" id="editCat" title="Edit"><i class="flaticon2-edit"></i></a> <a href="#" class="btn light btn-sm btn-clean btn-icon" data-toggle="modal" data-target="#confirm-delete" id="deleteCat" title="Supprimer"><i class="flaticon2-trash"></i></a>'
                        }
                    }]
                });

                $("#kt_datatable_faq_reload").on("click", function () {
                    $("#kt_datatable_faq_category").KTDatatable("reload")
                });
            };

            $("#kt_datatable_faq_category").unbind().on("click", "#editCat, #deleteCat", function (e) {
                e.preventDefault();
                let id = $(e.target).closest('.kt-datatable__row').find('[data-field="id"]').text();
                let cat = $(e.target).closest('.kt-datatable__row').find('[data-field="category"]').text();

                if ($(this).attr("id") == "editCat") {
                    $("[name=editCategoryName]").val(cat);

                    $(".editCategory").unbind().click(function () {
                        faq.editCategory(id, $("[name=editCategoryName]").val());
                    });
                } else {
                    $('#confirm-delete').on('show.bs.modal', function (e) {
                        $(".modal-title").html("Supprimer " + cat);
                        $(".btn-ok").unbind().click(function () {
                            faq.deleteCat(id);
                        });
                    });
                }
            });

            $(".addCategory").unbind().click(function () {
                faq.addCategory($("[name=categoryName]").val());
            });

            $("#goBackCat").unbind().click(function () {
                $("#kt_datatable_faq_category").KTDatatable("destroy");
                faq.goBack();
            });

            datatableCategory();
        },

        addCategory: function (category) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init();

            self.ajax_manager.post("/housekeeping/api/faq/addcategory", {
                post: category
            }, function (result) {
                if (result.status == "success") {
                    faq.goBack();
                    $('#addCategoryModal').modal('toggle');
                    $("#kt_datatable_faq_category").KTDatatable("reload");
                }
            });
        },

        editCategory: function (id, category) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init();

            self.ajax_manager.post("/housekeeping/api/faq/editcategory", {
                category: id,
                value: category
            }, function (result) {
                if (result.status == "success") {
                    faq.goBack();
                    $('#editCategoryModal').modal('toggle');
                    $("#kt_datatable_faq_category").KTDatatable("reload");
                }
            });
        },

        deleteFaq: function(id) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init();

            self.ajax_manager.post("/housekeeping/api/faq/remove", {
                post: id
            }, function(result) {
                if (result.status == "success") {
                    $("#kt_datatable_faq").KTDatatable("reload");
                }
            });
        },

        deleteCat: function(id) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init();

            self.ajax_manager.post("/housekeeping/api/faq/removecategory", {
                post: id
            }, function(result) {
                if (result.status == "success") {
                    $("#kt_datatable_faq_category").KTDatatable("reload");
                }
            });
        },

        goBack: function () {
            $("#editFaq").fadeOut();
            $("#faqTable").fadeIn();
            $("#categoryList").fadeOut();

            $('#category').empty()
            $('[name=faqId]').val(0);
            $('[name=title]').removeAttr('value')
            tinyMCE.activeEditor.setContent("");

            $("#kt_datatable_faq").KTDatatable("reload");
        },

        // Add and edit FAQ
        faqRequest: function (id = null) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init();

            $("#editFaq").fadeIn();
            $("#faqTable").fadeOut();

            self.ajax_manager.post("/housekeeping/api/faq/edit", {
                post: id
            }, function (result) {

                for (var x = 0; x < result.category.length; x++) {
                    var category = result.category[x];
                    $("#category").append(new Option(category.category, category.id));
                }

                if (id != null) {
                    $("#category option[value='" + result.faq.category + "']").prop('selected', true);
                    $('[name=faqId]').val(result.faq.id);
                    $('[name=title]').val(result.faq.title);
                    tinyMCE.activeEditor.setContent(result.faq.desc);

                    $('.titleFaq, .addFaq').text('Editer la FAQ');
                } else {
                    $('[name=faqId]').val(0);
                    $('[name=title]').val("");
                    tinyMCE.activeEditor.setContent("");

                    $('.titleFaq, .addFaq').text('Ajouter la FAQ');
                }

            });

            $("#goBack").unbind().click(function () {
                faq.goBack();
            });
        }
    }
}();

jQuery(document).ready(function() {
    faq.init();

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