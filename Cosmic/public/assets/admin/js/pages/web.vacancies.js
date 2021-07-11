var vacanies = function() {

    return {
        init: function() {        
            $(".createVacancie").unbind().click(function() {
                vacanies.edit(null);
            });
          
            $("#goBack").unbind().click(function() {
                vacanies.back();
            });
        },
      
        back: function () {
            $("#kt_datatable_vacancies").KTDatatable("destroy")
            vacanies.loadVacanies();
            $(".goback").hide();
        },

        loadVacanies: function() {

            var datatableVacancies = function() {
            if ($('#kt_datatable_vacancies').length === 0) {
                return;
            }

            var t;
            t = $("#kt_datatable_vacancies").KTDatatable({
               data: {
                   type: 'remote',
                   source: {
                     read: {
                       url: '/housekeeping/api/vacancies/getvacanies',
                       headers: {'Authorization': 'housekeeping_permissions' }
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
                   title: "id",
                   width: 50
               }, {
                   field: "job",
                   title: "Poste",
                  template: function(data) {
                      return '<a href="#" data-toggle="modal" id="viewvacancies" data-target="#view-vacancies" data-value="' + data.id + '">' + data.job + '</a>'
                  }
               }, {
                    field: "applys",
                    title: "Postulants",
                   width: 50
               }, {
                  field: "Actions",
                  title: "Actions",
                  sortable: !1,
                  width: 75,
                  overflow: "visible",
                  textAlign: "left",
                  autoHide: !1,
                  template: function(data) {
                      return '<a class="btn light btn-sm btn-clean btn-icon" id="viewApply" title="Voir"><i class="flaticon-eye"></i></a> <a href="#" class="btn light btn-sm btn-clean btn-icon delete" data-toggle="modal" data-target="#confirm-delete" title="Supprimer"><i class="flaticon2-trash" data-value="' + data.id + '"></i></a>'
                  }
              }]
            }), $("#kt_datatable_vacancies_reload").on("click", function() {
               $("#kt_datatable_vacancies").KTDatatable("reload")
            })
            }
            
            datatableVacancies();
          
            $("body").unbind().on("click", "#viewvacancies, #viewApply, .delete", function(e) {
              
                var jobtitle = $(e.target).closest('.kt-datatable__row').find('[data-field="job"]').text();
                var jobid = $(e.target).closest('.kt-datatable__row').find('[data-field="id"]').text();

                if ($(this).attr("id") == "viewApply") {
                    vacanies.loadApplications(jobid, jobtitle);
                }
              
                $('#view-vacancies').unbind().on('show.bs.modal', function(e) {
                    $(".modal-title").html("Editer " + jobtitle);
                    vacanies.edit(jobid);
                });
              
                $('#confirm-delete').on('show.bs.modal', function(e) {
                    $(".modal-title").html("Supprimer " + jobtitle);
                    $(".btn-ok").html("Supprimer");
                  
                    $(".btn-ok").click(function () {
                        vacanies.delete(jobid);
                    });
                });
            });
        },
      
        loadApplications: function(id, jobtitle) {
          
            $("#kt_datatable_vacancies").KTDatatable("destroy")
            $(".kt-portlet__head-title").html("Tous les postulants pour " + jobtitle);
          
            var datatableVacancies = function() {
            if ($('#kt_datatable_vacancies').length === 0) {
                return;
            }

            var t;
            t = $("#kt_datatable_vacancies").KTDatatable({
               data: {
                   type: 'remote',
                   source: {
                     read: {
                       url: '/housekeeping/api/vacancies/getApplications',
                        params: {
                           "jobid": id
                        },
                       headers: {'Authorization': 'housekeeping_permissions' }
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
                   title: "id",
                   width: 50
               }, {
                   field: "user_id",
                   title: "Pseudo",
              }, {
                    field: "firstname",
                    title: "Pseudo",
              }, {
                    field: "status",
                    title: "Statut",
                    sortable: "desc",
                   width: 50
               }, {
                  field: "Actions",
                  title: "Actions",
                  sortable: !1,
                  width: 75,
                  overflow: "visible",
                  textAlign: "left",
                  autoHide: !1,
                  template: function(data) {
                      return '<a class="btn light btn-sm btn-clean btn-icon" id="view" data-toggle="modal" data-target="#view-application" title="Voir"><i class="flaticon-eye"></i></a>'
                  }
              }]
            }), $("#kt_datatable_vacancies_reload").on("click", function() {
               $("#kt_datatable_vacancies").KTDatatable("reload")
            })
            }
            
            datatableVacancies();
          
            $(".goback").show();
            
            $("body").unbind().on("click", "#view", function(e) {
                var id = $(e.target).closest('.kt-datatable__row').find('[data-field="id"]').text();
                var firstname = $(e.target).closest('.kt-datatable__row').find('[data-field="firstname"]').text();
                
                $(".modal-title").html("Recrutement de " + firstname);
              
                vacanies.view(id);
            });
        },
      
        view: function(id) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init(); 
          
            self.ajax_manager.post("/housekeeping/api/vacancies/seejob", {
                id: id
            }, function(result) {
                $(".job-body").html("<b>Mon message</b><br /><br />" + result.job.message + "<br /><br />");
              
                $(".monday").html(result.job.available_monday);
                $(".tuesday").html(result.job.available_tuesday);
                $(".wednesday").html(result.job.available_wednesday);
                $(".thursday").html(result.job.available_thursday);
                $(".friday").html(result.job.available_friday);
                $(".saturday").html(result.job.available_saturday);
                $(".sunday").html(result.job.available_sunday);
              
                $(".to-accept").unbind().click(function () {
                    self.ajax_manager.post("/housekeeping/api/vacancies/accept", {
                        id: id
                    }, function(result) {
                        $("#kt_datatable_vacancies").KTDatatable("reload")
                    });
                });
            });
        },
      
        delete: function(id) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init(); 
          
            self.ajax_manager.post("/housekeeping/api/vacancies/delete", {
                id: id
            }, function(result) {
                $("#kt_datatable_vacancies").KTDatatable("reload")
            });
        },
        
        edit: function(id) {
            var self = this;
            this.ajax_manager = new WebPostInterface.init();
          
            var jobid = id;
          
            if(id == null) {
                $(".modal-title").html("Ajouter un poste");
                $(".btn-ok").html("Ajouter");
              
                $('[name=job]').val("");
                $('[name=small_description]').val("");
                tinyMCE.activeEditor.setContent("");
            } else {
                self.ajax_manager.post("/housekeeping/api/vacancies/getjob", {
                    id: jobid
                }, function(result) {
                    $('[name=job]').val(result.job);
                    $('[name=small_description]').val(result.small_description);
                    tinyMCE.activeEditor.setContent(result.full_description);
                });
            }
          
            $(".btn-ok").unbind().click(function () {

                var job_title = $('[name=job]').val();
                var small_description = $('[name=small_description]').val();
                var full_description = tinyMCE.get("full_description").getContent();

                self.ajax_manager.post("/housekeeping/api/vacancies/editadd", {
                    jobid: jobid,
                    job_title: job_title,
                    small_description: small_description,
                    full_description: full_description
                }, function(result) {
                    $("#kt_datatable_vacancies").KTDatatable("reload")
                });
            });

        }
    }
}();

jQuery(document).ready(function() {
    vacanies.init();
    vacanies.loadVacanies();

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