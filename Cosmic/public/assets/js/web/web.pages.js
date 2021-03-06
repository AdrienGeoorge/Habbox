function WebHotelManagerInterface() {
    this.hotel_container = null;
    this.current_page_url = null;
    /*
     * Manager initialization
     * */
    this.init = function() {
        this.current_page_url = window.location.pathname.substr(1) + window.location.search;

        this.hotel_container = $("#hotel-container");

        this.hotel_container.find(".client-buttons .client-close").click(this.close_hotel);
        this.hotel_container.find(".client-buttons .client-fullscreen").click(this.toggle_fullscreen.bind(this));
        this.hotel_container.find(".client-buttons .client-count").click(this.refresh_count);
        this.hotel_container.find(".client-buttons .client-radio").click(this.radio(this));

        setInterval(function() {
            $("body").find(".client-buttons .client-count #count").load("/api/online");
        }, 120000);
    };

    /*
     * Hotel toggle
     * */
    this.close_hotel = function() {
        Web.pages_manager.load(Web.pages_manager.last_page_url, null, true, null, true);
    };

    this.refresh_count = function() {
        $("body").find(".client-buttons .client-count #count").load("/api/online");
    };

    this.open_hotel = function(arguments) {
        var actions = {};
        var container = this.hotel_container;
        var container_actions = this.hotel_actions;

        if (arguments !== undefined) {
            parse_str(arguments, actions);
        }

        var argument = arguments;
        var body = $("body");

        body.find(".header-container .header-content .account-container .account-buttons .nitroButton").text(Locale.web_hotel_backto);
        if(container.find('iframe').hasClass('nitro') != true) {
            body.find(".header-container .header-content .account-container .account-buttons .flashButton").text("TO " + Site.name);
            container.find("iframe").remove();
        }

        if (!body.hasClass("hotel-visible")) {
            if (container.find(".client-frame").length === 0)

                Web.ajax_manager.get("/api/ssoTicket", function(result) {
                    container.prepend('<iframe id="nitro" class="client-frame nitro" src="' + Client.nitro_path + '/?sso=' + result.ticket + '"></iframe>');

                    let frame = document.getElementById('nitro');

                    window.FlashExternalInterface = {};
                    window.FlashExternalInterface.disconnect = () => {
                        let errorView = document.getElementById('client-error-disconnect');
                        errorView.classList.remove('d-none');
                        frame.classList.add('d-none');
                    };

                    if (frame && frame.contentWindow) {
                        window.addEventListener("message", ev => {
                            if (!frame || ev.source !== frame.contentWindow) return;
                            const legacyInterface = "Nitro_LegacyExternalInterface";
                            if (typeof ev.data !== "string") return;
                            if (ev.data.startsWith(legacyInterface)) {
                                const {
                                    method,
                                    params
                                } = JSON.parse(
                                    ev.data.substr(legacyInterface.length)
                                );
                                if (!("FlashExternalInterface" in window)) return;
                                const fn = window.FlashExternalInterface[method];
                                if (!fn) return;
                                fn(...params);
                                return;
                            }
                        });
                    }
                });

            document.title = 'Hotel - ' + Site.name;
            body.addClass("hotel-visible");

            var radio = document.getElementById("stream");
            radio.src = Client.client_radio;
            radio.volume = 0.1;
        }
    };


    /*
     * LeetFM Player
     * */
    this.radio = function() {

        var radio = document.getElementById("stream");

        this.hotel_container.find(".client-buttons .client-radio .fa-play").click(function() {
            radio.src = Client.client_radio;
            radio.volume = 0.1;
            radio.play();

            $(".fa-play").hide();
            $(".fa-pause").show();
        });

        this.hotel_container.find(".client-buttons .client-radio .fa-pause").click(function() {

            radio.pause();
            radio.src = "";
            radio.load();

            $(".fa-play").show();
            $(".fa-pause").hide();
        });

        this.hotel_container.find(".client-buttons .client-radio .fa-volume-up").click(function() {
            var volume = radio.volume;

            if (volume > 1.0) {
                radio.volume += 0.0;
            } else {
                radio.volume += 0.1;
            }
        });

        this.hotel_container.find(".client-buttons .client-radio .fa-volume-down").click(function() {
            var volume = radio.volume;

            if (volume < 0.0) {
                radio.volume -= 0.0;
            } else {
                radio.volume -= 0.1;
            }
        });
    };

    /*
     * Fullscreen toggle
     * */
    this.toggle_fullscreen = function() {
        if ((document.fullScreenElement && document.fullScreenElement) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
            if (document.documentElement.requestFullScreen) {
                document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            }

            this.hotel_container.find(".client-buttons .client-fullscreen .client-fullscreen-icon").addClass("hidden");
            this.hotel_container.find(".client-buttons .client-fullscreen .client-fullscreen-icon-back").removeClass("hidden");
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }

            this.hotel_container.find(".client-buttons .client-fullscreen .client-fullscreen-icon").removeClass("hidden");
            this.hotel_container.find(".client-buttons .client-fullscreen .client-fullscreen-icon-back").addClass("hidden");
        }
    };
}


