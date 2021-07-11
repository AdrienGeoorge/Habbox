$('#uploadModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('id')
    var image = button.data('image')
    var path = button.data('path')
    var route = button.data('route')

    var modal = $(this)
    
    if(recipient != null) {
      
        $("#uploadImage").attr("src", image)
        $("#path").attr("value", path)

        modal.find('.modal-title').text('Upload forum image')
        modal.find('.modal-footer').html('<a onclick="uploadFile(' + recipient + ', \'' + path + '\', \'' + route + '\');" class=\"btn light\">Sauvegarder</a>')
    }
});

$('#deletePermissionModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var value = button.data('value')
    var role = button.data('role')
    var modal = $(this)

    if(id != null) {
        modal.find('.modal-title').text('Actions pour ' + value)
        modal.find('.modal-footer').html('<a href=\"/housekeeping/manage/role/' + role + '/users\" class=\"btn light\">Voir tous les utilisateurs</a><a href=\"/housekeeping/manage/permissions/' + id + '/rank/' + role + '/delete\" class=\"btn light\">Supprimer</a>');
        modal.find('.modal-body input').val(id)
    }

});

$('#websiteAlertModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    $("#inputUsername").val(id);
});

$('#reportModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('id')
    var id = button.data('value')
    var type = button.data('type')
    var item = button.data('item')
    var status = button.data('status');
    var callback = button.data('callback');

    var modal = $(this)
    
    if(recipient != null) {
        $(".showimagediv").empty();
        
        if(callback == "photo") {
            var img = $('<img />', {
                src     : Site.story_path + "/photos/" + item + ".png",
                'class' : 'fullImage'
            });
          $('.showimagediv').html(img).show();
        } else {
            if(type == "photo") {
                modal.find('.modal-title').text('Actions pour ' + recipient)
                if(status == "open") {
                    modal.find('.modal-footer').html('<a href=\"/housekeeping/reports/photo/' + id + '/type/' + type + '/itemid/' + item + '\" class=\"btn light\"\">Supprimer la photo</a><a href=\"/housekeeping/reports/close/' + id + '/type/' + type + '/itemid/' + item + '\" class=\"btn btn-secondary\">Close report</a>')
                }  
            } else {
                modal.find('.modal-title').text('Actions pour ' + recipient)
                if(status == "open") {
                    modal.find('.modal-footer').html('<a href=\"/housekeeping/reports/hide/' + id + '/type/' + type + '/itemid/' + item + '\" class=\"btn light\"\">Désactiver la réaction</a><a href=\"/housekeeping/reports/close/' + id + '/type/' + type + '/itemid/' + item + '\" class=\"btn btn-secondary\">Close report</a>')
                } else if(status == "hidden") {
                    modal.find('.modal-footer').html('<a href=\"/housekeeping/reports/enable/' + id + '/type/' + type + '/itemid/' + item + '\" class=\"btn light\"\">Activer la réaction</a><a href=\"/housekeeping/reports/close/' + id + '/type/' + type + '/itemid/' + item + '\" class=\"btn btn-secondary\">Close report</a>')
                } else if(status == "closed") {
                    modal.find('.modal-footer').html('<a href=\"/housekeeping/reports/open/' + id + '/type/' + type + '/itemid/' + item + '\" class=\"btn light\">Rapport ouvert</a>')
                }
                modal.find('.modal-body input').val(recipient)        
            }
        }
    }
});

$('#actionModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('id')
    var modal = $(this)

    if(recipient != null) {
        modal.find('.modal-title').text('Actions pour ' + recipient)
        modal.find('.modal-footer').html('<a href=\"#\" data-toggle=\"modal\" data-target=\"#alertModal\" class=\"btn yellow\" data-id=\"' + recipient + '\">Alerter</a><a href=\"#\" class=\"btn red\" data-toggle=\"modal\" data-target=\"#banModal\" data-id=\"' + recipient + '\">Bannir</a><a href=\"/housekeeping/remote/user/' + recipient + '\" class=\"btn light\">Gérer l\'utilisateur</a>')
        modal.find('.modal-body input').val(recipient)
    }
});

$('#actionModalNamechange').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('id')
    var bodytext = button.data('value')
    var modal = $(this)

    if(recipient != null) {
        modal.find('.modal-title').text('Actions pour ' + recipient)
        modal.find('.modal-body').html(bodytext)
        modal.find('.modal-footer').html('<a href=\"#\" data-toggle=\"modal\" data-target=\"#alertModal\" class=\"btn yellow\" data-id=\"' + recipient + '\">Alerter</a><a href=\"#\" class=\"btn red\" data-toggle=\"modal\" data-target=\"#banModal\" data-id=\"' + recipient + '\">Bannir</a><a href=\"/housekeeping/remote/user/' + recipient + '\" class=\"btn light\">Gérer l\'utilisateur</a>')
        modal.find('.modal-body input').val(recipient)
    }
});

$('#unbanModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('id')
    var player = button.data('value')
    var modal = $(this)

    if(recipient != null) {
        modal.find('.modal-title').text('Êtes-vous sûr de déban ' + player + '?')
        modal.find('.modal-footer').html('<a href=\"/housekeeping/remote/user/' + player + '\" class=\"btn light\">Gérer l\'utilisateur</a> <a href=\"/housekeeping/remote/user/' + recipient + '/unban"\" class=\"btn light\">Débannir</a>')
        modal.find('.modal-body input').val(recipient)
    }
});

$('#alertModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('id')
    var modal = $(this)

    modal.find('.modal-body #inputUsername').val(recipient)
});

$('#banModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('id')
    var modal = $(this)

    modal.find('.modal-body #inputUsername').val(recipient)
});

$('#manageModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('id')
    var modal = $(this)

    modal.find('.modal-body #inputUsername').val(recipient)
});

$('#resetModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('id')
    var modal = $(this)

    modal.find('.modal-body #inputUsername').val(recipient)
});