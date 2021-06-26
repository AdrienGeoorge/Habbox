<?php
use App\Config;

$GLOBALS['language'] = array (
    'website' => array (
        /*     App/View/base.html     */
        'base' => array(
            'nav_home'              => 'Accueil',

            'nav_community'         => 'Communauté',
            'nav_news'              => 'Nouveautés',
            'nav_jobs'              => 'Recrutements',
            'nav_photos'            => 'Photos',
            'nav_staff'             => 'Équipe',
            'nav_team'              => 'Équipe secondaire',
            'nav_exchange'          => 'Économie',

            'nav_shop'              => 'Boutique',
            'nav_buy_points'        => 'Achat de diamants',
            'nav_buy_club'          => 'Acheter le VIP Club',
            'nav_purchasehistory'   => 'Mes derniers achats',
            'nav_changename'        => 'Changer mon pseudo',
            'nav_drawyourbadge'     => 'Faire mon badge',

            'nav_highscores'        => 'Classements',

            'nav_forum'             => 'Mes groupes',

            'nav_helptool'          => 'Centre d\'aide',
            'nav_helptickets'       => 'Mes tickets',

            'nav_housekeeping'      => 'Administration',

            'close'                 => 'Fermer',
            'cookies'               => 'Habbox utilise ses propres cookies afin de vous garantir le meilleur service avec un contenu qui correspond au mieux. Si tu navigues sur notre site web, tu dois accepter notre politique en matière de cookies.',
            'read_more'             => 'Lire plus',
            'thanks_for_playing'    => 'Merci d\'avoir joué sur',
            'made_with_love'        => 'a été conçu avec beaucoup d\'amour',
            'credits'               => 'Merci à Raizer et Metus',
            'and_all'               => 'Ainsi qu\'à tous les utilisateurs d\'Habbox',

            'login_name'            => 'Pseudo',
            'login_password'        => 'Mot de passe',
            'login_save_data'       => 'Se souvenir de moi',
            'login_lost_password'   => 'Mot de passe oublié ?',

            'report_message'        => 'Rapporte ce message',
            'report_certainty'      => 'Tu es sur le point de signaler ce message. Es-tu vraiment sur de vouloir rapporter ce message?',
            'report_inappropriate'  => 'Oui, je juge cela inapproprié !',

            'user_to'               => 'Habbo Hôtel',
            'user_profile'          => 'Mon profil',
            'user_settings'         => 'Paramètres',
            'user_stats'            => 'Mes statistiques',
            'user_logout'           => 'Déconnexion',
            'user_hotel'            => 'Hôtel',

            'header_slogan'         => 'Un monde incroyable s\'ouvre devant tes yeux !',
            'header_slogan2'        => 'Rejoins-nous et fais-toi de nouveaux amis !',
            'header_login'          => 'Connexion',
            'header_register'       => 'S\'inscrire',
            'header_to'             => 'Hôtel',
            'search'                => 'Rechercher...',

            'footer_helptool'       => 'Centre d\'aide',
            'footer_rules'          => 'Le règlement d\'' . Config::site['shortname'],
            'footer_terms'          => 'Les conditions d\'utilisation',
            'footer_privacy'        => 'Charte de protection des données personnelles',
            'footer_cookies'        => 'Politique des cookies',
            'footer_guide'          => 'Le guide des parents'
        ),

        /*     public/assets/js/web     */
        'javascript' => array(
            'web_customforms_markedfields'                  => 'Tous les champs marqués d\'une * sont obligatoires.',
            'web_customforms_loadingform'                   => 'Formulaire de changement...',
            'web_customforms_next'                          => 'Suivant',
            'web_customforms_close'                         => 'Fermer',
            'web_customforms_participation'                 => 'Merci pour ta participation!',
            'web_customforms_sent'                          => 'Tes réponses ont été envoyés et seront analysés par un des membres de l\'équipe qui a procédé à l\'ouverture de l\'événement.',
            'web_customforms_answer'                        => 'Mes réponses',

            'web_dialog_cancel'                             => 'Abandonner',
            'web_dialog_validate'                           => 'Valider',
            'web_dialog_confirm'                            => 'Confirmer mon choix',

            'web_hotel_backto'                              => 'Retourner sur ' . Config::site['shortname'] . ' Hôtel',

            'web_fill_pincode'                              => 'Entre ton code PIN que tu as spécifié lors de la création à la sécurisation de ton compte sur Habbox. Bien, si jamais tu as oublié ton code PIN? Merci de contacter le support via le bouton ' . Config::site['shortname'] . ' Support Aide',
            'web_twostep'                                   => 'Autorisation en deux étapes!',
            'web_login'                                     => 'Tu dois être connecté pour rapporter ce message!',
            'web_loggedout'                                 => 'Me déconnecter :(',

            'web_notifications_success'                     => 'Succès!',
            'web_notifications_error'                       => 'Erreur!',
            'web_notifications_info'                        => 'Information!',

            'web_page_article_login'                        => 'Tu dois être connecté pour poster un commentaire!',

            'web_page_community_photos_login'               => 'Tu dois être connecté pour aimer ces photos!',
            'web_page_community_photos_loggedout'           => 'Me déconnecter :(',

            'web_page_forum_change'                         => 'Changer',
            'web_page_forum_cancel'                         => 'Abandonner',
            'web_page_forum_oops'                           => 'Mince...',
            'web_page_forum_topic_closed'                   => 'Ce sujet est clos et tu ne peux y répondre pour l\'instant.',
            'web_page_forum_login_toreact'                  => 'Pour répondre, tu dois être connecté!',
            'web_page_forum_login_tolike'                   => 'Tu dois être connecté pour aimer ce post!',
            'web_page_forum_loggedout'                      => 'Me déconnecter :(',

            'web_page_profile_login'                        => 'Tu dois être connecté pour aimer ces photos!',
            'web_page_profile_loggedout'                    => 'Me déconnecter :(',

            'web_page_settings_namechange_request'          => 'Requête',
            'web_page_settings_namechange_not_available'    => 'Indisponible',
            'web_page_settings_namechange_choose_name'      => 'Choisir un pseudo',

            'web_page_settings_verification_oops'           => 'Mince...',
            'web_page_settings_verification_fill_password'  => 'Entre ton mot de passe!',
            'web_page_settings_verification_2fa_on'         => 'L\'authentification Google est actuellement configuré sur ton compte. Pour utiliser une autre méthode de vérification, tu dois d\'abord retirer ton ancienne méthode de vérification!',
            'web_page_settings_verification_2fa_secretkey'  => 'As-tu scanné ton QR code sur ton mobile? Entre ensuite la clé secrète pour sécuriser ton compte!',
            'web_page_settings_verification_2fa_authcode'   => 'Authentication code',
            'web_page_settings_verification_pincode_on'     => 'You currently have a pin code set on your account. To use another verification method you first have to remove your old verification!',
            'web_page_settings_verification_2fa_off'        => 'Pour désactiver l\'authentification Google, tu dois saisir ton code secret via notre générateur.',
            'web_page_settings_verification_pincode_off'    => 'Pour désactiver ton code PIN, tu dois saisir ton code PIN actuel.',
            'web_page_settings_verification_pincode'        => 'Ton code PIN',
            'web_page_settings_verification_switch'         => 'Sélectionne le bouton de choix d\'authentification afin de choisir la méthode que tu préfères pour sécuriser ton compte!',

            'web_page_shop_offers_neosurf_name'             => 'Neosurf',
            'web_page_shop_offers_neosurf_description'      => 'Paye facilement avec Neosurf pour acheter des Diamants, tu seras ensuite automatiquement crédité de points Diamants selon le montant que tu auras choisi.',
            'web_page_shop_offers_neosurf_dialog'           => 'Entre ton adresse mail Neosurf ci-dessous pour continuer.',
            'web_page_shop_offers_paypal_name'              => 'Paypal',
            'web_page_shop_offers_paypal_description'       => 'Paye facilement avec Paypal pour acheter des Diamants, tu seras ensuite automatiquement crédité de Diamants selon le montant que tu auras choisi.',
            'web_page_shop_offers_paypal_dialog'            => 'Entre ton adresse mail Paypal ci-dessous pour continuer.',
            'web_page_shop_offers_sms_name'                 => 'SMS',
            'web_page_shop_offers_sms_description'          => 'Envoi le code par SMS pour recevoir tes Diamants.',
            'web_page_shop_offers_sms_dialog'               => 'Tape le code reçu par SMS ci-dessous afin de recevoir tes Diamants.',
            'web_page_shop_offers_audiotel_name'            => 'Audiotel',
            'web_page_shop_offers_audiotel_description'     => 'Compose et appelle ce numéro une ou plusieurs fois afin de recevoir tes Diamants selon le montant que tu auras choisi.',
            'web_page_shop_offers_audiotel_dialog'          => 'Entre ci-cessous le code reçu lors de l\'appel pour recevoir tes Diamants.',
            'web_page_shop_offers_pay_with'                 => 'Payer avec',
            'web_page_shop_offers_points_for'               => 'Points Diamants pour',
            'web_page_shop_offers_get_code'                 => 'Obtenir un code pour avoir des Diamants',
            'web_page_shop_offers_fill_code'                => 'Entre ton code reçu pour obtenir les Diamants',
            'web_page_shop_offers_fill_code_desc'           => 'Entre ton code ci-dessous pour recevoir tes Diamants immédiatement!',
            'web_page_shop_offers_submit'                   => 'Acheter',
            'web_page_shop_offers_success'                  => 'Achat effectué avec succès!',
            'web_page_shop_offers_received'                 => 'Merci pour ton achat. Tu as désormais',
            'web_page_shop_offers_received2'                => 'Points Diamants.',
            'web_page_shop_offers_close'                    => 'Fermer',
            'web_page_shop_offers_failed'                   => 'Echec de l\'achat!',
            'web_page_shop_offers_failed_desc'              => 'Ton achat a échoué. Merci de vouloir réessayer ou contacte-nous via notre support d\'aide.',
            'web_page_shop_offers_back'                     => 'Retour',
            'web_page_shop_offers_no_card'                  => 'Si tu ne possèdes pas de carte prépayée Neosurf, tu peux t\'en procurer via le site de Neosurf ou dans un point de vente chez le buraliste le plus proche de chez toi!',
            'web_page_shop_offers_no_card2'                 => 'Points de vente',
            'web_page_shop_offers_to'                       => 'Pour',
            'web_page_shop_offers_buy_code'                 => 'Acheter un code',
            'web_page_hotel_loading'                        => 'est en cours de chargement...',
            'web_page_hotel_sometinhg_wrong_1'              => 'Mince, quelque chose semble ne pas avoir fonctionné!',
            'web_page_hotel_sometinhg_wrong_2'              => 'Rafraîchis la page',
            'web_page_hotel_sometinhg_wrong_3'              => 'Ou tu peux créer un ticket via le Support Aide',
            'web_page_hotel_welcome_at'                     => 'Bienvenue sur',
            'web_page_hotel_soon'                           => 'Bois un verre, l\'hôtel est bientôt prêt à s\'ouvrir devant tes yeux...',
            'web_hotel_active_flash_1'                      => 'Tu y es presque ' . Config::site['shortname'] .'!',
            'web_hotel_active_flash_2'                      => 'Clique-ici',
            'web_hotel_active_flash_3'                      => 'puis clique sur le côté à gauche pour autoriser l\'activation de flash player.',

        ),

        /*     App/View/Community     */
        'article' => array (
            'reactions'                 => 'Commentaires',
            'reactions_empty'           => 'Pas de commentaires pour le moment.',
            'reactions_fill'            => 'Entre ton commentaire ici...',
            'reactions_post'            => 'Poster',
            'latest_news'               => 'Derniers articles',
            'reaction_hidden_yes'       => 'Commentaire invisible!',
            'reaction_hidden_no'        => 'Commentaire de nouveau visible!',
            'forbidden_words'           => 'Ton commentaire possède des mots manquants!',
        ),
        'forum' => array (
            /*  Forum/index.html  */
            'index_subject'             => 'Intitulé du sujet',
            'index_topics'              => 'Sujets',
            'index_latest_topic'        => 'Dernier sujet',
            'index_empty'               => 'Aucun sujet',
            'index_latest_activities'   => 'Dernière activité',
            'index_by'                  => 'par',

            /*  Forum/category.html  */
            'category_new_topic'        => 'Nouveau sujet',
            'category_back'             => 'Retour',
            'category_topics'           => 'Sujets',
            'category_posts'            => 'Posts',
            'category_latest_reacts'    => 'Derniers commentaires',
            'category_topic_by'         => 'Par',
            'category_no_reacts'        => 'Pas de commentaires',
            'category_latest_react_by'  => 'Dernier commentaire rédigé par',
            'category_create_topic'     => 'Créer un nouveau sujet',
            'category_subject'          => 'Sujet',
            'category_description'      => 'Description',
            'category_create_button'    => 'Créer un nouveau sujet',
            'category_or'               => 'ou',
            'category_cancel'           => 'retour',

            /*  Forum/topic.html  */
            'topic_react'               => 'Réagir',
            'topic_close'               => 'Fermer',
            'topic_reopen'              => 'Réouverture',
            'topic_since'               => 'Depuis le:',
            'topic_posts'               => 'Posté le:',
            'topic_topic'               => 'Sujet:',
            'topic_reaction'            => 'Commentaire rédigé le:',
            'topic_closed'              => 'Pay attention! This topic is closed, do you disagree? Then contact us via the',
            'topic_helptool'            => 'helptool',
            'topic_and'                 => 'et',
            'topic_likes_1'             => 'D\'autres joueurs aiment ça!',
            'topic_likes_2'             => 'Aiment ça!',
            'topic_likes_3'             => 'Aime ça!'
        ),

        /*     App/View/Community     */
        'community_photos' => array (
            'by'          => 'Par',
            'photos_by'   => 'Photos\'s prise par',
            'photos_desc' => 'Voir les dernières photos prises par',
            'load_more'   => 'Voir plus de photos'
        ),
        'community_staff' => array (
            'title'       => 'Comment devenir membre de l\'équipe sur ' . Config::site['shortname'] . ' ?',
            'desc'        => 'Notre équipe est présente pour vous aider et vous guider dans l\'hôtel si besoin afin de vous offrir la meilleure expérience de jeu possible!',
            'content_1'   => 'Evidemment, tout le monde rêve de devenir staff, mais malheureusement ce n\'est pas donné à tout le monde. Pour devenir staff un jour sur ' . Config::site['shortname'] . '  tu devras postuler sur la page recrutement du site.',
            'content_2'   => 'Cela sera possible lorsque des places seront vacantes, nous t\'invitons à lire nos articles régulièrement afin de rester à l\'affut concernant la période de recrutement.',
            'no_users'    => 'Il n\'y a personne dans cette catégorie'
        ),
        'community_value' => array (
            'title_header'      => 'Marché des mobis du catalogue',
            'decs_header'       => 'Tous les mobis exclusifs à des prix exceptionnels que tu peux acheter avec des crédits se trouvent ici!',
            'furni_name'        => 'Nom du mobi',
            'furni_type'        => 'Type',
            'furni_costs'       => 'Prix actuel',
            'furni_amount'      => 'En vente',
            'furni_value'       => 'Ancien prix',
            'furni_rate'        => 'Taux',
            'looking_for'       => 'Je cherche..',
            'seller'            => 'Vendu par',
            'price'             => 'Price',
            'nav_my'            => 'Mon marché',
            'nav_shop'          => 'Le marché des mobis',
            'nav_catalogue'     => 'Catalogue',
            'marketplace_desc'  => 'Les vendeurs de ' . Config::site['shortname'] . ' Hôtel vous propose la vente de leur mobis exclusifs en échange de crédits. Peut-être que tu trouveras ici des mobis introuvables dans le catalogue et que tu aimerais acheter!'
        ),
        /*     App/View/Games     */
        'games_ranking' => array (
            'username' => 'name'
        ),

        /*     App/View/Help     */
        'help' => array (
            /*  Help/help.html  */
            'help_title'                => 'Foire aux questions',
            'help_label'                => 'Retrouve toutes les réponses à tes questions ici!',
            'help_other_questions'      => 'Autres questions',
            'help_content_1'            => 'Tu ne trouves pas de réponse à ta question?',
            'help_contact'              => 'Contacte-nous',
            'title'                     => 'Support d\'aide',
            'desc'                      => 'Tu peux retrouver ici toutes les réponses à tes questions. Si jamais tu ne trouves pas une réponse à ta question, n\'hésite pas à nous contacter.',

            /*  Help/request.html  */
            'request_closed'            => 'FERMÉE',
            'request_on'                => 'Ouverte:',
            'request_ticket_amount'     => 'Nombre de tickets:',
            'request_react_on'          => 'Réagir sur:',
            'request_react'             => 'Réagir dès maintenant',
            'request_description'       => 'Description',
            'request_react_on_ticket'   => 'Répondre au ticket',
            'request_contact'           => 'Contact ' . Config::site['shortname'],
            'request_contact_help'      => 'Tu peux nous contacter en ouvrant un nouveau ticket.',
            'request_new_ticket'        => 'Nouveau ticket',
            'request_subject'           => 'Sujet',
            'request_type'              => 'Type',
            'request_status'            => 'Ticket ouvert le',
            'request_in_treatment'      => 'En cours de traitement',
            'request_open'              => 'Ouverte',
            'request_closed'            => 'Fermée'
        ),
        'help_new' => array (
            'title'         => 'Mes tickets',
            'subject'       => 'Sujet',
            'description'   => 'Description',
            'open_ticket'   => 'Ouvrir un ticket'
        ),

        /*     App/View/Home     */
        'home' => array (
            'to'                      => 'Entrer dans l\'hôtel',
            'friends_online'          => 'Amis en ligne',
            'now_in'                  => 'Actuellement dans',
            'latest_news'             => 'Derniers articles',
            'latest_facts'            => 'Les dernières nouveautés concernant ' . Config::site['shortname'] . '!',
            'popular_rooms'           => 'Apparts populaires',
            'popular_rooms_label'     => 'Les apparts les plus tendances sur '. Config::site['shortname'] . '!',
            'popular_no_rooms'        => 'Il n\'y a personne à l\'intérieur de l\'hôtel pour le moment!',
            'goto_room'               => 'Rejoindre l\'appart',
            'popular_groups'          => 'Groupes populaires',
            'popular_groups_label'    => 'Quel groupe veux-tu rejoindre?',
            'popular_no_groups'       => 'Aucun groupe n\'a été crée pour le moment!',
            'load_news'               => 'En savoir plus',
            'user_of_the_week'        =>  Config::site['shortname'] . ' élu membre de la semaine',
            'user_of_the_week_label'  => 'Membre de la semaine'
        ),
        'lost' => array (
            'page_not_found'          => 'Page introuvable!',
            'page_content_1'          => 'Désolé, mais la page que tu cherches n\'existe pas.',
            'page_content_2'          => 'Vérifie de nouveau si tu te trouves sur le bon lien URL. Si tu reviens-ici (Bon retour parmi-nous!). Retourne ensuite d\'où tu viens avec le bouton retour si tu le souhaites!',
            'sidebar_title'           => 'Peut-être que tu cherches...',
            'sidebar_stats'           => 'L\'appart d\'un de tes amis?',
            'sidebar_stats_label_1'   => 'Peut être que celui-ci est déjà aux',
            'sidebar_stats_label_2'   => 'Classements',
            'sidebar_rooms'           => 'Apparts populaires?',
            'sidebar_rooms_label_1'   => 'Explore-le',
            'sidebar_rooms_label_2'   => 'Navigateur',
            'sidebar_else'            => 'J\'ai perdu mes chaussons!',
            'sidebar_else_label'      => 'Il faut vraiment chercher plus loin! :-)'
        ),
        'profile' => array (
            'overlay_search'        => 'Qui cherches-tu?',
            'since'                 => 'Membre depuis le',
            'currently'             => 'Actuellement',
            'never_online'          => 'N\'est pas en ligne',
            'last_visit'            => 'Dernière visite le',
            'guestbook_title'       => 'Livre d\'or',
            'guestbook_label'       => 'Tu as oublié quelque chose?',
            'guestbook_input'       => 'Que fais-tu?',
            'guestbook_input_1'     => 'Que veux-tu?',
            'guestbook_input_2'     => 'Là tout de suite?',
            'guestbook_load_more'   => 'Lire plus de messages',
            'badges_title'          => 'Badges',
            'badges_label'          => 'Badges aléatoire que je peux porter',
            'badges_empty'          => 'N\'as pas encore de badge',
            'friends_title'         => 'Amis',
            'friends_label'         => 'Amis au hasard qui figure sur ma liste d\'amis',
            'friends_empty'         => 'N\'as pas encore d\'amis',
            'groups_title'          => 'Groupes',
            'groups_label'          => 'Les groupes dont je suis membre',
            'groups_empty'          => 'N\'as pas encore de groupes',
            'rooms_title'           => 'Appart',
            'rooms_label'           => 'Mes derniers apparts crées',
            'rooms_empty'           => 'N\'as pas encore créer d\'apparts',
            'photos_title'          => 'Photos',
            'photos_label'          => 'Désirerais-tu prendre une photo avec moi?',
            'photos_empty'          => 'N\'as pas pris de photos',
            'title'                 => 'Profil'
        ),
        'registration' => array (
            'title'                 => 'Avant, nous avons besoin de quelques informations!',
            'email'                 => 'Adresse mail',
            'email_fill'            => 'Renseigne ton adresse mail ici...',
            'email_help'            => 'Nous aurons besoin de ces informations pour restaurer ton compte en cas de perte d\'accès.',
            'password'              => 'Mot de passe',
            'password_fill'         => 'Mot de passe...',
            'password_repeat'       => 'Repéter le mot de passe',
            'password_repeat_fill'  => 'Repéter le mot de passe...',
            'password_help_1'       => 'Ton mot de passe doit contenir au moins six caractères ainsi que des lettres et des chiffres.',
            'password_help_2'       => 'Votre mot de passe doit comporter au moins 6 caractères et contenir des lettres et des chiffres. Assures-toi que ton mot de passe est bien différent de celui des autres sites Web sur lesquels tu navigues!',
            'birthdate'             => 'Date de naissance',
            'day'                   => 'Jour',
            'month'                 => 'Mois',
            'year'                  => 'Année',
            'birthdate_help'        => 'Nous aurons besoin de ces informations pour restaurer ton compte en cas de perte d\'accès.',
            'found'                 => 'Comment as-tu trouvé ' . Config::site['shortname'] . ' Hotel?',
            'found_choose'          => 'Fais un choix...',
            'found_choose_1'        => 'Via Google',
            'found_choose_2'        => 'Par l\'intermédiaire d\'un ami',
            'found_choose_3'        => 'Par l\'intermédiaire d\' un autre jeu',
            'found_choose_4'        => 'Via Facebook',
            'found_choose_5'        => 'Autres',
            'create_user'           => 'Créer ton avatar ' . Config::site['shortname'] . '!',
            'username'              => 'Pseudo Habbox',
            'username_fill'         => 'Pseudo...',
            'username_help'         => 'Ton pseudo unique sur ' . Config::site['shortname'] . ' Hôtel.',
            'sex'                   => 'Sexe',
            'male'                  => 'Garçon',
            'female'                => 'Fille',
            'register'              => 'S\'inscrire',
            'header_slogan2'        => 'Rejoins-nous et fais-toi de nouveaux amis !',
            'referral'              => 'Votre parrainage'
        ),
        'stats' => array(
            'title'                 => 'Mes statistiques'
        ),

        /*     App/View/Jobs     */
        'apply' => array (
            'title'               => 'Postule dès maintenant!',
            'content_1'           => 'Merci d\'accorder de l\'intérêt pour ' . Config::site['shortname'] . ' Hotel, nous vous donnerons une réponse dans les meilleurs délais.',
            'content_2'           => 'Essaye de répondre aux questions le plus sincèrement possible.',
            'description'         => 'Description du poste',
            'question_name'       => 'Comment tu t\'appelles?',
            'question_age'        => 'Quel âge as-tu?',
            'question_why'        => 'Pourquoi toi et pas quelqu\'un d\'autre?',
            'question_time'       => 'Combien de temps es-tu en ligne?',
            'question_time_help'  => 'Indique nous les horaires où tu es disponible sur ' . Config::site['shortname'] . ' Hotel.',
            'monday'              => 'Lundi',
            'tuesday'             => 'Mardi',
            'wednesday'           => 'Mercredi',
            'thursday'            => 'Jeudi',
            'friday'              => 'Vendredi',
            'saturday'            => 'Samedi',
            'sunday'              => 'Dimanche',
            'time_to_time'        => 'De X à Y heures',
            'send'                => 'Envoyer ma candidature'
        ),
        'jobs' => array (
            'title'                   => 'Liste des candidatures',
            'applications'            => 'Mes candidatures',
            'available_applications'  => 'Postes vacants',
            'buildteam'               => 'Architectes',
            'buildteam_desc'          => 'Ils sont responsables de la construction des apparts officiels de l\'hôtel.',
            'react'                   => 'Postuler dès maintenant!'
        ),

        /*     App/View/Password     */
        'password_claim' => array (
            'title'                 => 'Mot de passe oublié?',
            'content_1'             => 'Entre ton pseudo ' . Config::site['shortname'] . ' ainsi que ton adresse mail ci-dessous.',
            'content_2'             => 'Tu recevras un mail avec un lien de confirmation afin de pouvoir changer ton mot de passe.',
            'username'              => 'Mon pseudo',
            'email'                 => 'Adresse mail',
            'send'                  => 'Envoyer un mail',
            'wrong_page'            => 'Fausse alerte !',
            'wrong_page_content_1'  => 'Si tu te souviens de ton mot de passe ou que tu as réalisé par accident une demande de mot de passe oublié, tu peux utiliser le lien ci-dessous pour retourner à la page d\'accueil.',
            'back_to_home'          => 'Retour à la page d\'accueil'
        ),
        'password_reset' => array (
            'title'                     => 'Changement de mot de passe',
            'new_password'              => 'Nouveau mot de passe',
            'new_password_fill'         => 'Entrer mon nouveau mot de passe...',
            'new_password_repeat_fill'  => 'Merci de retaper ton mot passe...',
            'change_password'           => 'Changer mon mot de passe'
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'Mes préférences',
            'password'       => 'Change ton  mot de passe',
            'verification'   => 'Set verification',
            'email'          => 'Change ton adresse mail',
            'namechange'     => 'Change ton pseudo',
            'shop_history'   => 'Historique d\'achats'
        ),
        'settings_email' => array (
            'title'           => 'Changement de mon adresse mail',
            'email_title'     => 'Adresse mail actuelle',
            'email_label'     => 'Ton adresse mail est requise pour restaurer ton compte en cas de perte d\'accès.',
            'password_title'  => 'Mot de passe actuel',
            'fill_password'   => 'Entre ton mot de passe...',
            'save'            => 'Sauvegarder'
        ),
        'settings_namechange' => array (
            'title'           => 'Changement de mon pseudo',
            'help_1'          => 'Veux-tu changer ton pseudo pour un autre ? Tu peux ! Cela te coûtera que quelques diamants.',
            'help_2'          => 'seront débités immédiatement après votre demande. Merci de bien réfléchir à votre futur pseudo.',
            'fill_username'   => 'Entre ton nouveau pseudo...',
            'request'         => 'Requête'
        ),
        'settings_password' => array (
            'title'                     => 'Changer mon mot de passe',
            'password_title'            => 'Mot de passe actuel',
            'fill_password'             => 'Entre ton mot de passe actuel...',
            'newpassword_title'         => 'Nouveau mot de passe',
            'fill_newpassword'          => 'Entre ton nouveau mot de passe ici...',
            'fill_newpassword_repeat'   => 'Retape ton nouveau mot de passe encore une fois...',
            'help'                      => 'Ton mot de passe doit contenir au moins six caractères avec des lettres et des chiffres.',
            'save'                      => 'Sauvegarder'
        ),
        'settings_preferences' => array (
            'title'               => 'Mes préférences',
            'follow_title'        => 'Paramètres de suivi - Qui peut me suivre?' ,
            'follow_label'        => 'Je ne veux pas être suivi sur ' . Config::site['shortname'] . '\'s ',
            'friends_title'       => 'Requête d\'amis',
            'friends_label'       => 'Autoriser d\'autres membres à devenir ami avec moi?',
            'room_title'          => 'Invitation dans un appart',
            'room_label'          => 'Je ne veux pas être invité dans d\'autres apparts',
            'hotelalerts_title'   => 'Alerte dans l\'hôtel',
            'hotelalerts_label'   => 'Je ne veux pas recevoir de notifications',
            'chat_title'          => 'Paramètres du tchat',
            'chat_label'          => 'Je veux utiliser l\'ancien tchat',
            'dark_mode'           => 'Souhaitez-vous utiliser le mode sombre?'
        ),
        'settings_verification' => array (
            'title'                 => 'Sécuriser mon compte',
            'help'                  => 'Cette vérification augmente la sécurité de ton compte. Lorsque tu te connecteras, tu devras, en fonction de tes préférences, répondre aux questions de sécurité avec tes réponses que tu auras défini au préalable ou saisir le code généré par l\'application Google.',
            'password_title'        => 'Mot de passe',
            'fill_password'         => 'Entre ton mot de passe actuel...',
            'auth_title'            => 'Vérification en deux étapes',
            'auth_label'            => 'Sécurise ton compte avec la méthode de vérification en deux étapes',
            'method_title'          => 'Méthode de vérification',
            'method_choose'         => 'Choisi ta méthode de vérification...',
            'method_pincode'        => 'Je veux saisir un code PIN.',
            'method_auth_app'       => 'Je veux utiiser l\'authentification via Google 2FA',
            'pincode_title'         => 'Sécurité par code PIN',
            'pincode_label'         => 'Merci de saisir le code PIN de ton choix afin de sécuriser ton compte, cela te garantira une meilleure protection contre les personnes malvaillantes.',
            'fill_pincode'          => 'Entre ton nouveau code PIN ici',
            'generate_auth'         => 'Sécurité via l\'authentification Google 2FA',
            'generate_auth_label'   => 'Cette méthode est plus fiable. Il relie ton compte ' . Config::site['shortname'] . ' account à une application d\'authentification appelée (Google Authenticator) sur ton smartphone. Quand tu devras t\'inscrire, tout ce que tu auras à faire c\'est de rentrer le code généré par Google que tu auras reçu sur ton smartphone grâce à l\'application Google.',
            'link_account'          => 'Lien de ton compte',
            'link_account_label'    => 'Pour lier ton compte, c\'est simple ! Il te suffit de scanner ton QR code via ton application Google puis clique sur enregistrer afin de valider tes modifications.',
            'save'                  => 'Sauvegarder'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'Les avantages du VIP Club',
            'club_buy'            => 'Achète le VIP Club',
            'unlimited'           => 'Illimité',
            'more_information'    => 'Plus d\'informations',
            'content_1'           => 'As-tu une question ou un problème avec un achat?',
            'content_2'           => 'N\'hésite pas à contacter le service client via le bouton Support d\'aide',
            'help_tool'           => 'Support d\'aide',
            'random_club_users'   => 'Random ' . Config::site['shortname'] . ' fait parti des membres du Club',
            'desc'                => 'Ici tu peux adhérer au VIP Club avec des diamants afin de pouvoir acheter des mobis exclusifs et bien d\'autres choses...'
        ),
        'shop_history' => array (
            'buy_history'         => 'Mes achats',
            'product'             => 'Produits',
            'date'                => 'Date',
            'buy_history_empty'   => 'Tu n\'as pas d\'historique d\'achat pour le moment.',
            'buy_club'            => 'Achat du VIP Club',
            'content_1'           => 'As-tu une question ou des soucis pour acheter quelque chose dans la boutique?',
            'content_2'           => 'N\'hésitez pas à contacter le service client via le',
            'help_tool'           => 'Support d\'aide',
            'title'               => 'Mes derniers paiements',
            'desc'                => 'Retrouve ici un historique de tous les achats que tu as effectués.',
            'title_draw'          => 'Personnalise ton badge',
            'draw_desc'           => 'Personnalise ton badge en échange de tes diamants.'
        ),
        'shop_offers' => array (
            'back'              => 'Retour',
            'buymethods'        => 'Méthode de paiement',
            'for'               => 'pour',
            'or_lower'          => 'ou moins',
            'loading_methods'   => 'Les méthodes de paiements sont en cours de chargement...',
            'store'             => 'Boutique'
        ),
        'shop' => array (
            'title'             => 'Sélectionne un produit',
            'country'           => 'Pays:',
            'netherlands'       => 'Pays-Bas',
            'belgium'           => 'Belgique',
            'super_rare'        => 'Super rare',
            'more_information'  => 'Plus d\'informations',
            'content_1'         => 'As-tu une question ou un problème avec un achat?',
            'content_2'         => 'N\'hésites pas à contacter le service client via le',
            'help_tool'         => 'Support d\'aide',
            'not_logged'        => 'Mince! Tu n\'es pas connecté.',
            'have_to_login'     => 'Tu dois être connecté pour atteindre la boutique ' . Config::site['shortname'] . '.',
            'click_here'        => 'Clique-ici',
            'to_login'          => 'Me connecter.',
            'store'             => 'Boutique',
            'desc'              => 'Ici tu peux acheter des diamants, avec de la monnaie réelle afin de pouvoir acheter des mobis exclusifs au catalogue.',
            'get'               => 'Vous gagnez'
        ),
        'games_ranking' => array(
            'title'             => 'Classements',
            'desc'              => 'Tu trouveras ici les meilleurs scores de nos joueurs!',
            'achievements'      => 'Win-win',
            'online'            => 'Temps en ligne'
        )
    ),
    'core' => array (
        'belcredits' => 'Game Points',
        'hotelapi' => array (
            'disabled' => 'Impossible de traiter la demande car cette fonctionnalité est désactivée pour le moment!'
        ),
        'dialog' => array (
            'logged_in'             => 'Mince, pour atteindre cette page, tu dois être connecté!',
            'not_logged_in'         => 'Tu n\'as pas besoin d\'être connecté pour atteindre cette page!'
        ),
        'notification' => array (
            'message_placed'        => 'Ton message a bien été posté!',
            'message_deleted'       => 'Ton message a bien été supprimé!',
            'invisible'             => 'Ceci est désormais invisible!',
            'profile_invisible'     => 'Le joueur sur ' . Config::site['shortname'] . ' a rendu son profil invisible.',
            'profile_notfound'      => 'Unfortunately.. we could not find the ' . Config::site['shortname'] . '!',
            'no_permissions'        => 'Tu n\'as pas la permission de faire cela.',
            'already_liked'         => 'Tu as déjà aimé ceci!',
            'liked'                 => 'Tu aimes ça!',
            'unliked'               => 'Like supprimé avec succès!',
            'banned_1'              => 'Tu as été banni pour non-respects des règles d\' ' . Config::site['shortname'] . ':',
            'banned_2'              => 'Ton exclusion prendra fin:',
            'something_wrong'       => 'Quelque chose semble ne pas avoir fonctionné, merci de bien vouloir réessayer.',
            'room_not_exists'       => 'Cet appart n\'existe pas!',
            'staff_received'        => 'Merci! Le site d\' ' . Config::site['shortname'] . ' par les membres de l\'équipe des staffs!',
            'not_enough_belcredits' => 'Tu n\'as pas assez de points GAMERS.',
            'not_enough_points'     => 'Tu n\'as pas assez de diamants.',
            'topic_closed'          => 'Tu ne peux pas répondre à un sujet clos!',
            'post_not_allowed'      => 'Tu n\'as pas l\'autorisation de créer un article sur ce forum!',
            'draw_badge_uploaded'   => 'Ton badge a été envoyé avec succès et celui-ci est prêt à être examiné!'
        ),
        'pattern' => array (
            'can_be'                => 'Maximum jusqu\'à',
            'must_be'               => 'Minimum de',
            'characters_long'       => 'trop de caractères.',
            'invalid'               => 'Ne répond pas aux exigences!',
            'invalid_characters'    => 'Contient des caractères invalides!',
            'is_required'           => 'Remplis tous les champs!',
            'not_same'              => 'ne correspondent pas',
            'captcha'               => 'Recaptcha saisie incorrecte!',
            'numeric'               => 'Doit contenir des chiffres!',
            'email'                 => 'est invalide!'
        ),
        'title' => array (
            'home'              => 'Se faire des amis, s\'amuser, se faire connaitre',
            'lost'              => 'Page introuvable!',
            'registration'      => 'Inscris-toi gratuitement!',
            'hotel'             => 'Hôtel',

            'password' => array (
                'claim'    => 'Mot de passe oublié?',
                'reset'    => 'Changer mot de passe',
            ),
            'settings' => array (
                'index'         => 'Mes préférences',
                'password'      => 'Changer mon mot de passe',
                'email'         => 'Changer mon adresse mail',
                'namechange'    => 'Changer mon pseudo ' . Config::site['shortname'] . '.'
            ),
            'community' => array (
                'index'     => 'Communauté',
                'photos'    => 'Photo\'s',
                'staff'     => 'Équipe',
                'team'      => 'Teams',
                'fansites'  => 'Site de fans',
                'value'     => 'Marché du catalogue',
                'forum'     => 'Mes groupes'
            ),
            'games' => array (
                'ranking'   => 'Classements'
            ),
            'shop' => array (
                'index'     => 'Boutique',
                'history'   => 'Historique d\'achats',
                'club'      => 'VIP Club'
            ),
            'help' => array (
                'index'     => 'Support d\'aide',
                'requests'  => 'Ticket d\'aide',
                'new'       => 'Ouvrir un nouveau ticket'
            ),
            'jobs' => array (
                'index'     => 'Recrutements',
                'apply'     => 'Répondre aux candidatures'
            )
        )
    ),
    'asn' => array(
        'login'                     => 'La connexion avec un VPN n\'est pas autorisée!',
        'registerd'                 => 'Vous ne pouvez pas vous inscrire en utilisant un VPN!'
    ),
    'login' => array (
        'invalid_password'          => 'Mot de passe invalide.',
        'invalid_pincode'           => 'Ce code PIN ne correspond pas aux données précédentes.' . Config::site['shortname'] . '!',
        'fill_in_pincode'           => 'Entre ton code PIN pour accéder à ton compte !'
    ),
    'register' => array (
        'username_invalid'          =>  Config::site['shortname'] . 'Ce pseudo ne respecte pas le format des ' . Config::site['shortname'] . ' règles.',
        'username_exists'           =>  Config::site['shortname'] . 'Ce pseudo est déjà utilisé :-(',
        'email_exists'              =>  'Cette adresse mail est déjà utilisée :-(',
        'too_many_accounts'         => 'Trop de comptes inscrits sous cette adresse IP :-('
    ),
    'claim' => array (
        'invalid_email'             => 'Cette adresse mail ne correspond pas à ' . Config::site['shortname'] . ' ID.',
        'invalid_link'              => 'Ce lien a expiré. Merci de bien vouloir réitérer ta demande de changement de mot de passe.',
        'send_link'                 => 'Nous venons de t\'envoyer un lien de confirmation par mail! Tu n\'as rien reçu? Vérifie et actualise ta messagerie mail.',
        'password_changed'          => 'Ton mot de passe a été modifié avec succès. Tu peux désormais te reconnecter !',

        'email'  => array (
            'title'                 => 'Change ton mot de passe.'
        )
    ),
    'settings' => array (
        'email_saved'               => 'Ton adresse mail a été modifiée avec succès.',
        'pincode_saved'             => 'Ton nouveau code PIN a bien été enregistré, Tu dois désormais te reconnecter. A bientôt ! :)',
        'password_saved'            => 'Ton mot de passe a bien été modifié. Tu dois désormais te reconnecter. A bientôt ! :)',
        'preferences_saved'         => 'Tes préférences ont bien été sauvegardées!',
        'current_password_invalid'  => 'Le mot de passe saisi ne correspond pas aux données de ton compte ' . Config::site['shortname'] . ' ID.',
        'choose_new_username'       => 'Entrer un nouveau pseudo.',
        'choose_new_pincode'        => 'Entrer un nouveau code PIN.',
        'user_is_active'            => 'Ce nom utilisateur ' . Config::site['shortname'] . ' peut encore être actif!',
        'user_not_exists'           => 'Ce nom utilisateur ' . Config::site['shortname'] . ' est disponible et n\'existe pas encore!',
        'name_change_saved'         => 'Your application will be processed, 50 POINTS GAMERS viennent d\'être débités de ton compte.',
        'invalid_secretcode'        => 'L\'Authentification Google via code SECRET est incorrecte.',
        'enabled_secretcode'        => 'L\'Authentification Google est désormais configurée! Tu dois désormais te reconnecter... A bientôt!',
        'disabled_secretcode'       => 'Méthode d\'authentifcation désactivée!'
    ),
    'rcon' => array (
        'exception'                 => 'RCON ne peut pas procéder parce que l\'émulateur est éteint.'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'   => 'La transaction a échoué!',
            'invalid_code'          => 'Le code saisi est incorrect.',
            'success_1'             => 'Merci pour ton achat ! Tu viens de recevoir',
            'success_2'             => 'POINTS GAMERS OBTENUS!'
        ),
        'club' => array (
            'already_vip'           => 'Tu es un membre permanent du ' . Config::site['shortname'] . ' Club.',
            'purchase_success'      => 'Félicitations ! Tu es désormais membre du ' . Config::site['shortname'] . ' Club pour 31 jours.'

        ),
        'marketplace' => array(
            'expired'               => 'La vente de ce mobi a expirée, il est impossible de racheter ce mobi pour le moment!',
            'purchased'             => 'Ce mobi a été acheté avec succès et celui-ci se trouve désormais dans ton inventaire.',
            'regards'               => 'Ton mobi a bien été pris en compte! Cordialement, ' . Config::site['shortname']
        )
    ),
    'help' => array (
        'ticket_created'            => 'Ton ticket a bien été pris en compte. Afficher la liste de mes tickets concernant mes demandes d\'aide.',
        'ticket_received'           => 'Un membre de l\'équipe des staffs a répondu à votre ticket. Merci de bien vouloir te rendre dans la liste de tes tickets pour voir la réponse.',
        'already_open'              => 'Tu as toujours un ticket en cours! Lorsque ton ticket sera clos, tu pourras de nouveau créer un nouveau ticket.',
        'no_answer_yet'             => 'Tu ne peux répondre qu\'une fois que ' . Config::site['shortname'] . ' staff t\'auras répondu.',
    ),
    'forum' => array (
        'is_sticky'                 => 'Sticker mis à jour!',
        'is_closed'                 => 'Statut du sujet mis à jour!'
    ),

    /*     Housekeeping     */
    'housekeeping' => array (
        'base' => array(
            'dashboard_header_title'    => 'Tableau de bord'
        ),
        'javascript' => array(
            'dashboard_table_username'  => 'Pseudo'
        )
    )
);