function WebPageArticleInterface(main_page) {
    this.main_page = main_page;

    function urlFunc(str, p1, offset, s) {
        return '<a href="' + p1 + '">' + offset + '</a>';
    }

    function urlReplace(str) {
        var bbcode = [
            /\[url=(.*?)\](.*?)\[\/url\]/ig,
        ];

        var format_replace = [
            urlFunc
        ];

        for (var i = 0; i < bbcode.length; i++) {
            str = str.replace(bbcode[i], format_replace[i]);
        }

        return str;
    }

    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        this.reaction_tmp =
            ['<div class="flex-body comment" data-id="{{post.id}}">\n' +
            '    <div class="comment-avatar-flex">\n' +
            '       <a href="/profile/' + User.username + '" class="comment-avatar">\n' +
            '           <img src="' + Site.figure_url + '/?figure={{figure}}&head_direction=2&size=m&headonly=1"\n' +
            '                                     alt="" class="flex_1 pixelated">\n' +
            '       </a>\n' +
            '    </div>\n' +
            '    <div class="flex_5 comment-user-flex">\n' +
            '       <a href="/profile/' + User.username + '" class="comment-user">\n' +
            User.username + '\n' +
            '       </a>\n' +
            '       <span>\n' +
            '          {{message}}\n' +
            '       </span>\n' +
            '     </div>\n' +
            '  <div class="flex_1 comment-user-flex comment-icon"></div>\n' +
            '</div>'].join("");

        page_container.find(".fa-times, .fa-eye").click(function () {
            var csrftoken = $("[name=csrftoken]").val();

            if (User.is_logged == true && User.is_staff == true) {
                var id = $(this).attr("data-id");
                Web.ajax_manager.post("/community/articles/hide", {
                    post: id,
                    csrftoken: csrftoken
                }, function (result) {
                    if (result.status === "success") {
                        if (result.is_hidden === "hide") {
                            $(".fa-times[data-id=" + id + "]").attr('class', 'fa-eye').attr('src', '/assets/icons/articles/show.svg');
                        } else {
                            $(".fa-eye[data-id=" + id + "]").attr('class', 'fa-times').attr('src', '/assets/icons/articles/hide.svg');
                        }
                    }
                });
            }
        });

        page_container.find(".article-reply").click(function () {
            if (User.is_logged == true) {
                var id = $(this).attr("data-id");
                var reply = $('#reply-message').val();
                var csrftoken = $('.article-reply').data('csrf');

                Web.ajax_manager.post("/community/articles/add", {
                    articleid: id,
                    message: reply,
                    csrftoken: csrftoken
                }, function (result) {
                    if (result.status === "success") {
                        var reaction = urlReplace(result.bericht);
                        var reactions_template = $(self.reaction_tmp.replace(/{{figure}}/g, result.figure).replace(/{{message}}/g, reaction).replace(/{{post.id}}/g, result.id));

                        page_container.find(".comments").append(reactions_template);
                        page_container.find(".nopost").remove();
                    }
                });
            } else {
                Web.notifications_manager.create("info", Locale.web_page_article_login);
            }
        });
    };
}

function WebPageSettingsNamechangeInterface(main_page) {
    this.main_page = main_page;
    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        page_container.find("#username").keyup(function () {

            var namechange = page_container.find("#username");
            var csrftoken = page_container.find("#csrftoken");
            var button = page_container.find("#changeButton");

            var givenString = namechange.val();
            var csrftokenString = csrftoken.val();

            if (givenString.length > 0) {
                Web.ajax_manager.post("/settings/namechange/availability", {
                    username: givenString,
                    csrftoken: csrftokenString
                }, function (result) {
                    if (givenString !== User.username) {
                        if (result.status !== "unavailable") {
                            button.removeAttr('disabled', 'disabled').html(Locale.web_page_settings_namechange_request);
                        } else {
                            button.attr('disabled', 'disabled').html(Locale.web_page_settings_namechange_not_available);
                        }
                    } else {
                        button.attr('disabled', 'disabled').html(Locale.web_page_settings_namechange_not_available);
                    }
                });
            } else {
                button.attr('disabled', 'disabled').html(Locale.web_page_settings_namechange_choose_name);
            }
        });

    };

}

function WebPageSettingsInterface(main_page) {
    this.main_page = main_page;
    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        // Checkbox change event
        page_container.find(".settings").change(function () {
            var post = $(this).attr("data-id");
            var type = this.checked;
            var csrftoken = $("[name=csrftoken]").val();

            var array = ["hide_inroom", "hide_staff", "hide_online", "hide_last_online", "hide_home"]

            if (jQuery.inArray(post, array) !== -1) {
                type = type ? false : true;
            }
            var dataString = {
                post: post,
                type: type,
                csrftoken: csrftoken
            };

            self.send_data(dataString);
        });

    };

    /*
     * Custom functions
     * */
    this.send_data = function (data) {
        Web.ajax_manager.post("/settings/preferences/validate", data);
    };

}

