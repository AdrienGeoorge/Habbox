<?php
use App\Config;

$GLOBALS['language'] = array (
    'website' => array (
        /*     App/View/base.html     */
        'base' => array(
            'nav_home'              => 'Inicio',

            'nav_community'         => 'Comunidad',
            'nav_news'              => 'Noticias',
            'nav_jobs'              => 'Trabajos',
            'nav_photos'            => 'Fotos',
            'nav_staff'             => 'Equipo',
            'nav_team'              => 'Equipo secundario',
            'nav_exchange'          => 'Economía',

            'nav_shop'              => 'Tienda',
            'nav_buy_points'        => 'Comprar diamantes',
            'nav_buy_club'          => 'Comprar el Club VIP',
            'nav_purchasehistory'   => 'Mis últimas compras',
            'nav_changename'        => 'Cambiar mi apodo',
            'nav_drawyourbadge'     => 'Hacer mi insignia',

            'nav_highscores'        => 'Clasificaciones',

            'nav_forum'             => 'Mis grupos',

            'nav_helptool'          => 'Centro de ayuda',
            'nav_helptickets'       => 'Mis entradas',

            'nav_housekeeping'      => 'Administración',

            'close'                 => 'Cerrar',
            'cookies'               => 'Habbox utiliza sus propias cookies para garantizar el mejor servicio con el contenido más adecuado. Si navega por nuestro sitio web, debe aceptar nuestra política de cookies.',
            'read_more'             => 'Leer más',
            'thanks_for_playing'    => 'Gracias por jugar en',
            'made_with_love'        => 'fue diseñado con mucho amor',
            'credits'               => 'Gracias a Raizer y Metus',
            'and_all'               => 'Y a todos los usuarios de Habbox',

            'login_title'           => 'Inicio de sesión',
            'login_name'            => 'Nombre de usuario',
            'login_password'        => 'Contraseña',
            'login_save_data'       => 'Acuérdate de mí',
            'login_lost_password'   => '¿Ha olvidado su contraseña?',

            'report_message'        => 'Informar de este mensaje',
            'report_certainty'      => 'Está a punto de denunciar este mensaje. ¿Estás seguro de que quieres denunciar este mensaje?',
            'report_inappropriate'  => 'Sí, creo que es inapropiado.',

            'user_to'               => 'Habbo Hôtel',
            'user_profile'          => 'Mi perfil',
            'user_settings'         => 'Ajustes',
            'user_stats'            => 'Mis estadísticas',
            'user_logout'           => 'Desconectando',
            'user_hotel'            => 'Hotel',

            'build_tool'            => 'Herramienta de construcción',
            'build_height'          => 'Altura',
            'build_rotation'        => 'Rotación',
            'build_state'           => 'Estado',

            'header_slogan'         => '¡Un mundo increíble se abre ante tus ojos!',
            'header_slogan2'        => '¡Únase a nosotros y haga nuevos amigos!',
            'header_login'          => 'Entrar',
            'header_register'       => 'Registro',
            'header_to'             => 'Hotel',
            'search'                => 'Busque en...',

            'footer_helptool'       => 'Centro de ayuda',
            'footer_rules'          => 'Las reglas de \'' . Config::site['shortname'],
            'footer_terms'          => 'Condiciones de uso',
            'footer_privacy'        => 'Carta de protección de datos personales',
            'footer_cookies'        => 'Política de cookies',
            'footer_guide'          => 'Guía para padres',

            'maintenance'           => 'Mantenimiento de hoteles',
            'text_1'                => 'Nuestro hotel se encuentra actualmente en mantenimiento mientras realizamos actualizaciones. No te preocupes, volveremos muy pronto.',
            'text_2'                => 'Puedes seguir el progreso del trabajo o venir a discutir con nosotros en nuestra comunidad discord.',
            'follow_discord'        => 'Únase a la discordia',
            'staff'                 => 'Área del equipo',

            'panel_articles'        => 'Artigos',
            'panel_jobs'            => 'Recrutamento',

            'panel_faq'             => 'Perguntas mais frequentes',
            'panel_tickets'         => 'Os meus bilhetes',

            'panel_ranking_wealth'  => 'Riqueza',
            'panel_ranking_games'   => 'Jogos',

            'panel_settings'        => 'As minhas preferências',
            'panel_password'        => 'A minha palavra-chave',
            'panel_verification'    => 'Autenticação segura',
            'panel_mail'            => 'O meu endereço electrónico',
            'panel_username'        => 'Mudar o meu apelido',
            'panel_history'         => 'Compras',

            'panel_shop'            => 'Compra de diamantes',
            'panel_vip'             => 'VIP Club',
            'panel_badge'           => 'Criação de crachás',
        ),

        /*     public/assets/js/web     */
        'javascript' => array(
            'web_customforms_markedfields'                  => 'Todos los campos marcados con un * son obligatorios.',
            'web_customforms_loadingform'                   => 'Cambiar la forma...',
            'web_customforms_next'                          => 'Siguiente',
            'web_customforms_close'                         => 'Cerrar',
            'web_customforms_participation'                 => 'Gracias por su participación.',
            'web_customforms_sent'                          => 'Tus respuestas han sido enviadas y serán analizadas por uno de los miembros del equipo que abrió el evento.',
            'web_customforms_answer'                        => 'Mis respuestas',

            'web_dialog_cancel'                             => 'Descontinuar',
            'web_dialog_validate'                           => 'Confirmar',
            'web_dialog_confirm'                            => 'Confirmar mi elección',

            'web_hotel_backto'                              => 'Volver a ' . Config::site['shortname'] . ' Hôtel',

            'web_fill_pincode'                              => 'Introduce el código PIN que especificaste al crear tu cuenta en Habbox. ¿Y si olvidaste tu PIN? Póngase en contacto con el servicio de asistencia a través de la página web ' . Config::site['shortname'] . ' Ayuda de soporte',
            'web_twostep'                                   => 'Autorización en dos fases!',
            'web_login'                                     => 'Debes estar conectado para reportar este mensaje.',
            'web_loggedout'                                 => 'Cerrar la sesión :(',

            'web_notifications_success'                     => 'Éxito!',
            'web_notifications_error'                       => 'Error!',
            'web_notifications_info'                        => 'Información!',

            'web_page_article_login'                        => 'Debes estar conectado para publicar un comentario!',

            'web_page_community_photos_login'               => 'Debes estar conectado para que te gusten estas fotos!',
            'web_page_community_photos_loggedout'           => 'Cerrar la sesión :(',

            'web_page_forum_change'                         => 'Cambiar',
            'web_page_forum_cancel'                         => 'Ríndete',
            'web_page_forum_oops'                           => 'Delgado...',
            'web_page_forum_topic_closed'                   => 'Este tema está cerrado y no se puede responder en este momento.',
            'web_page_forum_login_toreact'                  => 'Debes estar conectado para responder.',
            'web_page_forum_login_tolike'                   => 'Debes estar conectado para que te guste este post.',
            'web_page_forum_loggedout'                      => 'Desconectando :(',

            'web_page_profile_login'                        => 'Tienes que estar conectado para que te gusten estas fotos!',
            'web_page_profile_loggedout'                    => 'Desconectando :(',

            'web_page_settings_namechange_request'          => 'Solicitar',
            'web_page_settings_namechange_not_available'    => 'No disponible',
            'web_page_settings_namechange_choose_name'      => 'Elige un apodo',

            'web_page_settings_verification_oops'           => 'Slim...',
            'web_page_settings_verification_fill_password'  => 'Introduzca su contraseña!',
            'web_page_settings_verification_2fa_on'         => 'La autenticación de Google está actualmente configurada en tu cuenta. Para utilizar otro método de verificación, primero debe eliminar su antiguo método de verificación.',
            'web_page_settings_verification_2fa_secretkey'  => '¿Has escaneado el código QR en tu móvil? A continuación, introduzca la clave secreta para asegurar su cuenta.',
            'web_page_settings_verification_2fa_authcode'   => 'Código de autentificación',
            'web_page_settings_verification_pincode_on'     => 'Actualmente tienes un código pin establecido en tu cuenta. Para utilizar otro método de verificación, primero debe eliminar su antigua verificación.',
            'web_page_settings_verification_2fa_off'        => 'Para desactivar la autenticación de Google, debes introducir tu código secreto a través de nuestro generador.',
            'web_page_settings_verification_pincode_off'    => 'Para desactivar su código PIN, debe introducir su código PIN actual.',
            'web_page_settings_verification_pincode'        => 'Su código PIN',
            'web_page_settings_verification_switch'         => 'Seleccione el botón de elección de autenticación para elegir el método que prefiera para asegurar su cuenta.',

            'web_page_shop_offers_neosurf_name'             => 'Neosurf',
            'web_page_shop_offers_neosurf_description'      => 'Pague fácilmente con Neosurf para comprar Diamantes, luego se le acreditarán automáticamente los puntos Diamante según la cantidad que elija.',
            'web_page_shop_offers_neosurf_dialog'           => 'Introduzca su dirección de correo electrónico de Neosurf para continuar.',
            'web_page_shop_offers_paypal_name'              => 'Paypal',
            'web_page_shop_offers_paypal_description'       => 'Pague fácilmente con Paypal para comprar Diamantes, luego se le acreditarán automáticamente los Diamantes según la cantidad que elija.',
            'web_page_shop_offers_paypal_dialog'            => 'Introduzca su dirección de correo electrónico de Paypal para continuar.',
            'web_page_shop_offers_sms_name'                 => 'SMS',
            'web_page_shop_offers_sms_description'          => 'Envía el código para recibir tus Diamantes.',
            'web_page_shop_offers_sms_dialog'               => 'Introduce el código que has recibido por SMS a continuación para recibir tus Diamantes.',
            'web_page_shop_offers_audiotel_name'            => 'Audiotel',
            'web_page_shop_offers_audiotel_description'     => 'Marque y llame a este número una o más veces para recibir sus Diamantes en la cantidad que usted elija.',
            'web_page_shop_offers_audiotel_dialog'          => 'Introduce el código que has recibido durante la llamada para recibir tus Diamantes.',
            'web_page_shop_offers_pay_with'                 => 'Pagar con',
            'web_page_shop_offers_points_for'               => 'Puntos de diamante para',
            'web_page_shop_offers_get_code'                 => 'Obtenga un código para conseguir Diamantes',
            'web_page_shop_offers_fill_code'                => 'Introduzca su código para conseguir Diamantes',
            'web_page_shop_offers_fill_code_desc'           => '¡Introduzca su código a continuación para recibir sus Diamantes inmediatamente!',
            'web_page_shop_offers_submit'                   => 'Comprar',
            'web_page_shop_offers_success'                  => '¡Compra exitosa!',
            'web_page_shop_offers_received'                 => 'Gracias por su compra. Ahora tienes',
            'web_page_shop_offers_received2'                => 'Puntos de diamante.',
            'web_page_shop_offers_close'                    => 'Cerrar',
            'web_page_shop_offers_failed'                   => '¡Compra fallida!',
            'web_page_shop_offers_failed_desc'              => 'Su compra ha fracasado. Por favor, inténtelo de nuevo o póngase en contacto con nosotros a través de nuestro equipo de soporte.',
            'web_page_shop_offers_back'                     => 'Volver',
            'web_page_shop_offers_no_card'                  => 'Si no tienes una tarjeta de prepago Neosurf, puedes conseguir una en la página web de Neosurf o en tu estanco más cercano.',
            'web_page_shop_offers_no_card2'                 => 'Dónde comprar',
            'web_page_shop_offers_to'                       => 'Para',
            'web_page_shop_offers_buy_code'                 => 'Comprar un código',
            'web_page_shop_offers_select'                   => 'Seleccione',
            'web_page_shop_offers_waiting'                  => 'Cargando...',
            'web_page_hotel_loading'                        => 'está cargando...',
            'web_page_hotel_sometinhg_wrong_1'              => '¡Maldita sea, parece que algo ha salido mal!',
            'web_page_hotel_sometinhg_wrong_2'              => 'Actualizar la página',
            'web_page_hotel_sometinhg_wrong_3'              => 'O puede crear un ticket a través de la Ayuda de Soporte',
            'web_page_hotel_welcome_at'                     => 'Bienvenido a',
            'web_page_hotel_soon'                           => 'Tómese una copa, el hotel está pronto a abrirse ante sus ojos...',
            'web_hotel_active_flash_1'                      => 'Ya casi has llegado ' . Config::site['shortname'] .'!',
            'web_hotel_active_flash_2'                      => 'Haga clic aquí',
            'web_hotel_active_flash_3'                      => 'y luego haga clic en la parte izquierda para permitir la activación del reproductor flash.',

            'web_save_clipboard'                            => 'Guardado en el portapapeles',
            'web_referral_copied'                           => 'Copia hecha'
        ),

        /*     App/View/Community     */
        'article' => array (
            'title'                     => 'Artículos',
            'reactions'                 => 'Comentarios',
            'reactions_empty'           => 'No hay comentarios por el momento.',
            'reactions_fill'            => 'Introduzca su comentario aquí...',
            'reactions_post'            => 'Publicar en',
            'latest_news'               => 'Últimos artículos',
            'reaction_hidden_yes'       => 'Comentario invisible!',
            'reaction_hidden_no'        => 'Comentario visible de nuevo!',
            'forbidden_words'           => 'A su comentario le faltan palabras!',
            'published_on'              => 'Publicado en'
        ),
        'forum' => array (
            /*  Forum/index.html  */
            'index_subject'             => 'Título del tema',
            'index_topics'              => 'Temas',
            'index_latest_topic'        => 'Último tema',
            'index_empty'               => 'Ningún tema',
            'index_latest_activities'   => 'Última actividad',
            'index_by'                  => 'por',

            /*  Forum/category.html  */
            'category_new_topic'        => 'Nuevo tema',
            'category_back'             => 'Volver',
            'category_topics'           => 'Temas',
            'category_posts'            => 'Puestos',
            'category_latest_reacts'    => 'Últimos comentarios',
            'category_topic_by'         => 'Por',
            'category_no_reacts'        => 'Sin comentarios',
            'category_latest_react_by'  => 'Último comentario escrito por',
            'category_create_topic'     => 'Crear un nuevo tema',
            'category_subject'          => 'Tema',
            'category_description'      => 'Descripción',
            'category_create_button'    => 'Crear un nuevo tema',
            'category_or'               => 'o',
            'category_cancel'           => 'volver',

            /*  Forum/topic.html  */
            'topic_react'               => 'Reaccionar',
            'topic_close'               => 'Cerrar',
            'topic_reopen'              => 'Reapertura',
            'topic_since'               => 'Desde:',
            'topic_posts'               => 'Publicado en:',
            'topic_topic'               => 'Tema:',
            'topic_reaction'            => 'Comentario escrito sobre:',
            'topic_closed'              => 'Pay attention! This topic is closed, do you disagree? Then contact us via the',
            'topic_helptool'            => 'soporte',
            'topic_and'                 => 'y',
            'topic_likes_1'             => 'Otros jugadores así!',
            'topic_likes_2'             => 'Les gusta!',
            'topic_likes_3'             => 'Me gusta!'
        ),

        /*     App/View/Community     */
        'community_photos' => array (
            'title'       => 'Fotos de la comunidad',
            'by'          => 'Por',
            'photos_by'   => 'Fotos tomadas por',
            'photos_desc' => 'Vea las últimas fotos tomadas por',
            'load_more'   => 'Ver más fotos'
        ),
        'community_staff' => array (
            'title'       => 'Cómo formar parte del equipo en ' . Config::site['shortname'] . ' ?',
            'desc'        => 'Nuestro equipo está a su disposición para ayudarle y guiarle por el hotel si lo necesita para que tenga la mejor experiencia de juego posible.',
            'content_1'   => 'Por supuesto, todo el mundo sueña con ser funcionario, pero desgraciadamente no todos pueden hacerlo. Convertirse en personal un día en ' . Config::site['shortname'] . ' tendrá que presentar su solicitud en la página de contratación del sitio.',
            'content_2'   => 'Esto será posible cuando se produzcan vacantes, por lo que le rogamos que lea nuestros artículos con regularidad para estar al día del periodo de contratación.',
            'no_users'    => 'No hay nadie en esta categoría'
        ),
        'community_value' => array (
            'title_header'      => 'Catálogo mercado mobis',
            'decs_header'       => 'Todos los mobis exclusivos a precios excepcionales que puedes comprar con créditos se encuentran aquí!',
            'furni_name'        => 'Nombre del mobi',
            'furni_type'        => 'Tipo',
            'furni_costs'       => 'Precio actual',
            'furni_amount'      => 'A la venta',
            'furni_value'       => 'Precio antiguo',
            'furni_rate'        => 'Califica',
            'looking_for'       => 'Estoy buscando..',
            'seller'            => 'Vendido por',
            'price'             => 'Premios',
            'nav_my'            => 'Mi mercado',
            'nav_shop'          => 'El mercado de los mobis',
            'nav_catalogue'     => 'Catálogo',
            'marketplace_desc'  => 'Les vendeurs de ' . Config::site['shortname'] . ' Hôtel vous propose la vente de leur mobis exclusifs en échange de crédits. Peut-être que tu trouveras ici des mobis introuvables dans le catalogue et que tu aimerais acheter!'
        ),
        /*     App/View/Games     */
        'games_ranking' => array (
            'username' => 'name'
        ),

        /*     App/View/Help     */
        'help' => array (
            /*  Help/help.html  */
            'help_title'                => 'Preguntas frecuentes',
            'help_label'                => 'Encuentre aquí todas las respuestas a sus preguntas.',
            'help_other_questions'      => 'Más preguntas',
            'help_content_1'            => '¿No encuentra respuesta a su pregunta?',
            'help_contact'              => 'Contacte-nos',
            'title'                     => 'Soporte',
            'desc'                      => 'Aquí encontrará todas las respuestas a sus preguntas. Si no encuentra respuesta a su pregunta, no dude en ponerse en contacto con nosotros.',

            /*  Help/request.html  */
            'request_closed'            => 'CERRADO',
            'request_on'                => 'Abrir:',
            'request_ticket_amount'     => 'Número de entradas:',
            'request_react_on'          => 'Reaccionar en:',
            'request_react'             => 'Reacciona ahora',
            'request_responses'         => 'Respuesta(s) al tema',
            'request_description'       => 'Descripción',
            'request_react_on_ticket'   => 'Responder al billete',
            'request_contact'           => 'Contacte con ' . Config::site['shortname'],
            'request_contact_help'      => 'Puede ponerse en contacto con nosotros abriendo un nuevo ticket.',
            'request_new_ticket'        => 'Nuevo billete',
            'request_subject'           => 'Asunto',
            'request_type'              => 'Tipo',
            'request_status'            => 'Billete abierto el',
            'request_in_treatment'      => 'En proceso',
            'request_open'              => 'Abrir',
            'request_closed'            => 'Cerrado',
        ),
        'help_new' => array (
            'title'         => 'Nuevo billete',
            'subject'       => 'Asunto',
            'description'   => 'Descripción',
            'open_ticket'   => 'Abrir un billete',
            'request_desc'  => 'Una vez que abra un ticket, le responderemos lo antes posible. Tenga en cuenta que algunas respuestas pueden tardar más en procesarse.'
        ),

        /*     App/View/Home     */
        'index' => array (
            'connection'              => 'Inicio de sesión',
            'hook'                    => 'Únete a nuestra comunidad y crea tu propio avatar, haz amigos, chatea, crea tus propios apartamentos y participa en nuestros eventos.',
            'register'                => 'Registro',
            'login'                   => 'Inicio de sesión'
        ),
        'home' => array (
            'to'                      => 'Entrar en el hotel',
            'friends_online'          => 'Amigos en línea',
            'now_in'                  => 'Actualmente en',
            'latest_news'             => 'Últimos artículos',
            'latest_facts'            => 'Las últimas noticias sobre ' . Config::site['shortname'] . '!',
            'popular_rooms'           => 'Apartamentos populares',
            'popular_rooms_label'     => 'Los apartamentos más modernos de '. Config::site['shortname'] . '!',
            'popular_no_rooms'        => '¡No hay nadie dentro del hotel en este momento!',
            'goto_room'               => 'Únete a l\'appart',
            'popular_groups'          => 'Grupos populares',
            'popular_groups_label'    => '¿A qué grupo quiere unirse?',
            'popular_no_groups'       => 'Todavía no se ha creado ningún grupo.',
            'load_news'               => 'Más información',
            'user_of_the_week'        =>  Config::site['shortname'] . ' miembro elegido de la semana',
            'user_of_the_week_label'  => 'Miembro de la semana',
            'copy_referal'            => 'Copiar',
            'referral'                => 'Patrocinio',
            'referral_desc'           => 'Envía una invitación a tus amigos y si crean una cuenta, recibirás un pequeño regalo.',
            'badges'                  => 'Nuevas insignias',
            'items'                   => 'Nuevos mobis',
            'event'                   => 'Hay un evento en curso en Habbox',
        ),
        'lost' => array (
            'page_not_found'          => 'Página no encontrada.',
            'page_content_1'          => 'Lo sentimos, pero la página que busca no existe.',
            'page_content_2'          => 'Por favor, compruebe de nuevo si está en la URL correcta. Si vuelves por aquí (¡bienvenido de nuevo!). Después, vuelve al punto de partida con el botón de retroceso si quieres.',
            'sidebar_title'           => 'Tal vez esté buscando...',
            'sidebar_stats'           => '¿en la casa de tu amigo?',
            'sidebar_stats_label_1'   => 'Tal vez este ya está en el',
            'sidebar_stats_label_2'   => 'Clasificaciones',
            'sidebar_rooms'           => '¿Pisos populares?',
            'sidebar_rooms_label_1'   => 'Explóralo',
            'sidebar_rooms_label_2'   => 'Navegador',
            'sidebar_else'            => '¡He perdido mis zapatillas!',
            'sidebar_else_label'      => 'Realmente hay que buscar más. :-)'
        ),
        'profile' => array (
            'overlay_search'        => '¿A quién buscas?',
            'since'                 => 'Miembro desde',
            'currently'             => 'Actualmente',
            'never_online'          => 'No en línea',
            'last_visit'            => 'Última visita',
            'guestbook_title'       => 'Libro de visitas',
            'guestbook_label'       => '¿Olvidaste algo?',
            'guestbook_input'       => '¿Qué estás haciendo?',
            'guestbook_input_1'     => '¿Qué quieres?',
            'guestbook_input_2'     => '¿Ahora mismo?',
            'guestbook_load_more'   => 'Leer más mensajes',
            'badges_title'          => 'Insignias',
            'badges_label'          => 'Insignias aleatorias que puedo llevar',
            'badges_empty'          => 'Todavía no tiene una insignia',
            'friends_title'         => 'Amigos',
            'friends_label'         => 'Amigos al azar que están en mi lista de amigos',
            'friends_empty'         => 'Todavía no tengo amigos',
            'groups_title'          => 'Grupos',
            'groups_label'          => 'Grupos a los que pertenezco',
            'groups_empty'          => 'Todavía no hay grupos',
            'rooms_title'           => 'Appart',
            'rooms_label'           => 'Mis últimos apartamentos creados',
            'rooms_empty'           => 'Todavía no he creado ningún apartamento',
            'photos_title'          => 'Fotos',
            'photos_label'          => '¿Quieres hacerte una foto conmigo?',
            'photos_empty'          => 'No se tomaron fotos',
            'title'                 => 'Perfil'
        ),
        'registration' => array (
            'title'                 => 'Primero necesitamos información.',
            'email'                 => 'Dirección de correo electrónico',
            'email_fill'            => 'Introduzca su dirección de correo electrónico aquí...',
            'email_help'            => 'Necesitaremos esta información para restablecer su cuenta en caso de que pierda el acceso.',
            'password'              => 'Su contraseña',
            'password_fill'         => 'Contraseña...',
            'password_repeat'       => 'Repite la contraseña',
            'password_repeat_fill'  => 'Repite la contraseña...',
            'password_help_1'       => 'Su contraseña debe tener al menos seis caracteres y contener letras y números.',
            'password_help_2'       => 'Su contraseña debe tener al menos 6 caracteres y contener letras y números. Asegúrate de que tu contraseña es diferente a la de otros sitios web que visitas.',
            'birthdate'             => 'Fecha de nacimiento',
            'day'                   => 'Día',
            'month'                 => 'Mes',
            'year'                  => 'Año',
            'birthdate_help'        => 'Nous aurons besoin de ces informations pour restaurer ton compte en cas de perte d\'accès.',
            'found'                 => '¿Cómo has encontrado ' . Config::site['shortname'] . ' Hotel?',
            'found_choose'          => 'Elige una opción...',
            'found_choose_1'        => 'A través de Google',
            'found_choose_2'        => 'A través de un amigo',
            'found_choose_3'        => 'A través de otro juego',
            'found_choose_4'        => 'A través de Facebook',
            'found_choose_5'        => 'Otros',
            'create_user'           => 'Crea tu avatar ' . Config::site['shortname'] . '!',
            'username'              => 'Nombre de usuario Habbox',
            'username_fill'         => 'Nombre de usuario...',
            'username_help'         => 'Su apodo único en ' . Config::site['shortname'] . ' Hotel.',
            'sex'                   => 'Género',
            'male'                  => 'Chico',
            'female'                => 'Chica',
            'register'              => 'Inscríbete',
            'header_slogan2'        => '¡Únase a nosotros y haga nuevos amigos!',
            'referral'              => 'Su referencia',
            'login'                 => 'Entrar'
        ),
        'stats' => array(
            'title'                 => 'Mis estadísticas',
            'winwin'                => 'Win-win',
            'respects_received'     => 'Respetos recibidos',
            'respects_given'        => 'Se envían respetos',
            'friends'               => 'Número de amigos',
            'messages'              => 'Mensajes enviados',
            'rooms_visited'         => 'Pisos visitados',
            'rooms'                 => 'Número de pisos',
            'items_purchased'       => 'Mobis comprado',
            'items_posed'           => 'Mobis instalados',
            'AllTimeHotelPresence'  => 'Tiempo en línea',
            'GiftReceiver'          => 'Regalos recibidos',
            'GiftGiver'             => 'Regalos enviados'
        ),

        /*     App/View/Jobs     */
        'apply' => array (
            'title'               => 'Solicitar ahora!',
            'content_1'           => 'GGracias por su interés en ' . Config::site['shortname'] . ' Hotel, le daremos una respuesta lo antes posible.',
            'content_2'           => 'Intenta responder a las preguntas con la mayor sinceridad posible.',
            'description'         => 'Descripción del trabajo',
            'question_name'       => '¿Cómo te llamas?',
            'question_age'        => '¿Qué edad tienes?',
            'question_why'        => '¿Por qué tú y no otra persona?',
            'question_time'       => '¿Cuánto tiempo está en línea?',
            'question_time_help'  => 'Avísenos cuando esté disponible en ' . Config::site['shortname'] . ' Hotel.',
            'monday'              => 'Lunes',
            'tuesday'             => 'Martes',
            'wednesday'           => 'Miércoles',
            'thursday'            => 'Jueves',
            'friday'              => 'Viernes',
            'saturday'            => 'Sábado',
            'sunday'              => 'Domingo',
            'time_to_time'        => 'De X a Y horas',
            'send'                => 'Enviar mi solicitud'
        ),
        'jobs' => array (
            'title'                   => 'Lista de aplicaciones',
            'applications'            => 'Mis solicitudes',
            'my_applications'         => 'Todavía no hay solicitudes',
            'available_applications'  => 'Vacantes',
            'buildteam'               => 'Arquitectos',
            'buildteam_desc'          => 'Son los responsables de la construcción de los apartamentos oficiales del hotel.',
            'react'                   => '¡Solicite ahora!',
            'success'                 => 'Aplicado con éxito',
            'closed'                  => 'Cerrado'
        ),

        /*     App/View/Password     */
        'password_claim' => array (
            'title'                 => '¿Ha olvidado su contraseña?',
            'content_1'             => 'Introduzca su nombre de usuario ' . Config::site['shortname'] . ' y su dirección de correo electrónico.',
            'content_2'             => 'Recibirás un correo electrónico con un enlace de confirmación para cambiar tu contraseña.',
            'username'              => 'Mi nombre de usuario',
            'email'                 => 'Mi dirección de correo electrónico',
            'send'                  => 'Enviar un correo electrónico',
            'wrong_page'            => 'Falsa alarma !',
            'wrong_page_content_1'  => 'Si recuerda su contraseña o ha solicitado accidentalmente una contraseña olvidada, puede utilizar el siguiente enlace para volver a la página de inicio.',
            'back_to_home'          => 'Volver a la página de inicio'
        ),
        'password_reset' => array (
            'title'                     => 'Cambiar la contraseña',
            'new_password'              => 'Nueva contraseña',
            'new_password_fill'         => 'Introduzca mi nueva contraseña...',
            'new_password_repeat_fill'  => 'Por favor, vuelva a escribir su contraseña...',
            'change_password'           => 'Cambiar mi contraseña'
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'Mis preferencias',
            'password'       => 'Cambiar la contraseña',
            'verification'   => 'Set verification',
            'email'          => 'Cambiar la dirección de correo electrónico',
            'namechange'     => 'Cambiar el nombre de usuario',
            'shop_history'   => 'Historia de las compras'
        ),
        'settings_email' => array (
            'title'           => 'Cambiar mi dirección de correo electrónico',
            'email_title'     => 'Dirección de correo electrónico actual',
            'email_label'     => 'Su dirección de correo electrónico es necesaria para restaurar su cuenta si pierde el acceso.',
            'password_title'  => 'Contraseña actual',
            'fill_password'   => 'Introduzca su contraseña...',
            'save'            => 'Guardar'
        ),
        'settings_namechange' => array (
            'warning'         => 'Atenção! Saia do hotel antes de mudar o seu apelido!',
            'title'           => 'Cambiar mi apodo',
            'help_1'          => '¿Quieres cambiar tu nombre de usuario por otro? Esto le costará ',
            'help_2'          => 'que se cobrará inmediatamente después de su solicitud. Por favor, piensa bien en tu futuro apodo.',
            'fill_username'   => 'Introduzca su nuevo nombre de usuario...',
            'request'         => 'Solicite'
        ),
        'settings_password' => array (
            'title'                     => 'Cambiar mi contraseña',
            'password_title'            => 'Contraseña actual',
            'fill_password'             => 'Introduzca su contraseña actual...',
            'newpassword_title'         => 'Nueva contraseña',
            'fill_newpassword'          => 'Introduzca su nueva contraseña aquí...',
            'fill_newpassword_repeat'   => 'Vuelve a escribir tu nueva contraseña...',
            'help'                      => 'Su contraseña debe contener al menos seis caracteres con letras y números.',
            'save'                      => 'Guardar'
        ),
        'settings_preferences' => array (
            'title'               => 'Mis preferencias',
            'follow_title'        => 'Configuración de seguimiento - ¿Quién puede seguirme?' ,
            'follow_label'        => 'No quiero que me rastreen en ' . Config::site['shortname'],
            'friends_title'       => 'Solicitud de amigos',
            'friends_label'       => '¿Permitir que otros miembros se hagan amigos míos?',
            'room_title'          => 'Invitación a un apartamento',
            'room_label'          => 'No quiero que me inviten a otros apartamentos',
            'hotelalerts_title'   => 'Alerta de hotel',
            'hotelalerts_label'   => 'No quiero recibir notificaciones',
            'chat_title'          => 'Configuración del chat',
            'chat_label'          => 'Quiero usar el antiguo chat',
            'dark_mode'           => '¿Quieres usar el modo oscuro?',
            'language_title'      => 'Escolha da língua'
        ),
        'settings_verification' => array (
            'title'                 => 'Asegurar mi cuenta',
            'help'                  => 'Esta comprobación aumenta la seguridad de su cuenta. Al iniciar la sesión, se te pedirá que respondas a las preguntas de seguridad con tus respuestas predefinidas o que introduzcas el código generado por la aplicación de Google, según tus preferencias.',
            'password_title'        => 'Contraseña',
            'fill_password'         => 'Introduzca su contraseña actual...',
            'auth_title'            => 'Verificación en dos fases',
            'auth_label'            => 'Asegure su cuenta con el método de verificación en dos pasos',
            'method_title'          => 'Método de verificación',
            'method_choose'         => 'Elija su método de verificación...',
            'method_pincode'        => 'Quiero introducir un PIN.',
            'method_auth_app'       => 'Quiero utilizar la autenticación 2FA de Google',
            'pincode_title'         => 'Seguridad del PIN',
            'pincode_label'         => 'Por favor, introduzca el código PIN de su elección para asegurar su cuenta, esto asegurará una mejor protección contra personas malintencionadas.',
            'fill_pincode'          => 'Introduzca su nuevo PIN aquí',
            'generate_auth'         => 'Seguridad mediante la autenticación 2FA de Google',
            'generate_auth_label'   => 'Este método es más fiable. Enlaza tu ' . Config::site['shortname'] . ' a una aplicación de autenticación llamada (Google Authenticator) en su smartphone. Cuando tengas que registrarte, todo lo que tienes que hacer es introducir el código generado por Google que recibirás en tu smartphone a través de la aplicación de Google.',
            'link_account'          => 'Vincular su cuenta',
            'link_account_label'    => 'Vincular su cuenta es fácil. Sólo tienes que escanear el código QR a través de tu aplicación de Google y hacer clic en guardar para validar los cambios.',
            'save'                  => 'Guardar'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'Ventajas del Club VIP',
            'club_buy'            => 'Comprar el Club VIP',
            'unlimited'           => 'Ilimitado',
            'more_information'    => 'Más información',
            'content_1'           => '¿Tiene una pregunta o un problema con una compra?',
            'content_2'           => 'No dude en ponerse en contacto con el servicio de atención al cliente a través de ',
            'help_tool'           => 'Apoyo d\'aide',
            'random_club_users'   => Config::site['shortname'] . ' al azar que es miembro del Club',
            'desc'                => 'Aquí puedes unirte al Club VIP con diamantes para comprar mobis exclusivos y muchas otras cosas...',
            'days'                => 'DÍAS',

            'catalog'               => 'Novidades no catálogo',
            'catalog_desc'          => 'Acesso a mais de 60 novas categorias de mobiliário exclusivas para membros do clube',
            'king'                  => 'Tu és o rei',
            'king_desc'             => 'Obtenha uma prévia dos últimos mobis adicionados ao catálogo',
            'gift'                  => 'É um presente',
            'gift_desc'             => 'Aqui está um crachá que mostrará o seu estatuto dentro do hotel',
            'build'                 => 'As suas competências de construção são ilimitadas',
            'build_desc'            => 'Criar até 1000 apartamentos em vez do máximo de 150',
            'groups'                => 'Os grupos já não serão um segredo para si',
            'groups_desc'           => 'Criar até 500 grupos em vez do máximo de 150',
            'rooms'                 => 'Haverá sempre lugar para si',
            'rooms_desc'            => 'Não se pode voltar atrás na entrada, pode-se visitar os apartamentos mesmo quando estão cheios',
            'flood'                 => 'É a sua vez de falar',
            'flood_desc'            => 'A duração da sua inundação é reduzida de 30 para 10 segundos, não verá o tempo passar',
            'commands'              => 'Pode divertir-se',
            'commands_desc'         => 'Tirar partido de encomendas especiais exclusivas para membros do clube',
        ),
        'shop_history' => array (
            'more_information'    => 'Más información',
            'buy_history'         => 'Mis compras',
            'product'             => 'Productos',
            'date'                => 'Fecha',
            'buy_history_empty'   => 'No tiene historial de compras en este momento.',
            'buy_club'            => 'Compra del Club VIP',
            'content_1'           => '¿Tiene alguna pregunta o duda sobre la compra de algo en la tienda?',
            'content_2'           => 'No dude en ponerse en contacto con el servicio de atención al cliente a través de',
            'help_tool'           => 'Soporte de ayuda',
            'title'               => 'Mis últimos pagos',
            'desc'                => 'Encuentre aquí un historial de todas las compras que ha realizado.',
            'title_draw'          => 'Personalice su insignia',
            'draw_desc'           => 'Personaliza tu placa a cambio de tus diamantes.',
            'draw_tool'           => 'Herramientas de dibujo',
            'add_color'           => 'Añadir un color',
            'draw_reset'          => 'Puesta a cero',
            'buy_badge'           => 'Comprar mi insignia',
            'buy_on'              => 'Compre el',
            'erase'               => 'Shift + Click para eliminar'
        ),
        'shop_offers' => array (
            'back'              => 'Volver',
            'buymethods'        => 'Forma de pago',
            'for'               => 'para',
            'or_lower'          => 'o menos',
            'loading_methods'   => 'Actualmente se están cargando los métodos de pago...',
            'store'             => 'Tienda'
        ),
        'shop' => array (
            'title'             => 'Seleccione un producto',
            'country'           => 'País:',
            'netherlands'       => 'Países Bajos',
            'belgium'           => 'Bélgica',
            'super_rare'        => 'Super raro',
            'more_information'  => 'Más información',
            'content_1'         => '¿Tiene una pregunta o un problema con una compra?',
            'content_2'         => 'No dude en ponerse en contacto con el servicio de atención al cliente a través de',
            'help_tool'         => 'Apoyo d\'aide',
            'not_logged'        => '¡Maldita sea! No estás conectado.',
            'have_to_login'     => 'Tienes que estar conectado para acceder a la tienda ' . Config::site['shortname'] . '.',
            'click_here'        => 'Haga clic aquí',
            'to_login'          => 'Entra en el sistema.',
            'store'             => 'Tienda',
            'desc'              => 'Aquí puedes comprar diamantes, con dinero real para comprar mobis exclusivos del catálogo.',
            'get'               => 'Usted gana',
            'shop_success'      => 'Sus diamantes han sido añadidos a su cuenta. Si algo va mal, póngase en contacto con nosotros a través de nuestro centro de ayuda',
            'shop_error'        => 'Se ha producido un error y la compra ha sido cancelada. ¿No puede completar su compra? Póngase en contacto con nosotros a través de nuestro centro de ayuda.',
            'help'              => 'Centro de ayuda',
            'back'              => 'Volver',
            'waiting'           => 'Carga en curso...'
        ),
        'games_ranking' => array(
            'title'             => 'Clasificaciones',
            'desc'              => '¡Aquí encontrarás las mejores puntuaciones de nuestros jugadores!',
            'achievements'      => 'Ganar-ganar',
            'online'            => 'Tiempo en línea'
        )
    ),
    'core' => array (
        'belcredits' => 'diamants',
        'hotelapi' => array (
            'disabled' => 'No se puede procesar la solicitud porque esta función está desactivada en este momento.'
        ),
        'dialog' => array (
            'logged_in'             => 'Maldita sea, para llegar a esta página tienes que estar conectado.',
            'not_logged_in'         => 'No es necesario estar conectado para acceder a esta página.'
        ),
        'notification' => array (
            'message_placed'        => 'Su mensaje ha sido publicado.',
            'message_deleted'       => 'Tu mensaje ha sido borrado.',
            'invisible'             => 'Esto es ahora invisible.',
            'profile_invisible'     => 'El jugador de ' . Config::site['shortname'] . ' ha hecho invisible su perfil.',
            'profile_notfound'      => 'Desgraciadamente... no pudimos encontrar el ' . Config::site['shortname'] . '!',
            'no_permissions'        => 'No tienes permiso para hacerlo.',
            'already_liked'         => '¡Ya te ha gustado esto!',
            'liked'                 => '¡Te gusta esto!',
            'unliked'               => '¡Como si se hubiera borrado con éxito!',
            'banned_1'              => 'Has sido baneado por romper las reglas d\' ' . Config::site['shortname'] . ':',
            'banned_2'              => 'Su exclusión terminará:',
            'something_wrong'       => 'Parece que algo ha ido mal. Por favor, inténtalo de nuevo..',
            'room_not_exists'       => '¡Este lugar no existe!',
            'staff_received'        => 'Gracias. ¡El sitio ' . Config::site['shortname'] . ' por parte de los miembros del equipo del personal!',
            'not_enough_belcredits' => 'No tienes suficientes puntos. GAMERS.',
            'not_enough_points'     => 'No tienes suficientes diamantes..',
            'topic_closed'          => 'No se puede responder a un tema cerrado.',
            'post_not_allowed'      => 'No tienes permiso para crear un mensaje en este foro.',
            'draw_badge_uploaded'   => 'Su insignia ha sido enviada con éxito y está lista para ser revisada.'
        ),
        'pattern' => array (
            'can_be'                => 'Máximo a',
            'must_be'               => 'Un mínimo de',
            'characters_long'       => 'demasiados personajes.',
            'invalid'               => 'No cumple los requisitos!',
            'invalid_characters'    => 'Contiene caracteres no válidos!',
            'is_required'           => 'Rellena todos los campos!',
            'not_same'              => 'no coinciden',
            'captcha'               => '¡Recaptcha entrada incorrecta!',
            'numeric'               => '¡Debe contener números!',
            'email'                 => 'No es válido.'
        ),
        'title' => array (
            'home'              => 'Hacer amigos, divertirse, conocerse',
            'lost'              => 'Página no encontrada.',
            'registration'      => 'Regístrese gratuitamente.',
            'hotel'             => 'Hotel',

            'casino'            => array (
                'rules'    => 'Regras do casino',
            ),

            'password' => array (
                'claim'    => '¿Ha olvidado su contraseña?',
                'reset'    => 'Cambiar contraseña',
            ),
            'settings' => array (
                'index'         => 'Mis preferencias',
                'password'      => 'Cambiar mi contraseña',
                'email'         => 'Cambiar mi dirección de correo electrónico',
                'namechange'    => 'Cambiar mi nombre de usuario ' . Config::site['shortname'] . '.'
            ),
            'community' => array (
                'index'     => 'Comunidad',
                'photos'    => 'Fotos',
                'staff'     => 'Equipo',
                'team'      => 'Teams',
                'fansites'  => 'Sitio de fanss',
                'value'     => 'Mercado de catálogos',
                'forum'     => 'Mis bandas'
            ),
            'games' => array (
                'ranking'   => 'Clasificaciones'
            ),
            'shop' => array (
                'index'     => 'Tienda',
                'history'   => 'Historial de compras',
                'club'      => 'Club VIP',
                'badge'     => 'Personalice su insignia'
            ),
            'help' => array (
                'index'     => 'Soporte',
                'requests'  => 'Ticket de ayuda',
                'new'       => 'Abrir un nuevo ticket'
            ),
            'jobs' => array (
                'index'     => 'Contrataciones',
                'apply'     => 'Responder a las solicitudess'
            )
        )
    ),
    'asn' => array(
        'login'                     => 'La conexión con una VPN no está permitida.',
        'registerd'                 => 'No se puede registrar utilizando una VPN.'
    ),
    'login' => array (
        'invalid_password'          => 'Contraseña inválida.',
        'invalid_pincode'           => 'Este código PIN no coincide con los datos anteriores.',
        'fill_in_pincode'           => 'Introduzca su código PIN para acceder a su cuenta.'
    ),
    'register' => array (
        'username_invalid'          =>  'Este nick no respeta el formato de las normas.',
        'username_exists'           =>  'Este apodo ya está en uso :-(',
        'email_exists'              =>  'Esta dirección de correo electrónico ya está en uso :-(',
        'too_many_accounts'         => 'Demasiadas cuentas registradas bajo esta dirección IP :-('
    ),
    'claim' => array (
        'invalid_email'             => 'Esta dirección de correo electrónico no corresponde a ' . Config::site['shortname'] . ' ID.',
        'invalid_link'              => 'Este enlace ha caducado. Por favor, vuelva a solicitar una nueva contraseña.',
        'send_link'                 => 'Acabamos de enviarle un enlace de confirmación por correo electrónico. ¿No has recibido nada? Por favor, compruebe y actualice su correo electrónico.',
        'password_changed'          => 'Su contraseña ha sido cambiada con éxito. Ya puedes volver a conectarte.',

        'email'  => array (
            'title'                 => 'Cambia tu contraseña.'
        )
    ),
    'settings' => array (
        'email_saved'               => 'Su dirección de correo electrónico ha sido modificada con éxito.',
        'pincode_saved'             => 'Su nuevo código PIN se ha guardado, ahora debe iniciar la sesión de nuevo. Hasta pronto. :)',
        'password_saved'            => 'Su contraseña ha sido cambiada con éxito. Ahora debe iniciar la sesión de nuevo. Hasta pronto. :)',
        'preferences_saved'         => '¡Tus preferencias han sido guardadas!',
        'current_password_invalid'  => 'La contraseña que has introducido no coincide con los datos de tu cuenta ' . Config::site['shortname'] . ' ID.',
        'choose_new_username'       => 'Introduzca un nuevo nombre de usuario.',
        'choose_new_pincode'        => 'Introduzca un nuevo código PIN.',
        'user_is_active'            => '¡Este nombre de usuario ' . Config::site['shortname'] . ' puede estar todavía activo!',
        'user_not_exists'           => '¡Este nombre de usuario ' . Config::site['shortname'] . ' está disponible y aún no existe!',
        'name_change_saved'         => 'Su nombre de usuario ha sido cambiado, 5 diamantes acaban de ser cargados en su cuenta. Ahora debes volver a conectarte.',
        'invalid_secretcode'        => 'La autenticación de Google a través del código SECRET es incorrecta.',
        'enabled_secretcode'        => 'Método de autenticação definido! Precisa de voltar a entrar... até breve!',
        'disabled_secretcode'       => 'Método de autenticación desactivado!'
    ),
    'rcon' => array (
        'exception'                 => 'RCON no puede proceder porque el emulador está apagado.'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'   => '¡La transacción ha fallado!',
            'invalid_code'          => 'El código introducido es incorrecto.',
            'success_1'             => 'Gracias por su compra. Acaba de recibir',
            'success_2'             => '¡PUNTOS DE JUGADOR GANADOS!'
        ),
        'club' => array (
            'already_vip'           => 'Usted es un miembro permanente de la ' . Config::site['shortname'] . ' Club.',
            'purchase_success'      => 'Enhorabuena. Ahora es usted miembro de la ' . Config::site['shortname'] . ' Club durante 31 días.'

        ),
        'marketplace' => array(
            'expired'               => 'La venta de este mobi ha caducado, ¡no es posible canjear este mobi en este momento!',
            'purchased'             => 'Este mobi ha sido comprado con éxito y ahora está en su inventario.',
            'regards'               => '¡Tu mobi ha sido tomado en cuenta! Atentamente, ' . Config::site['shortname']
        )
    ),
    'help' => array (
        'ticket_created'            => 'Su billete ha sido procesado. Ver la lista de mis entradas relativas a mis solicitudes de ayuda.',
        'ticket_received'           => 'Un miembro del personal ha respondido a su ticket. Por favor, vaya a su lista de entradas para ver la respuesta.',
        'already_open'              => ' Todavía tienes un billete abierto. Cuando su ticket esté cerrado, podrá vol',
        'no_answer_yet'             => 'Sólo puede responder una vez que un miembro del personal le haya respondido',
    ),
    'forum' => array (
        'is_sticky'                 => '¡Pegatina actualizada!!',
        'is_closed'                 => '¡Estado del tema actualizado!'
    ),

    /*     Housekeeping     */
    'housekeeping' => array (
        'base' => array(
            'dashboard_header_title'    => 'Tablero de mandos'
        ),
        'javascript' => array(
            'dashboard_table_username'  => 'Pseudo'
        )
    )
);
