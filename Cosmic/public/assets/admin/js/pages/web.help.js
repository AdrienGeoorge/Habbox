var help = function() {

    return {
        init: function() {
            $(".addMessage").unbind().click(function() {
              tinyMCE.triggerSave();
              help.blockPage();
              help.addMessage($("[name=ticketId]").val(), $("#body-input").val());
            });
            
        },
      
        updateStatus: function (id, status) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init();
          
            self.ajax_manager.post("/housekeeping/api/help/updateticket", {post: id, action: status}, function (result) {
                $("#kt_datatable_tickets").KTDatatable("reload");
                help.goBack();
            });
        },
      
        goBack: function () {
            $("#responses").fadeOut().empty();
            $("#userinfo").fadeOut().empty();
            $(".kt-notification").empty();
            $("#notifications").fadeOut();
            $("#sendmessage").fadeOut();
            $("#ticketTable").fadeIn();

            help.blockPage();
            help.loadTickets();
        },
      
        blockPage: function () {
            KTApp.blockPage({
                overlayColor: "#000000",
                type: "v2",
                state: "primary",
                message: "Traitement en cours..."
            });

            setTimeout(function() {
                KTApp.unblockPage();
            }, 2e3);
        },
      
        addMessage: function(id, msg) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init();
          
            self.ajax_manager.post("/housekeeping/api/help/sendmessage", {post: id, message: msg}, function (result) {
                $("#responses").empty();
                $("#userinfo").empty();
                $("#kt-notification").empty();

                help.blockPage();
                help.ticketRequest(id);
            });
        },
      
        ticketRequest: function(id) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init();

            this.notification_tmp = [             
            '<a href="#" class="kt-notification__item">\n' + 
                '<div class="kt-notification__item-icon">\n' +
                    '<i class="flaticon2-{option}"></i>\n' +
                '</div>\n' +
                '<div class="kt-notification__item-details">\n' + 
                    '<div class="kt-notification__item-title">\n' + 
                        '{assistant} {type} {value}\n' + 
                    '</div>\n' + 
                    '<div class="kt-notification__item-time">\n' + 
                        '{timestamp}\n' + 
                    '</div>\n' + 
                '</div>\n' + 
            '</a>'
            ].join(""); 
          
            this.ticket_tmp = [
                '<select class="form-control bootstrap-select w-75 d-inline-block" id="status">'  +
                '<option value="open">Ouvert</option>\n'  +
                '<option value="closed">Fermé</option>\n'  +
                '<option value="in_treatment">En traitement</option>\n'  +
                '</select>'  +
                '<div class="d-inline-block w-25 text-right mb-4">'  +
                '<button class="btn light w-75" type="button" id="goBack">Retour</button>'  +
                '</div>'  +
            '<div class="kt-portlet">\n'  +
               '<div class="kt-portlet__head">\n'  +
                  '<div class="kt-portlet__head-label">\n'  +
                     '<img src="' + Site.figure_url + '/avatarimage?figure={figurePath}&headonly=1&direction=2&head_direction=2&action=&gesture=&" alt="image">\n' +
                     '<h3 class="kt-portlet__head-title">\n'  +
                        '<a href="#" data-toggle="modal" data-target="#actionModal" data-id="{reporter}">{reporter}</a> - <small>{timestamp}</small>\n'  +
                     '</h3>\n'  +
                  '</div>\n'  +
               '</div>\n'  +
               '<div class="kt-portlet__body" style="margin-top: -3em;">\n'  +
                  '{message}\n' +
               '</div>\n'  +
            '</div> \n' 
            ].join(""); 
              
            this.reaction_tmp = [
            '<div class="kt-portlet">\n'  +
               '<div class="kt-portlet__head">\n'  +
                  '<div class="kt-portlet__head-label">\n'  +
                     '<img src="' + Site.figure_url + '/avatarimage?figure={figurePath}&headonly=1&direction=2&head_direction=2&action=&gesture=&" alt="image">\n' +
                     '<h3 class="kt-portlet__head-title">\n'  +
                        '<a href="#" data-toggle="modal" data-target="#actionModal" data-id="{reporter}">{reporter}</a> - <small>{timestamp}</small>\n'  +
                     '</h3>\n'  +
                  '</div>\n'  +
               '</div>\n'  +
               '<div class="kt-portlet__body" style="margin-top: -3em;">\n'  +
                  '{message}\n' +
               '</div>\n'  +
               '<div class="kt-portlet__foot kt-hidden">\n'  +
                  '<div class="row">\n'  +
                     '<div class="col-lg-6">\n'  +
                        'Portlet footer: \n'  +
                     '</div>\n'  +
                     '<div class="col-lg-6">\n'  +
                        '<button type="submit" class="btn light">Soumettre</button>\n'  +
                        '<span class="kt-margin-left-10">or <a href="#" class="kt-link kt-font-bold">Annuler</a></span>\n'  +
                     '</div>\n'  +
                  '</div>\n'  +
               '</div>\n'  +
            '</div> \n' 
            ].join(""); 

            self.ajax_manager.post("/housekeeping/api/help/getticket", {post: id}, function (result) {  
                             
                var reactions_template = $(self.ticket_tmp.replace(/{figurePath}/g, result.ticket.user.look).replace(/{reporter}/g, result.ticket.user.username)
                .replace(/{timestamp}/g, result.ticket.timestamp).replace(/{subject}/g, result.ticket.subject)
                .replace(/{message}/g, result.ticket.message));
              
                for (var x = 0; x < result.reactions.length; x++)
                {
                    var ticket_reactions = result.reactions[x];
                    var ticket_template  = $(self.reaction_tmp.replace(/{figurePath}/g, ticket_reactions.user.look).replace(/{reporter}/g, ticket_reactions.user.username)
                    .replace(/{timestamp}/g, ticket_reactions.timestamp).replace(/{message}/g, ticket_reactions.message));
                  
                    $("#responses").append(ticket_template);
                }
              
                for (var i = 0; i < result.logs.length; i++)
                {
                    var logs = result.logs[i];

                    if(logs.type == "SEND") { var icon = "send" }
                    if(logs.type == "CHANGE") { var icon = "refresh" }
                  
                    var notification_template = $(self.notification_tmp.replace(/{type}/g, logs.type)
                    .replace(/{timestamp}/g, logs.timestamp).replace(/{assistant}/g, logs.assistant)
                    .replace(/{value}/g, logs.value).replace(/{option}/g, icon));
                  
                    $(".kt-notification").append(notification_template);
                }
              
                $('[name=ticketId]').val(result.ticket.id);
                $("#userinfo").append(reactions_template);
              
                $("#goBack").unbind().click(function() {
                    help.goBack();
                });
              
                $("#status").selectpicker('val', result.ticket.status);
              
                $("#status").on("change", function() {
                    help.updateStatus(id, $(this).val());
                });
              
            });
        },
      
        loadTickets: function(roleid) {
            var datatableTickets = function() {
            if ($('#kt_datatable_tickets').length === 0) {
                return;
            }

            var t;
            t = $("#kt_datatable_tickets").KTDatatable({
               data: {
                   type: 'remote',
                   source: {
                     read: {
                       url: '/housekeeping/api/help/gethelptickets',
                       headers: {'Authorization': 'housekeeping_website_helptool' }
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
                   input: $("#generalSearch")
               },
               columns: [{
                   field: "id",
                   title: "#",
                   type: "number",
                   width: 50,
                   template: function(data) {
                       return '<span class="kt-font">' + data.id + '</span>';
                   }
               }, {
                   field: "subject",
                   title: "Sujet",
                   template: function(data) {
                       return '<a href="#" class="viewTicket"><span class="kt-font">' + data.subject + '</span></a>';
                   }
               }, {
                   field: "username",
                   title: "Rapporteur"
               }, {
                   field: "practitioner",
                   title: "Staff"
               }, {
                   field: "timestamp",
                   title: "Timestamp"
               }, {
                  field: "status",
                  title: "Statut",
                  sortable: "desc",
                  template: function(t) {
                    var e = {
                        "in_treatment": {
                            title: "En traitement",
                            class: "kt-badge--warning"
                        },
                        "closed": {
                            title: "Fermé",
                            class: " kt-badge--dark"
                        },
                        "open": {
                            title: "Ouvert",
                            class: " kt-badge--danger"
                        },
                        "wait_reply": {
                            title: "En attente",
                            class: " kt-badge--info"
                        }
                    };
                    return '<span class="kt-badge ' + e[t.status].class + ' kt-badge--inline kt-badge--pill">' + e[t.status].title + "</span>"
                    }
               }]
            }), $("#kt_form_status").on("change", function() {
                t.search($(this).val().toLowerCase(), "status");
            }), $("#kt_form_status").selectpicker(),
              
                $("#kt_datatable_tickets_reload").on("click", function() {
                $("#kt_datatable_tickets").KTDatatable("reload")
            })
            }
                
            datatableTickets();
          
            $("body").unbind().on('click', '.viewTicket', (e) => {
                e.preventDefault();
                let id = $(e.target).closest('.kt-datatable__row').find('[data-field="id"]').text();
              
                $("#responses").fadeIn();
                $("#sendmessage").fadeIn();
                $("#userinfo").fadeIn();
                $("#notifications").fadeIn();
                $("#ticketTable").fadeOut();
              
                blockPageInterfaceSubmit.init();
                help.ticketRequest(id);
            });   
        }
        
    }
}();

jQuery(document).ready(function() {
    help.init();  
    help.loadTickets();

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