function WebPageSettingsVerificationInterface(main_page) {
    this.main_page = main_page;

    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        // Init type select
        page_container.find(".type-select").selectric({
            theme: "web",
            onChange: function (event) {
                self.switch_type(event.value);
            }
        });

        let select = document.querySelector('.type-select');
        select.addEventListener('change', () => {
            self.switch_type(select.value);
        });

        // Init questions selects
        page_container.find(".questions-select").selectric({
            theme: "web"
        });

        // Checkbox change event
        page_container.find("#enable-verification-target").change(function () {
            self.switch_enable($(this).is(":checked"));
        });

        // Submit form
        page_container.find("form").submit(function (event) {
            event.preventDefault();

            var current_verification_type_enabled = page_container.find("#verification_enabled").val();
            var verification_enabled = page_container.find("input[name = 'enable_verification']").is(":checked");
            var csrftoken = $("[name=csrftoken]").val();
            var verification_data = {
                enabled: false,
                type: null,
                data: null,
                current_password: page_container.find("input[name = 'current_password']").val(),
                csrftoken: csrftoken
            };

            if (isEmpty(verification_data.current_password)) {
                Web.notifications_manager.create("error", Locale.web_page_settings_verification_fill_password, Locale.web_page_settings_verification_oops);
                return;
            }

            if (verification_enabled) {
                var verification_type = page_container.find("select[name = 'twosteps_login_type']").val();

                if (verification_type === "app") {
                    if (current_verification_type_enabled === "pincode") {
                        Web.dialog_manager.create("default", Locale.web_page_settings_verification_2fa_on, Locale.web_page_settings_verification_oops, null, null, function () {
                            app_callback();
                        });
                    } else if (isEmpty(current_verification_type_enabled))
                        app_callback();

                    function app_callback() {
                        Web.dialog_manager.create("confirm", Locale.web_page_settings_verification_2fa_secretkey, Locale.web_page_settings_verification_2fa_authcode, null, "pincode", function (result) {
                            verification_data.type = "app";
                            verification_data.data = page_container.find("#twosteps_login_data_code").val();
                            verification_data.enabled = verification_enabled;
                            verification_data.input = result.toString();

                            self.send_data(verification_data);
                        });
                    }
                } else if (verification_type === "pincode") {
                    if (current_verification_type_enabled === "app") {
                        Web.dialog_manager.create("default", Locale.web_page_settings_verification_2fa_on, Locale.web_page_settings_verification_oops, null, null, function () {
                            questions_callback();
                        });
                    } else if (current_verification_type_enabled === "pincode") {
                        Web.dialog_manager.create("default", Locale.web_page_settings_verification_pincode_on, Locale.web_page_settings_verification_oops, null, null, function () {
                            questions_callback();
                        });
                    } else
                        questions_callback();

                    function questions_callback() {
                        var twosteps_login_pincode = page_container.find("input[name = 'twosteps_login_pincode']").val();

                        verification_data.type = "pincode";
                        verification_data.data = twosteps_login_pincode;
                        verification_data.enabled = verification_enabled;

                        self.send_data(verification_data);
                    }
                } else {
                    verification_data.enabled = false;
                    self.send_data(verification_data);
                }
            } else if (current_verification_type_enabled == "app") {
                Web.dialog_manager.create("confirm", Locale.web_page_settings_verification_2fa_off, Locale.web_page_settings_verification_2fa_authcode, null, "pincode", function (result) {
                    verification_data.type = "app";
                    verification_data.enabled = false;
                    verification_data.data = page_container.find("#twosteps_login_data_code").val();
                    verification_data.input = result.toString();

                    self.send_data(verification_data);
                });
            } else if (current_verification_type_enabled == "pincode") {
                Web.dialog_manager.create("confirm", Locale.web_page_settings_verification_pincode_off, Locale.web_page_settings_verification_pincode, null, "pincode", function (result) {
                    verification_data.type = "pincode";
                    verification_data.enabled = false;
                    verification_data.input = result.toString();

                    self.send_data(verification_data);
                });
            } else {
                Web.notifications_manager.create("error", Locale.web_page_settings_verification_switch, Locale.web_page_settings_verification_oops);
            }
        });
    };

    /*
     * Custom functions
     * */
    this.send_data = function (data) {
        Web.ajax_manager.post("/settings/verification/validate", data);
    };

    this.switch_enable = function (enabled) {
        if (enabled)
            document.querySelector('.verification-container').classList.remove('d-none')
        else
            document.querySelector('.verification-container').classList.add('d-none')
    };

    this.switch_type = function (type) {
        console.log(type);
        this.main_page.get_page_container().find(".verification-selected[data-method != '" + type + "']:visible").hide();
        this.main_page.get_page_container().find(".verification-selected[data-method = '" + type + "']").show();
    };
}

function WebPageHelpRequestsInterface(main_page) {
    this.main_page = main_page;

    /*
     * Generic function
     * */
    this.init = function () {
        var page_container = this.main_page.get_page_container();

        // Init type select
        page_container.find(".selectric").selectric({
            theme: "web"
        });
    };
}

function WebPageProfileInterface(main_page) {
    this.main_page = main_page;

    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        // Init photos gallery
        page_container.find(".default-section[data-section = 'photos'] .items-container").magnificPopup({
            delegate: "a",
            type: "image",
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: "mfp-with-zoom mfp-img-mobile report",
            image: {
                verticalFit: true,
                titleSrc: function (item) {
                    if (User.id == item.el.attr("data-player")) {
                        return '<i class="fa fa-times-circle" data-id="' + item.el.attr("data-id") + '" style="color: #fff;"></i> <i class="fa fa-flag" data-report="photo" data-value="photos" data-id="' + item.el.attr("data-id") + '" style="color: #fff;"></i> ' + item.el.attr("data-title");
                    } else {
                        if (User.is_logged == true) {
                            return '<i class="fa fa-flag" data-report="photo" data-value="photos" data-id="' + item.el.attr("data-id") + '" style="color: #fff;"></i> ' + item.el.attr("data-title");
                        } else {
                            return item.el.attr("data-title");
                        }
                    }
                }
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300,
                opener: function (element) {
                    return element.find("div");
                }
            }
        });

        page_container.find(".fa-heart").click(function () {
            var csrftoken = $("[name=csrftoken]").val();
            addLike($(this).attr("data-id"), csrftoken);
        });

        page_container.find(".fa-remove").click(function () {
            var feedid = $(this).attr("data-id");
            var csrftoken = $("[name=csrftoken]").val();

            Web.ajax_manager.post("/community/feeds/delete", {
                feedid: feedid,
                csrftoken: csrftoken
            });
        });

        function addLike(id, csrftoken) {
            if (User.is_logged == true) {
                Web.ajax_manager.post("/community/feeds/like", {
                    post: id,
                    csrftoken: csrftoken
                }, function (result) {
                    if (result.unliked) {
                        $('.likes-count[data-id=' + id + ']').text(parseInt($('.likes-count[data-id=' + id + ']').text()) - 1);
                    } else {
                        if (result.status == 'success') {
                            $('.fa-heart[data-id=' + id + ']').addClass("pulsateOnce");
                            $('.likes-count[data-id=' + id + ']').text(parseInt($('.likes-count[data-id=' + id + ']').text()) + 1);
                        }
                    }
                });
            } else {
                Web.notifications_manager.create("error", Locale.web_page_profile_login, Locale.web_page_profile_loggedout);
            }
        }

        function addPost(message, id, csrftoken) {
            Web.ajax_manager.post("/community/feeds/post", {
                reply: message,
                userid: id,
                csrftoken: csrftoken
            });
        }

        $($('.addfeedreaction')).on('keypress', function (e) {
            var code = e.keyCode || e.which;
            if (code == 13) {
                addPost($('.addfeedreaction').val(), $("input[name=userid]").val(), $("[name=csrftoken]").val());
            }
        });
    }
}

