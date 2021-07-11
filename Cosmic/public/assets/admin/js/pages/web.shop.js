var shop = function() {

    return {
        init: function () {
            shop.initDatatable();

            $('#giveOffer').on('show.bs.modal', function (event) {
                shop.giveOffer();
            });

            $(".createOffer").click(function () {
                shop.editOffer(null);
            });

            $("#goBack").unbind().click(function () {
                shop.goBack();
            });
        },

        editOffer: function (id) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init();

            $("#offerManage").show();
            $("#offers").hide();

            if(id != null) {
                self.ajax_manager.post("/housekeeping/api/shop/getofferbyid", {post: id}, function (result) {
                    $('[name=shopId]').val(result[0].id);

                    $("[name=currencys] option[value='" + result[0].currency + "']").prop('selected', true);
                    $("[name=lang] option[value='" + result[0].lang + "']").prop('selected', true);

                    $('[name=amount]').val(result[0].amount);
                    $('[name=price]').val(result[0].price);
                    $('[name=private_key]').val(result[0].private_key);
                    $('[name=offer_id]').val(result[0].offer_id);
                });
            } else {
                $('[name=shopId]').val(0);
                $('[name=amount]').val("")
                $('[name=price]').val("");
                $('[name=private_key]').val("");
                $('[name=offer_id]').val("");
            }
        },

        goBack: function() {
            $("#kt_datatable_shop").KTDatatable("reload")

            $("#offerManage").hide();
            $("#offers").show();
        },

        initDatatable: function () {

            var datatableShop = function () {

                if ($('#kt_datatable_shop').length === 0) {
                    return;
                }

                var t;
                $("#kt_datatable_shop").KTDatatable({
                    data: {
                        type: 'remote',
                        source: {
                            read: {
                                url: '/housekeeping/api/shop/getOffers',
                                headers: {
                                    'Authorization': 'housekeeping_shop_control'
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
                        sortable: "desc"
                    }, {
                        field: "currency",
                        title: "Monnaie",
                    }, {
                        field: "amount",
                        title: "Montant"
                    }, {
                        field: "price",
                        title: "Prix"
                    }, {
                        field: "lang",
                        title: "Langage",
                        sortable: "desc"
                    }, {
                        field: "Action",
                        title: "Action",
                        sortable: !1,
                        width: 110,
                        overflow: "visible",
                        textAlign: "left",
                        autoHide: !1,
                        template: function(data) {
                            return '<a class="btn light btn-sm btn-clean btn-icon" id="editOffer" title="Editer"><i class="flaticon2-edit"></i></a> <a href="#" class="btn light btn-sm btn-clean btn-icon deleteOffer" data-toggle="modal" data-target="#confirm-delete" title="Supprimer"><i class="la la-trash"></i></a>'
                        }
                    }]
                });

                $("#kt_datatable_shop_reload").on("click", function () {
                    $("#kt_datatable_faq").KTDatatable("reload")
                });
            };

            $("#kt_datatable_shop").unbind().on("click", "#editOffer, .deleteOffer", function (e) {
                e.preventDefault();

                let id = $(e.target).closest('.kt-datatable__row').find('[data-field="id"]').text();

                if ($(this).attr("id") == "editOffer") {
                    shop.editOffer(id);
                } else {
                    $('#confirm-delete').on('show.bs.modal', function (e) {
                        $(".modal-title").html("Supprimer cette offre?");
                        $(".btn-ok").unbind().click(function () {
                            shop.deleteOffer(id);
                        });
                    });
                }
            });

            datatableShop();
        }
    }
}();

jQuery(document).ready(function() {
    shop.init();

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

});