function WebPageCommunityPhotosInterface(main_page) {
    var loadmore = true;

    this.main_page = main_page;
    this.photo_template = [
        '<div>\n' +
        '   <div href="{story}" class="photo-picture" style="background-image: url({story});" data-id="{photo._id}" data-title="{creator.username}"></div>\n' +
        '   <a href="/profile/{creator.username}" class="photo-avatar tooltip">\n' +
        '       <img src="https://images.habbox.fr/?figure={creator.figure}&gesture=sml&headonly=1" alt="{creator.username}" class="pixelated">\n' +
        '       <span class="text">{creator.username}</span>\n' +
        '   </a>\n' +
        '   <span class="photo-like">\n' +
        '       <span class="likes-count fc-like" data-id="{photo._id}">{photo.likes}</span>' +
        '       <i class="fa fa-heart" data-id="{photo._id}" style="color: #D67979;"></i>' +
        '   </span>\n' +
        '</div>'
    ].join("");
    this.current_page = 1;

    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        // Init photos gallery
        page_container.find(".photos-container").magnificPopup({
            delegate: ".photo-picture",
            type: "image",
            closeOnContentClick: true,
            closeBtnInside: false,
            mainClass: "mfp-with-zoom mfp-img-mobile",
            image: {
                verticalFit: true,
                titleSrc: function (item) {
                    return item.el.attr("data-title");
                }
            },
            gallery: {
                enabled: false
            },
            zoom: {
                enabled: true,
                duration: 300,
                opener: function (element) {
                    return element;
                }
            }
        });

        page_container.find(".fa-heart").click(function () {
            if (loadmore == true) {
                var csrftoken = $("[name=csrftoken]").val();
                addPhotoLike($(this).attr("data-id"), csrftoken);
            }
        });

        // Load more photos
        page_container.find(".load-more-button button").click(function () {

            var csrftoken = $("[name=csrftoken]").val();
            let container = document.getElementById('photos-container');
            var countdivs = container.childElementCount;
            Web.ajax_manager.post("/community/photos/more", {
                current_page: self.current_page,
                offset: countdivs,
                csrftoken: csrftoken
            }, function (result) {
                if (result.photos.length > 0) {
                    for (var i = 0; i < result.photos.length; i++) {
                        var photo_data = result.photos[i];
                        var photo_template = $(self.photo_template.replace(/{story}/g, photo_data.url).replace(/{photo._id}/g, photo_data.id).replace(/{photo.likes}/g, photo_data.likes).replace(/{photo.date.full}/g, photo_data.timestamp).replace(/{photo.date.min}/g, photo_data.timestamp).replace(/{creator.username}/g, photo_data.author).replace(/{creator.figure}/g, photo_data.figure));
                        page_container.find(".photos-container").append(photo_template);
                        photo_template.fadeIn();

                        page_container.find(".fa-heart[data-id=" + photo_data.id + "]").click(function () {
                            addPhotoLike($(this).attr("data-id"), csrftoken);
                        });
                    }

                    self.current_page = result.current_page;
                } else {
                    page_container.find(".load-more-button button").html('Il n\'y a plus de photos').unbind();
                }
            });
        });

        function addPhotoLike(id, csrftoken) {
            if (User.is_logged == true) {
                Web.ajax_manager.post("/community/photos/like", {
                    post: id,
                    csrftoken: csrftoken
                }, function (result) {
                    if (result.status == 'success') {
                        $('.fa-heart[data-id=' + id + ']').addClass("pulsateOnce");
                        $('.likes-count[data-id=' + id + ']').text(parseInt($('.likes-count[data-id=' + id + ']').text()) + 1);
                    }
                });
            } else {
                Web.notifications_manager.create("error", Locale.web_page_community_photos_login, Locale.web_page_community_photos_loggedout);
            }
        }
    };
}

function WebPageIndexInterface(main_page) {
    this.main_page = main_page;

    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();
    };
}

function WebPageHomeInterface(main_page) {
    this.main_page = main_page;
    /*
     * Generic function
     * */
    this.init = function () {
        let slideIndex = 1;
        let slides = document.getElementsByClassName("carousel__item");
        let dots = document.getElementsByClassName("carousel__bullets-link");
        let carousel = document.getElementById('carousel');
        let before = $('.carousel_before');
        let after = $('.carousel_after');
        let timer;

        if(carousel){
            let nextSlide = () => {
                for (let i = 0; i < slides.length; i++) {
                    slides[i].classList.remove('active');
                    dots[i].classList.remove('active');
                }

                if (slideIndex >= slides.length) {
                    slideIndex = 1
                } else {
                    slideIndex++;
                }

                slides[slideIndex - 1].classList.add('active');
                dots[slideIndex - 1].classList.add('active');

                timer = setTimeout(nextSlide, 4000);
            }
            timer = setTimeout(nextSlide, 4000);

            before.on('click', () => {
                clearTimeout(timer);
                for (let i = 0; i < slides.length; i++) {
                    slides[i].classList.remove('active');
                    dots[i].classList.remove('active');
                }

                if (slideIndex === 1) {
                    slideIndex = slides.length;
                } else {
                    slideIndex--;
                }

                slides[slideIndex - 1].classList.add('active');
                dots[slideIndex - 1].classList.add('active');
                timer = setTimeout(nextSlide, 4000);
            })

            after.on('click', () => {
                clearTimeout(timer);
                nextSlide();
            })

            $('.carousel__bullets-link').on('click', (e) => {
                clearTimeout(timer);
                for (let i = 0; i < slides.length; i++) {
                    slides[i].classList.remove('active');
                    dots[i].classList.remove('active');
                }

                slideIndex = e.target.innerHTML + 1

                slides[e.target.innerHTML].classList.add('active');
                dots[e.target.innerHTML].classList.add('active');
            })

            carousel.onmouseover = (e) => {
                clearTimeout(timer);
            }

            carousel.onmouseleave = (e) => {
                timer = setTimeout(nextSlide, 4000);
            }
        }

        $("#copyReferral").click(function () {
            var copyText = document.createRange();
            copyText.selectNode(document.getElementById("getReferral"));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(copyText);
            document.execCommand("copy");
            window.getSelection().removeAllRanges();

            Web.notifications_manager.create("info", Locale.web_save_clipboard, Locale.web_referral_copied);
        });
    };
}

function WebPageRegistrationInterface(main_page) {
    this.main_page = main_page;
    this.gender = "male";
    this.clouds_interval = null;
    this.clouds_frame = 0;

    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        // Init type select
        page_container.find("select:not([name = 'gender']).selectric").selectric({
            theme: "web"
        });

        page_container.find("select[name = 'gender'].selectric").selectric({
            theme: "web",
            labelBuilder: "{text}",
            onChange: function () {
                self.gender = $(this).val();
                self.update_avatar(1);
            }
        });

        page_container.find(".username").keyup(function () {
            self.username_availability($(this).val());
        });

        page_container.find(".tabs-container span").click(function () {
            if (!$(this).hasClass("selected"))
                self.update_avatar($(this).attr("data-avatar"));
        });

        if (Configuration.recaptcha_public) {
            grecaptcha.render('registration-recaptcha', {
                'sitekey': Configuration.recaptcha_public
            });
        }

    }

    this.username_availability = function (username) {
        var page_container = this.main_page.get_page_container();

        if (username.length > 2) {
            Web.ajax_manager.post("/settings/namechange/availability", {
                username: username
            }, function (result) {
                if (result.status !== "available") {
                    page_container.find(".username").css('border', '1px solid red');
                } else {
                    page_container.find(".username").css('border', '1px solid green');
                }
            });
        } else {
            page_container.find(".username").css('border', '1px solid red');
        }
    };

    /*
     * Custom functions
     * */
    this.update_avatar = function (avatar) {
        var page_container = this.main_page.get_page_container();
        var avatars_preload = page_container.find(".avatars-preload");
        var avatar_preload = avatars_preload.find("." + this.gender + "-avatar" + avatar).attr("src");
        var avatar_figure = avatar_preload.replace(Site.figure_url + "/?figure=", "").replace("&direction=4&size=l", "");

        page_container.find(".avatars-container input[name = 'figure']").val(avatar_figure);
        page_container.find(".avatars-container .avatar-container img").attr("src", avatar_preload);
        page_container.find(".tabs-container span.selected").removeClass("selected");
        page_container.find(".tabs-container span[data-avatar = '" + avatar + "']").addClass("selected");

        this.update_clouds();
    };

    this.update_clouds = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();
        clearTimeout(this.clouds_interval);
        this.clouds_frame = 0;
        this.clouds_interval = setInterval(function () {
            self.clouds_frame++;
            page_container.find(".avatars-container .avatar-container").attr("data-random", self.clouds_frame);
            if (self.clouds_frame === 8) {
                clearTimeout(self.clouds_interval);
                self.clouds_frame = 0;
                page_container.find(".avatars-container .avatar-container").removeAttr("data-random");
            }
        }, 100);
    };

    this.check_captcha = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        if (page_container.find(".registration-recaptcha").length > 0)
            page_container.find(".registration-form").submit();
        else {
            setTimeout(function () {
                self.check_captcha();
            }, 100);
        }
    };
}

function WebPageJobsInterface(main_page) {
    this.main_page = main_page;

    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        page_container.find(".experiences-container .add-experience").click(function () {
            var experience_container = $(this).closest(".experiences-container").find(".experience-container:first-child").clone();
            experience_container.find("[name]").val("");

            experience_container.insertBefore($(this));

        });

        page_container.find(".no-experience").change(function () {
            var experience_field = page_container.find(".experiences-container[data-experience-field = '" + $(this).attr("data-experience-field") + "']");

            if (experience_field.length === 0)
                return null;

            if ($(this).is(":checked"))
                experience_field.hide();
            else
                experience_field.show();

        });

        page_container.on("click", ".experiences-container .experience-container .remove button", function () {
            if ($(this).closest(".experiences-container").find(".experience-container").length === 1)
                return null;

            $(this).closest(".experience-container").remove();

        });
    };
}

function WebPageShopInterface(main_page) {
    this.main_page = main_page;

    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        // Init type select
        page_container.find(".filter-content .selectric").selectric({
            theme: "web"
        });

        page_container.find(".offer-content").click(function () {
            $("#editor").css("height", "320px");

            var orderId = $(this).data("id");
            var amount = $(this).data("amount");
            var currency = $(this).data("type");
            var description = $(this).data("description");

            var csrftoken = page_container.find("[name=csrftoken]").val();

            page_container.find(".offer-container").hide();
            page_container.find("#offer-" + orderId).show();
            page_container.find(".left-side .aside-title-content").html(amount + ' ' + currency);

            if ($(window).width() > 520) {
                page_container.find(".offers-container").css({
                    "width": "60%",
                    "margin": "2em auto 0 auto",
                    "display": "block"
                });
                page_container.find(".offer-container a").css({"width": "55%", "margin": "0 auto 2em auto"});
            }

            page_container.find(".right-side .aside-content").html(description);
        });

        page_container.find(".selectric").change(function () {
            Web.pages_manager.load("shop/" + page_container.find(".filter-content .selectric").val() + "/lang");
        });
    };
}

function WebPageShopOffersInterface(main_page) {
    this.main_page = main_page;
    this.offer_id = null;
    this.amount = 0;
    this.country = "nl";
    this.payments = {
        "Neosurf": {
            name: Locale.web_page_shop_offers_neosurf_name,
            description: Locale.web_page_shop_offers_neosurf_description,
            class: "neosurf",
            dialog: Locale.web_page_shop_offers_neosurf_dialog
        },
        "Paypal": {
            name: Locale.web_page_shop_offers_paypal_name,
            description: Locale.web_page_shop_offers_paypal_description,
            class: "paypal",
            dialog: Locale.web_page_shop_offers_paypal_dialog
        },
        "SMS": {
            name: Locale.web_page_shop_offers_sms_name,
            description: Locale.web_page_shop_offers_sms_description,
            class: "sms-plus",
            dialog: Locale.web_page_shop_offers_sms_dialog
        },
        "Audiotel": {
            name: Locale.web_page_shop_offers_audiotel_name,
            description: Locale.web_page_shop_offers_audiotel_description,
            class: "audiotel",
            dialog: Locale.web_page_shop_offers_audiotel_dialog
        }
    };
    this.payment_template = [
        '<div class="box mt_1 offer-payment flex-container flex-vertical-center">\n' +
        '    <div class="payment-image"></div>\n' +
        '    <div class="payment-description"></div>\n' +
        '    <div class="payment-button">\n' +
        '        <button type="button" class="rounded-button light">' + Locale.web_page_shop_offers_select + '</button>\n' +
        '    </div>\n' +
        '</div>'
    ].join("");

    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();
        var url;

        if (!User.is_logged)
            return;

        // Init offers
        this.offer_id = page_container.find("#offer-id").val();
        this.amount = page_container.find("#offer-amount").val();
        this.country = page_container.find("#offer-country").val();
        this.shop_type = page_container.find("#shop-type").val();

        if (this.shop_type == "selly.io") {
            //hier komt selly.
        } else {

            $.ajax({
                type: "get",
                url: "https://api.dedipass.com/v1/pay/rates?key=" + this.offer_id,
                dataType: "json"
            }).done(function (solutions) {
                if (page_container.find(".loading-solutions").length > 0)
                    page_container.find(".loading-solutions").remove();

                var solutionsSorted = solutions.sort(function (a, b) {
                    var x = a.ordersolution;
                    var y = b.ordersolution;
                    return x < y ? -1 : x > y ? 1 : 0;
                });

                for (var i = 0; i < solutionsSorted.length; i++) {
                    var solution = solutionsSorted[i];

                    if (!self.payments.hasOwnProperty(solution.solution))
                        continue;

                    if (solution.country.iso !== "all" && solution.country.iso !== self.country)
                        continue;

                    var template = $(self.payment_template);
                    template.attr("data-id", i);
                    template.addClass(self.payments[solution.solution].class);
                    template.find(".payment-description").html("<h4>" + self.payments[solution.solution].name + "</h4>" + self.payments[solution.solution].description);

                    page_container.find(".shop-offer").append(template);

                    template.find(".payment-button button").click(function () {
                        var solution = solutionsSorted[$(this).closest(".offer-payment").attr("data-id")];
                        self.open_solution_payment(solution);
                    });
                }
            });
        }
    };

    /*
     * Custom functions
     * */
    this.open_solution_payment = function (solution) {
        var self = this;
        var payment_solution = this.payments[solution.solution];
        var template = [
            '<div class="payment-popup zoom-anim-dialog">\n' +
            '    <div class="main-step">' +
            '        <h3 class="title">' + Locale.web_page_shop_offers_pay_with + ' ' + payment_solution.name + '</h3>' +
            '        <h5 class="subtitle">' + this.amount + ' ' + Locale.web_page_shop_offers_points_for + ' ' + number_format(solution.user_price, 2, ",", " ") + ' EUR</h5>' +
            '        <h5>1. ' + Locale.web_page_shop_offers_get_code + '</h5>' +
            '        ' + payment_solution.dialog +
            '        <div class="solution-details"></div>' +
            '        <div class="obtain-code"></div>' +
            '        <h5>2. ' + Locale.web_page_shop_offers_fill_code + '</h5>' +
            '        ' + Locale.web_page_shop_offers_fill_code_desc + '' +
            '        <div class="row">' +
            '            <div class="column-2">' +
            '                <input type="text" class="code" placeholder="Code...">' +
            '            </div>' +
            '            <div class="column-2">' +
            '                <button class="rounded-button light plain submit">' + Locale.web_page_shop_offers_submit + '</button>' +
            '            </div>' +
            '        </div>' +
            '    </div>' +
            '    <div class="success-step">' +
            '        <div class="title">' + Locale.web_page_shop_offers_success + '</div>' +
            '        <img src="/assets/images/web/pages/shop/credits-success.png" alt="' + Locale.web_page_shop_offers_success + '">' +
            '        <p>' + Locale.web_page_shop_offers_received + ' <span></span> ' + Locale.web_page_shop_offers_received2 + '</p>' +
            '        <button class="rounded-button lightgreen plain">' + Locale.web_page_shop_offers_close + '</button>' +
            '    </div>' +
            '    <div class="error-step">' +
            '        <div class="title">' + Locale.web_page_shop_offers_failed + '</div>' +
            '        <img src="/assets/icons/croix.svg" alt="' + Locale.web_page_shop_offers_failed + '" width="40em">' +
            '        <p>' + Locale.web_page_shop_offers_failed_desc + '</p>' +
            '        <button class="rounded-button red plain">' + Locale.web_page_shop_offers_back + '</button>' +
            '    </div>' +
            '</div>'
        ].join("");

        var dialog = $(template);
        var details_template = null;
        var obtain_template = null;

        if (payment_solution.class === "neosurf")
            details_template = Locale.web_page_shop_offers_no_card + " <a href=\"http://www.neosurf.com/fr_FR/application/findcard\" target=\"_blank\">" + Locale.web_page_shop_offers_no_card2 + "</a>.";

        if (details_template !== null)
            dialog.find(".solution-details").html(details_template);
        else
            dialog.find(".solution-details").remove();

        if (payment_solution.class === "sms-plus") {
            obtain_template = [
                '<div class="sms-container ' + (this.country === "fr" ? "fr" : "") + '">' +
                '    <span class="keyword">' + solution.keyword + '</span> ' + Locale.web_page_shop_offers_to + ' <span class="shortcode">' + solution.shortcode + '</span>' +
                '    <div class="mention">' + solution.mention + '</div>' +
                '</div>'
            ].join("");
        } else if (payment_solution.class === "audiotel") {
            obtain_template = [
                '<div class="audiotel' + (this.country !== "be" ? "fr" : "be") + '-container">' +
                '    ' + solution.phone +
                '    <div class="mention">' + solution.mention + '</div>' +
                '</div>'
            ].join("");
        } else if (!isEmpty(solution.link)) {
            obtain_template = [
                '<button class="rounded-button light">' + Locale.web_page_shop_offers_buy_code + '</button>'
            ].join("");
        }

        if (obtain_template !== null)
            dialog.find(".obtain-code").html(obtain_template);

        if (!isEmpty(solution.link)) {
            dialog.find(".obtain-code button").click(function () {
                self.open_modal(solution.link);
            });
        }

        dialog.find(".code").keypress(function (e) {
            if (e.keyCode !== 13)
                return null;

            if (!isEmpty($(this).val()))
                self.submit_code(solution, $(this).val());
        });

        dialog.find(".submit").click(function () {
            var code = dialog.find(".code").val();

            if (!isEmpty(code))
                self.submit_code(solution, code);
        });

        dialog.find(".error-step button").click(function () {
            self.show_main_step();
        });

        dialog.find(".success-step button").click(function () {
            $.magnificPopup.close();
        });

        $.magnificPopup.open({
            closeOnBgClick: false,
            items: {
                src: dialog,
                type: "inline"
            }
        });
    };

    this.open_modal = function (link) {
        window.open(link, Locale.web_page_shop_offers_waiting, "toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=600,height=550,left=420,top=150");
    };

    this.submitted = false;
    this.submit_code = function (solution, code) {
        if (this.submitted)
            return null;

        this.disable_button();

        var self = this;
        $.ajax({
            type: "get",
            url: "https://api.dedipass.com/v1/pay/?key=" + this.offer_id + "&rate=AUTORATE&code=" + code + "&tokenize",
            dataType: "json"
        }).done(function (result) {
            Web.ajax_manager.post("/shop/offers/validate", {
                offer_id: self.offer_id,
                code: code,
                price: solution.user_price
            }, function (data) {
                if (data.status === "success")
                    self.show_success_step(data.amount);
                else
                    self.show_error_step();
            });
        });
    };

    this.disable_button = function () {
        var dialog = $("body").find(".payment-popup");
        var submit_button = dialog.find(".main-step .submit");

        this.submitted = true;
        submit_button.text(Locale.web_page_shop_offers_waiting).prop("disabled", true);
    };

    this.enable_button = function () {
        var dialog = $("body").find(".payment-popup");
        var submit_button = dialog.find(".main-step .submit");

        this.submitted = false;
        submit_button.text(Locale.web_dialog_validate).prop("disabled", false);
    };

    this.show_main_step = function () {
        this.enable_button();
        var dialog = $("body").find(".payment-popup");

        dialog.find(".main-step").show();
        dialog.find(".success-step").hide();
        dialog.find(".error-step").hide();
    };

    this.show_success_step = function (amount) {
        this.enable_button();
        var dialog = $("body").find(".payment-popup");

        dialog.find(".main-step").hide();
        dialog.find(".success-step span").text(amount);
        dialog.find(".success-step").show();
        dialog.find(".error-step").hide();
    };

    this.show_error_step = function () {
        this.enable_button();
        var dialog = $("body").find(".payment-popup");

        dialog.find(".main-step").hide();
        dialog.find(".success-step").hide();
        dialog.find(".error-step").show();
    };
}

function WebPageForumInterface(main_page) {

    this.main_page = main_page;

    this.editbox = [
        '<form action="community/forum/edit" method="post">\n' +
        '<div class="replybox" style="padding-top:20px; border-top: 1px solid #acacac; border-spacing: 15px;">\n' +
        '<textarea name="message" id="editor" class="rounded-textarea blue-active">{{data}}</textarea><br />' +
        '<input type="submit" class="btn btn-success" value="' + Locale.web_page_forum_change + '">' +
        '<input type="submit" class="btn btn-error" value="' + Locale.web_page_forum_cancel + '">' +
        '<input type="hidden" name="action" value="edit">' +
        '<input type="hidden" name="id" value="{{id}}">' +
        '</div>'
    ].join("");

    this.init = function () {
        if (User.is_logged == false)
            return;

        var self = this;
        var page_container = this.main_page.get_page_container();

        page_container.find(".new-thread").click(function () {

            if (!User.is_logged)
                return;

            $("#editor").css("height", "320px");
            $("#editor").wysibb();

            $("#forum-category, .new-thread, .pagination").hide();
            $("#thread-content, .redo-reply").show();
        });

        page_container.find(".redo-reply").click(function () {
            $("#thread-content, .redo-reply").hide();
            $("#forum-category, .new-thread, .pagination").show();
        });

        page_container.find(".replybtn").click(function () {
            if ($(this).data("id") !== undefined) {
                $("#editor").val('#quote:' + $(this).data("id") + '\n\n');
            }

            if ($(this).data("status") == "closed") {
                Web.notifications_manager.create("info", Locale.web_page_forum_topic_closed, Locale.web_page_forum_oops);
                return;
            }

            $("#editor").css("height", "220px");
            $("#editor").wysibb();

            $(".replybox").show();
            $('html,body').animate({
                scrollTop: document.body.scrollHeight
            }, "fast");

        });

        page_container.find(".topicreply").click(function () {
            var post_id = $(this).data("id");
            var csrftoken = $("[name=csrftoken]").val();

            Web.ajax_manager.post("/community/forum/edit", {
                id: post_id,
                action: "view",
                csrftoken: csrftoken
            }, function (result) {
                if (result.status == "success") {
                    page_container.find(".replybox").remove();

                    var test = $(self.editbox.replace(/{{data}}/g, atob(result.data)).replace(/{{id}}/g, post_id));
                    page_container.find($(".forum-likes-container[data-id=" + post_id + "]")).append(test);

                    $("#editor").wysibb();
                }
            });
        });

        page_container.find(".fa-heart").click(function () {
            var csrftoken = $("[name=csrftoken]").val();
            if ($(this).hasClass("tools-active"))
                self.like($(this).data("id"), $(this).data('guild'));
        });

        page_container.find(".btn-func").click(function () {
            var csrftoken = $("[name=csrftoken]").val();
            self.closeSticky($(this).data('id'), $(this).data('status'), $(this).data('guild'), csrftoken);
        });

        $('#pagination').twbsPagination({
            totalPages: $("[name=totalpages]").val(),
            pageUrl: $("[name=page_url]").val(),
            startPage: parseFloat($("[name=currentpage]").val()),
            visiblePages: 10,
            pageVariable: 'page',
            href: true,
            first: Locale.web_forum_first,
            prev: Locale.web_forum_previous,
            last: Locale.web_forum_last,
            next: Locale.web_forum_next
        });
    };

    this.closeSticky = function (forum_id, actions, guild_id, csrftoken) {
        Web.ajax_manager.post("/guilds/post/topic/stickyclosethread", {
            id: forum_id,
            action: actions,
            guild_id: guild_id,
            csrftoken: csrftoken
        });
    };

    this.like = function (forum_id, guild_id, csrftoken) {
        Web.ajax_manager.post("/guilds/post/topic/like", {
            id: forum_id,
            url: Web.pages_manager.current_page_url,
            guild_id: guild_id,
            csrftoken: csrftoken
        }, function (result) {
            if (result.status == 'success') {
                $('.fa-heart[data-id=' + forum_id + ']').removeClass("tools-active");
            }
        });
    };
}

function WebPagePasswordClaimInterface(main_page) {
    this.main_page = main_page;
    /*
     * Generic function
     * */
    this.init = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        page_container.find(".tabs-container span").click(function () {
            if (!$(this).hasClass("selected"))
                self.update_avatar($(this).attr("data-avatar"));
        });

        if (Configuration.recaptcha_public)
            var password_claim = grecaptcha.render("password_claim-recaptcha", {
                "sitekey": Configuration.recaptcha_public,
                "size": "invisible",
                "badge": "bottomright",
                "callback": function (recaptchaToken) {
                    page_container.find(".password_claim-form").removeClass("default-prevent").submit().addClass("default-prevent");
                    grecaptcha.reset(password_claim);
                }
            });

        page_container.find(".password_claim-form").submit(function (event) {
            if (!$(this).hasClass("default-prevent"))
                return;

            event.preventDefault();
            grecaptcha.execute(password_claim);
        });
    };

    this.check_captcha = function () {
        var self = this;
        var page_container = this.main_page.get_page_container();

        if (page_container.find(".password_claim-recaptcha").length > 0)
            page_container.find(".password_claim-form").submit();
        else if (page_container.find(".password_claim_username-recaptcha").length > 0) {
            page_container.find(".password_claim-form").submit();
        } else {
            setTimeout(function () {
                self.check_captcha();
            }, 100);
        }
    };
}


// Checkbox change event
$(document).find(".changeLightMode").click(async function () {
    var post = $(this).attr("data-id");
    var type = this.checked;
    var csrftoken = $("[name=csrftoken]").val();

    var dataString = {
        post: post,
        type: type,
        csrftoken: csrftoken
    };

    await Web.ajax_manager.post("/settings/preferences/validate", dataString);
    document.location.reload()
});

let languages = document.querySelectorAll('.changeLanguage');

languages.forEach(el => {
    el.addEventListener('click', async ev => {
        await Web.ajax_manager.post("/settings/changeLanguage", {type: 'language', value: ev.target.dataset.lang});
        document.location.reload()
    })
})