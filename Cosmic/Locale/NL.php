<?php
use App\Config;

$GLOBALS['language'] = array (
    'website' => array (
        /*     App/View/base.html     */
        'base' => array(
            'nav_home'              => 'Home',

            'nav_community'         => 'Gemeenschap',
            'nav_news'              => 'Nieuws',
            'nav_jobs'              => 'Jobs',
            'nav_photos'            => 'Foto\'s',
            'nav_staff'             => 'Personeel',
            'nav_team'              => 'Teams',
            'nav_exchange'          => 'Marketplace',

            'nav_shop'              => 'Winkel',
            'nav_buy_points'        => 'Bel-Credits kopen',
            'nav_buy_club'          =>  Config::site['shortname'] . ' Club kopen',
            'nav_purchasehistory'   => 'Aankoopgeschiedenis',
            'nav_changename'        =>  Config::site['shortname'] . 'naam veranderen',
            'nav_drawyourbadge'     => 'Maak je badge',
          
            'nav_highscores'        => 'Ranglijsten',

            'nav_forum'             => 'Groepen',

            'nav_casino'            => 'Casino',

            'nav_helptool'          => 'Help Tool',
            'nav_helptickets'       => 'Help Tickets',

            'nav_housekeeping'      => 'Housekeeping',

            'close'                 => 'Sluit',
            'cookies'               => 'maakt gebruik van eigen cookies en die van derden om zo een betere service te kunnen verlenen en zorgt er daarnaast voor dat de advertenties beter bij jouw voorkeuren aansluiten. Als je gebruik maakt van onze website ga je akkoord met ons cookie-beleid.',
            'read_more'             => 'Lees meer',
            'thanks_for_playing'    => 'Bedankt voor het spelen van',
            'made_with_love'        => 'is gemaakt met heel veel liefde',
            'credits'               => 'Met dank aan Raizer and Metus',
            'and_all'               => 'En alle',

            'login_title'           => 'Aansluiting',
            'login_name'            => 'Naam',
            'login_password'        => 'Wachtwoord',
            'login_save_data'       => 'Onthoud mijn gegevens',
            'login_lost_password'   => 'Wachtwoord/naam kwijt?',

            'report_message'        => 'Rapporteer dit bericht',
            'report_certainty'      => 'Je staat op het punt om dit bericht te rapporteren. Weet je zeker dat je dit bericht wilt rapporteren?',
            'report_inappropriate'  => 'Ja, dit is ongepast!',

            'user_to'               => 'Naar',
            'user_profile'          => 'Mijn profiel',
            'user_settings'         => 'Instellingen',
            'user_stats'            => 'Mijn statistieken',
            'user_logout'           => 'Ontkoppeling',
            'user_hotel'            => 'Hotel',

            'build_tool'            => 'Bouwgereedschap',
            'build_height'          => 'Hoogte',
            'build_rotation'        => 'Rotatie',
            'build_state'           => 'Status',

            'header_slogan'         => 'Virtuele wereld voor jongeren!',
            'header_slogan2'        => 'Word lid van onze community en maak nieuwe vrienden',
            'header_login'          => 'Inloggen',
            'header_register'       => 'Meld je gratis aan!',
            'header_to'             => 'Naar',
            'search'                => 'Zoeker...',

            'footer_helptool'       => 'Helpcentrum',
            'footer_rules'          => 'De '. Config::site['shortname'] . ' Regels',
            'footer_terms'          => 'Algemene voorwaarden',
            'footer_privacy'        => 'Privacyverklaring',
            'footer_cookies'        => 'Cookie-beleid',
            'footer_guide'          => 'Gids voor ouders',

            'maintenance'           => 'Hotel onderhoud',
            'text_1'                => 'Ons hotel ondergaat momenteel onderhoud terwijl we updates maken. Maak je geen zorgen, we zijn zo terug.',
            'text_2'                => 'U kunt de voortgang van de werkzaamheden volgen of met ons komen discussiëren op onze community discord.',
            'follow_discord'        => 'Word lid van discord',
            'staff'                 => 'Team ruimte',

            'panel_articles'        => 'Artikelen',
            'panel_jobs'            => 'Aanwerving',

            'panel_faq'             => 'Vaak gestelde vragen',
            'panel_tickets'         => 'Mijn tickets',

            'panel_ranking_wealth'  => 'Rijkdom',
            'panel_ranking_games'   => 'Spelletjes',

            'panel_settings'        => 'Mijn voorkeuren',
            'panel_password'        => 'Mijn wachtwoord',
            'panel_verification'    => 'Veilige authenticatie',
            'panel_mail'            => 'Mijn e-mail adres',
            'panel_username'        => 'Verander mijn bijnaam',
            'panel_history'         => 'Mijn aankopen',

            'panel_shop'            => 'Aankoop van diamanten',
            'panel_vip'             => 'VIP Club',
            'panel_badge'           => 'Badges maken',
        ),

        /*     public/assets/js/web     */
        'javascript' => array(
            'web_customforms_markedfields'                  => 'Alle velden gemarkeerd met een * zijn verplicht.',
            'web_customforms_loadingform'                   => 'Laden van het formulier...',
            'web_customforms_next'                          => 'Volgende',
            'web_customforms_close'                         => 'Sluiten',
            'web_customforms_participation'                 => 'Bedankt voor uw deelname!',
            'web_customforms_sent'                          => 'Uw antwoorden zijn verzonden en zullen worden geanalyseerd door de persoon die dit formulier opstart.',
            'web_customforms_answer'                        => 'Uw antwoord',

            'web_dialog_cancel'                             => 'Annuleren',
            'web_dialog_validate'                           => 'Valideren',
            'web_dialog_confirm'                            => 'Bevestig uw keuze',

            'web_forum_first'                               => 'Eerste',
            'web_forum_previous'                            => 'Vorige',
            'web_forum_last'                                => 'Laatste',
            'web_forum_next'                                => 'Volgende',

            'web_hotel_backto'                              => 'Terug naar '. Config::site['shortname'] . ' Hotel',

            'web_fill_pincode'                              => 'Vul de pincode in die je hebt opgegeven tijdens het aanmaken van de extra beveiliging op jouw account. Nou, ik ben deze vergeten? Neem dan contact op via de '. Config::site['shortname'] . ' Helpcentrum',
            'web_twostep'                                   => 'Authenticatie in twee stappen',
            'web_login'                                     => 'Je moet ingelogd zijn om dit bericht te rapporteren!',
            'web_loggedout'                                 => 'Afgesloten :(',

            'web_notifications_success'                     => 'Gelukt!',
            'web_notifications_error'                       => 'Error!',
            'web_notifications_info'                        => 'Informatie!',

            'web_page_article_login'                        => 'Je dient ingelogd te zijn om een reactie te plaatsen!',

            'web_page_community_photos_login'               => 'Je moet verbonden zijn om het leuk te vinden!',
            'web_page_community_photos_loggedout'           => 'Afgesloten :(',

            'web_page_forum_change'                         => 'Aanpassen',
            'web_page_forum_cancel'                         => 'Annuleren',
            'web_page_forum_oops'                           => 'Oeps...',
            'web_page_forum_topic_closed'                   => 'Dit topic is gesloten en er kan niet meer gereageerd worden.',
            'web_page_forum_login_toreact'                  => 'Om te kunnen reageren dien je ingelogd te zijn!',
            'web_page_forum_login_tolike'                   => 'Je moet ingelogd zijn om deze post te kunnen liken!',
            'web_page_forum_loggedout'                      => 'Afgesloten :(',

            'web_page_profile_login'                        => 'Je moet ingelogd zijn om foto\'s te kunnen liken!',
            'web_page_profile_loggedout'                    => 'Afgesloten :(',

            'web_page_settings_namechange_request'          => 'Aanvragen',
            'web_page_settings_namechange_not_available'    => 'Niet beschikbaar',
            'web_page_settings_namechange_choose_name'      => 'Kies '. Config::site['shortname'] . 'naam',

            'web_page_settings_verification_oops'           => 'Oeps...',
            'web_page_settings_verification_fill_password'  => 'Vul je wachtwoord in!',
            'web_page_settings_verification_2fa_on'         => 'Op dit moment staat Google Authenticatie ingesteld op jouw account. Om een ander verificatie middel te gebruiken dien je eerst je oude verificatie te verwijderen!',
            'web_page_settings_verification_2fa_secretkey'  => 'Heb je de QR-code gescand op je mobiel? Vul dan de secretkey in om je account te bevestigen!',
            'web_page_settings_verification_2fa_authcode'   => 'Authenticatie code',
            'web_page_settings_verification_pincode_on'     => 'Op dit moment heb je een pincode ingesteld op jouw account. Om een ander verificatie middel te gebruiken dien je eerst je oude verificatie te verwijderen!',
            'web_page_settings_verification_2fa_off'        => 'Om de Google Authenticatie uit te schakelen vragen wij je om de secretcode uit de generator in te vullen.',
            'web_page_settings_verification_pincode_off'    => 'Om de pincode authenticatie uit te schakelen vragen wij je om je pincode in te vullen.',
            'web_page_settings_verification_pincode'        => 'Pincode code',
            'web_page_settings_verification_switch'         => 'Selecteer de switch button om een authenticatie methode in te schakelen!',

            'web_page_shop_offers_neosurf_name'             => 'Neosurf',
            'web_page_shop_offers_neosurf_description'      => 'Betaal gemakkelijk met Paypal en je Bel-Credits worden direct opgewaardeerd.',
            'web_page_shop_offers_neosurf_dialog'           => 'Vul je onderstaande Paypal e-mailadres in om door te gaan.',
            'web_page_shop_offers_paypal_name'              => 'Paypal',
            'web_page_shop_offers_paypal_description'       => 'Betaal gemakkelijk met Paypal en je Bel-Credits worden direct opgewaardeerd.',
            'web_page_shop_offers_paypal_dialog'            => 'Vul je onderstaande Paypal e-mailadres in om door te gaan.',
            'web_page_shop_offers_sms_name'                 => 'SMS',
            'web_page_shop_offers_sms_description'          => 'Stuur een code per sms en ontvang een Bel-Credits code.',
            'web_page_shop_offers_sms_dialog'               => 'Stuur de onderstaande code in een SMS om een Bel-Credits code te krijgen.',
            'web_page_shop_offers_audiotel_name'            => 'Audiotel',
            'web_page_shop_offers_audiotel_description'     => 'Bel een of meerdere keren een nummer om een Bel-Credits code te krijgen.',
            'web_page_shop_offers_audiotel_dialog'          => 'Bel naar het onderstaande nummer om een Bel-Credits code te krijgen.',
            'web_page_shop_offers_pay_with'                 => 'Betaal via',
            'web_page_shop_offers_points_for'               => 'Diamanten voor',
            'web_page_shop_offers_get_code'                 => 'Krijg een Bel-Credits code',
            'web_page_shop_offers_fill_code'                => 'Vul je Bel-Credits code in',
            'web_page_shop_offers_fill_code_desc'           => 'Vul hieronder je Bel-Credits code in om je Bel-Credits te ontvangen.',
            'web_page_shop_offers_submit'                   => 'Bevestigen',
            'web_page_shop_offers_success'                  => 'Aankoop gelukt!',
            'web_page_shop_offers_received'                 => 'Bedankt voor je aankoop. Je hebt',
            'web_page_shop_offers_received2'                => 'Diamanten.',
            'web_page_shop_offers_close'                    => 'Sluit',
            'web_page_shop_offers_failed'                   => 'Aankoop mislukt!',
            'web_page_shop_offers_failed_desc'              => 'De aankoop is mislukt. Probeer het nog eens of neem contact op via de Helpcentrum.',
            'web_page_shop_offers_back'                     => 'Terug',
            'web_page_shop_offers_no_card'                  => 'Als je geen Neosurf-prepaidkaart hebt, kun je de',
            'web_page_shop_offers_no_card2'                 => 'verkooppunten zien',
            'web_page_shop_offers_to'                       => 'naar',
            'web_page_shop_offers_buy_code'                 => 'Koop toegangscode',
            'web_page_shop_offers_select'                   => 'Kies',
            'web_page_shop_offers_waiting'                  => 'Laden...',
            'web_page_hotel_loading'                        => 'is aan het opstarten...',
            'web_page_hotel_sometinhg_wrong_1'              => 'Oeps, er is iets misgegaan.',
            'web_page_hotel_sometinhg_wrong_2'              => 'Herlaad de pagina',
            'web_page_hotel_sometinhg_wrong_3'              => 'Of neem contact met ons op',
            'web_page_hotel_welcome_at'                     => 'Welkom op',
            'web_page_hotel_soon'                           => 'Dit ziet er goed uit...',
            'web_hotel_active_flash_1'                      => 'Je bent bijna op '. Config::site['shortname'] . '!',
            'web_hotel_active_flash_2'                      => 'Klik hier',
            'web_hotel_active_flash_3'                      => 'en dan links boven op "Toestaan" om Flash Player aan te zetten.',

            'web_save_clipboard'                            => 'Opgeslagen op klembord',
            'web_referral_copied'                           => 'Kopie gemaakt'
        ),

        /*     App/View/Community     */
        'article' => array (
            'title'                  => 'Artikelen',
            'reactions'              => 'Reacties',
            'reactions_empty'        => 'Er zijn nog geen reacties.',
            'reactions_fill'         => 'Typ hier je bericht...',
            'reactions_post'         => 'Plaats',
            'latest_news'            => 'Laatste nieuws',
            'reaction_hidden_yes'    => 'Nieuwsreactie is verborgen gemaakt!',
            'reaction_hidden_no'     => 'Nieuwsreactie is zcithbaar gemaakt!',
            'forbidden_words'        => 'Your message contains forbidden words!',
            'published_on'           => 'Gepubliceerd op'
        ),
        'forum' => array (
          /*  Forum/index.html  */
            'index_subject'             => 'Onderwerp',
            'index_topics'              => 'Topics',
            'index_latest_topic'        => 'Laatste topic',
            'index_empty'               => 'Geen topics',
            'index_latest_activities'   => 'Laatste activiteiten',
            'index_by'                  => 'door',

          /*  Forum/category.html  */
            'category_new_topic'        => 'Nieuw topic',
            'category_back'             => 'Terug',
            'category_topics'           => 'Topics',
            'category_posts'            => 'Posts',
            'category_latest_reacts'    => 'Laatste reacties',
            'category_topic_by'         => 'Door',
            'category_no_reacts'        => 'Geen reacties',
            'category_latest_react_by'  => 'Laatste reactie door',
            'category_create_topic'     => 'Maak nieuw topic',
            'category_subject'          => 'Onderwerp',
            'category_description'      => 'Beschrijving',
            'category_create_button'    => 'Maak topic',
            'category_or'               => 'of',
            'category_cancel'           => 'annuleer',

          /*  Forum/topic.html  */
            'topic_react'               => 'Reageren',
            'topic_close'               => 'Sluiten',
            'topic_reopen'              => 'Heropenen',
            'topic_since'               => 'Sinds:',
            'topic_posts'               => 'Posts:',
            'topic_topic'               => 'Topic:',
            'topic_reaction'            => 'Reactie:',
            'topic_closed'              => 'Let op! Dit topic is gesloten, ben je het hier niet mee eens? Neem dan contact op via de',
            'topic_helptool'            => 'helptool',
            'topic_and'                 => 'en',
            'topic_likes_1'             => 'anderen vinden dit leuk!',
            'topic_likes_2'             => 'vindt dit leuk!',
            'topic_likes_3'             => 'vinden dit leuk!'
        ),
        'community_photos' => array (
            'title'       => 'Foto\'s van de gemeenschap',
            'by'          => 'door',
            'photos_by'   => 'Foto\'s van',
            'photos_desc' => 'Bekijk de leukste momenten in ons Hotel, genomen door',
            'load_more'   => 'Bekijk meer foto\'s'
        ),
        'community_staff' => array (
            'title'       => 'Hoe word ik '. Config::site['shortname'] . ' Personeel?',
            'desc'        => 'Zij vertegenwoordigen het officiele team dat verantwoordelijk is voor de goede werking van het hotel.',
            'content_1'   => 'Natuurlijk droomt iedereen wel van zo\'n plaats als '. Config::site['shortname'] . ' Stafflid, maar helaas is dit niet voor iedereen weggelegd. Om '. Config::site['shortname'] . ' Personeel te kunnen worden moet je solliciteren.',
            'content_2'   => 'Dit kan alleen op momenten wanneer wij vacatures hebben, wanneer we dit hebben, wordt dit vermeldt in het nieuws.',
            'no_users'    => 'Er is niemand in deze categorie'
        ),
        'community_value' => array (
            'title_header'      => 'Ruilwaardes',
            'decs_header'       => 'Alle exclusieve furniture met de waarde hoger dan het type credit vindt je hier!',
            'furni_name'        => 'Meubelnaam',
            'furni_type'        => 'Type',
            'furni_costs'       => 'Waarde',
            'furni_amount'      => 'Aantal',
            'furni_rate'        => 'Koers',
            'looking_for'       => 'Ik ben opzoek naar...',
            'seller'            => 'Verkoper',
            'price'             => 'Prijs',
            'nav_my'            => 'Mijn markplaats',
            'nav_shop'          => 'Marktplaats',
            'nav_catalogue'     => 'Catalogus',
            'marketplace_desc'  => 'Leden van ' . Config::site['shortname'] . ' proberen hier hun items te verkopen op de online marktplaats. Ben jij opzoek naar item waar je al lang naar opzoek was, wellicht vind je hem hier!'
        ),

        /*     App/View/Games     */
        'games_ranking' => array (
            'username' => 'naam'
        ),

        /*     App/View/Help     */
        'help' => array (
          /*  Help/help.html  */
            'help_title'                => 'FAQ',
            'help_label'                => 'Vind hier alle antwoorden over jou vragen!',
            'help_other_questions'      => 'Andere vragen',
            'help_content_1'            => 'Het antwoord op jouw vraag niet gevonden? Aarzel dan niet om contact op te nemen met onze klantenservice zodat we meer informatie kunnen geven.',
            'help_contact'              => 'Contact opnemen',
            'title'                     => 'Helpcentrum',
            'desc'                      => 'Je kunt hier op zoek naar antwoorden op je vragen. Vind je het antwoord op jouw vraag niet, dien dan een hulpverzoek in.',

          /*  Help/request.html  */
            'request_on'                => 'Op:',
            'request_ticket_count'      => 'Aantal tickets:',
            'request_react_on'          => 'Reactie op:',
            'request_react'             => 'Reageren',
            'request_responses'         => 'Antwoorden op het onderwerp',
            'request_description'       => 'Beschrijving',
            'request_react_on_ticket'   => 'Reageer op ticket',
            'request_contact'           => 'Neem contact op met '. Config::site['shortname'],
            'request_contact_help'      => 'U kunt contact met ons opnemen door een nieuw ticket te openen.',
            'request_new_ticket'        => 'Nieuw ticket',
            'request_subject'           => 'Onderwerp',
            'request_type'              => 'Type',
            'request_status'            => 'Ticket geopend',
            'request_in_treatment'      => 'In behandeling',
            'request_open'              => 'Open',
            'request_closed'            => 'Gesloten',
        ),
        'help_new' => array (
            'title'         => 'Nieuw ticket',
            'subject'       => 'Onderwerp',
            'description'   => 'Beschrijving',
            'open_ticket'   => 'Open een ticket',
            'request_desc'  => 'Zodra uw ticket is geopend, zullen wij zo snel mogelijk reageren. Houd er rekening mee dat de verwerking van sommige antwoorden meer tijd in beslag kan nemen.'
        ),

        /*     App/View/Home     */
        'index' => array (
            'connection'              => 'Aansluiting',
            'hook'                    => 'Word lid van onze community en creëer je eigen avatar, maak vrienden, chat, maak je eigen appartementen en neem deel aan onze evenementen!',
            'register'                => 'Inloggen',
            'login'                   => 'Inloggen'
        ),
        'home' => array (
            'to'                      => 'Naar',
            'friends_online'          => 'Online vrienden',
            'now_in'                  => 'Nu in',
            'latest_news'             => 'Laatste nieuws',
            'latest_facts'            => 'De laatste weetjes binnen '. Config::site['shortname'] . '!',
            'popular_rooms'           => 'Populaire kamers',
            'popular_rooms_label'     => 'Weet welke kamers trending zijn binnen '. Config::site['shortname'] . '!',
            'popular_no_rooms'        => 'Er is nog niemand op ons Hotel!',
            'goto_room'               => 'Naar deze kamer',
            'popular_groups'          => 'Populaire groepen',
            'popular_groups_label'    => 'Bij wie wil jij je aansluiten?',
            'popular_no_groups'       => 'Er zijn nog geen groepen aangemaakt!',
            'load_news'               => 'Meer nieuws laden',
            'user_of_the_week'        =>  Config::site['shortname'] . ' van de week',
            'user_of_the_week_label'  => 'Speler of de week',
            'copy_referal'            => 'Kopiëren',
            'referral'                => 'Sponsoring',
            'referral_desc'           => 'Stuur een uitnodiging naar je vrienden en als zij een account aanmaken, ontvang jij een klein cadeautje.',
            'badges'                  => 'Nieuwe badges',
            'items'                   => 'Nieuwe artikelen',
            'event'                   => 'Er is een evenement aan de gang op Habbox',
        ),
        'lost' => array (
            'page_not_found'          => 'Pagina niet gevonden!',
            'page_content_1'          => 'Sorry, de pagina die je probeert te vinden bestaat niet.',
            'page_content_2'          => 'Controleer opnieuw of je de juiste url hebt. Kom je dan weer hier terecht (welkom terug!). Ga dan met de \'Back\' knop terug naar waar je vandaan kwam.',
            'sidebar_title'           => 'Zocht je misschien...',
            'sidebar_stats'           => 'De home van een van je vrienden?',
            'sidebar_stats_label_1'   => 'Misschien staat hij/zij bij de',
            'sidebar_stats_label_2'   => 'Ranglijsten',
            'sidebar_rooms'           => 'Populaire kamers?',
            'sidebar_rooms_label_1'   => 'Blader eens door de',
            'sidebar_rooms_label_2'   => 'Navigator',
            'sidebar_else'            => 'Ik ben mijn slippers kwijt!',
            'sidebar_else_label'      => 'Dan moet je toch echt beter zoeken! :-)'
        ),
        'profile' => array (
            'overlay_search'        => 'Wie zoek je?',
            'since'                 => 'sinds',
            'currently'             => 'Momenteel',
            'never_online'          => 'Nog niet online geweest',
            'last_visit'            => 'Laatste bezoek',
            'guestbook_title'       => 'Gastenboek',
            'guestbook_label'       => 'Laat jij iets achter?',
            'guestbook_input'       => 'Wat ben je aan het doen,',
            'guestbook_input_1'     => 'Wat wil je',
            'guestbook_input_2'     => 'laten weten?',
            'guestbook_load_more'   => 'Meer berichten laden',
            'badges_title'          => 'Badges',
            'badges_label'          => 'Willekeurige badges die ik kan dragen',
            'badges_empty'          => 'Heeft nog geen badges ingesteld',
            'friends_title'         => 'Vrienden',
            'friends_label'         => 'Willekeurige vrienden in mijn lijst',
            'friends_empty'         => 'Heeft nog geen vrienden gemaakt',
            'groups_title'          => 'Groepen',
            'groups_label'          => 'Zie waar ik van houdt!',
            'groups_empty'          => 'Heeft zich nog niet aangesloten bij een groep',
            'rooms_title'           => 'Kamers',
            'rooms_label'           => 'Mijn laatst aangemaakte kamers',
            'rooms_empty'           => 'Heeft nog geen kamers aangemaakt',
            'photos_title'          => 'Foto\'s',
            'photos_label'          => 'Kom jij met mij op de foto?',
            'photos_empty'          => 'Heeft nog geen foto\'s gemaakt'
        ),
        'registration' => array (
            'title'                 => 'Vul je gegevens in!',
            'email'                 => 'E-mailadres',
            'email_fill'            => 'Vul hier je e-mailadres in...',
            'email_help'            => 'We zullen deze informatie nodig hebben om je account te herstellen voor het geval je de toegang verliest.',
            'password'              => 'Wachtwoord',
            'password_fill'         => 'Wachtwoord...',
            'password_repeat'       => 'Wachtwoord nogmaals',
            'password_repeat_fill'  => 'Herhaal wachtwoord...',
            'password_help_1'       => 'Je wachtwoord moet minimaal 6 tekens lang zijn en letters en cijfers bevatten.',
            'password_help_2'       => 'Zorg dat je wachtwoord anders is dan op andere website\'s!',
            'birthdate'             => 'Geboortedatum',
            'day'                   => 'Dag',
            'month'                 => 'Maand',
            'year'                  => 'Jaar',
            'birthdate_help'        => 'We zullen deze informatie nodig hebben om je account te herstellen voor het geval je de toegang verliest.',
            'found'                 => 'Hoe heb je '. Config::site['shortname'] . ' Hotel gevonden?',
            'found_choose'          => 'Maak een keuze...',
            'found_choose_1'        => 'Google',
            'found_choose_2'        => 'Door een vriend(in)',
            'found_choose_3'        => 'Door een ander spel',
            'found_choose_4'        => 'Door Facebook',
            'found_choose_5'        => 'Anders',
            'create_user'           => 'Maak je '. Config::site['shortname'] . '!',
            'username'              =>  Config::site['shortname'] . 'naam',
            'username_fill'         =>  Config::site['shortname'] . 'naam...',
            'username_help'         => 'Jouw unieke naam in '. Config::site['shortname'] . ' Hotel.',
            'sex'                   => 'Geslacht',
            'male'                  => 'Jongen',
            'female'                => 'Meisje',
            'register'              => 'Registreer',
            'referral'              => 'Uw sponsor',
            'login'                 => 'Inloggen'
        ),
        'stats' => array(
            'title'                 => 'Mijn statistieken',
            'winwin'                => 'Win-win',
            'respects_received'     => 'Respecten ontvangen',
            'respects_given'        => 'Respecten verzonden',
            'friends'               => 'Aantal vrienden',
            'messages'              => 'Verzonden berichten',
            'rooms_visited'         => 'Bezochte appartementen',
            'rooms'                 => 'Aantal appartementen',
            'items_purchased'       => 'Gekochte objecten',
            'items_posed'           => 'Gelegde objecten',
            'AllTimeHotelPresence'  => 'Online tijd',
            'GiftReceiver'          => 'Ontvangen giften',
            'GiftGiver'             => 'Verzonden geschenken'
        ),

        /*     App/View/Jobs     */
        'apply' => array (
            'title'               => 'Reageer op de vacture',
            'content_1'           => 'Bedankt voor je interesse in '. Config::site['shortname'] . ' Hotel en voor het reageren op de vacature.',
            'content_2'           => 'Probeer de vragenlijst zo nauwkeurig mogelijk te beantwoorden.',
            'description'         => 'Taakomschrijving',
            'question_name'       => 'Hoe heet je?',
            'question_age'        => 'Hoe oud ben je?',
            'question_why'        => 'Waarom denk je dat je geschikt zou kunnen zijn?',
            'question_time'       => 'Hoeveel uur ben je online?',
            'question_time_help'  => 'Geef ons door hoeveel uur je per dag online bent op '. Config::site['shortname'] . ' Hotel.',
            'monday'              => 'Maandag',
            'tuesday'             => 'Dinsdag',
            'wednesday'           => 'Woensdag',
            'thursday'            => 'Donderdag',
            'friday'              => 'Vrijdag',
            'saturday'            => 'Zaterdag',
            'sunday'              => 'Zondag',
            'time_to_time'        => 'van X tot Y uur',
            'send'                => 'Stuur mijn sollicitatie'
        ),
        'jobs' => array (
            'title'                   => 'Lijst vacatures',
            'applications'            => 'Mijn sollicitaties',
            'my_applications'         => 'Nog geen aanvragen',
            'available_applications'  => 'Beschikbare vacatures',
            'buildteam'               => 'Bouwteam',
            'buildteam_desc'          => 'Ze zijn verantwoordelijk voor het bouwen van (event/officiele) kamers.',
            'react'                   => 'Reageren',
            'success'                 => 'Succesvol aangevraagd',
            'closed'                  => 'Gesloten'
        ),

        /*     App/View/Password     */
        'password_claim' => array (
            'title'                 => 'Wachtwoord vergeten?',
            'content_1'             => 'Vul hieronder je '. Config::site['shortname'] . 'naam en e-mailadres in en we sturen je een link per e-mail om je wachtwoord te veranderen.',
            'content_2'             => 'Doe dit niet als iemand je vraagt om dit te doen!',
            'username'              =>  Config::site['shortname'] . 'naam',
            'email'                 => 'E-mailadres',
            'send'                  => 'Verstuur e-mail',
            'wrong_page'            => 'Vals alarm!',
            'wrong_page_content_1'  => 'Als je je wachtwoord wel weer weet - of hier per ongeluk bent beland - kun je de link hieronder gebruiken om terug te gaan naar de homepage.',
            'back_to_home'          => 'Terug naar de homepage'
        ),
        'password_reset' => array (
            'title'                     => 'Wachtwoord veranderen',
            'new_password'              => 'Nieuw wachtwoord',
            'new_password_fill'         => 'Vul je nieuwe wachtwoord in...',
            'new_password_repeat_fill'  => 'Vul nogmaals je wachtwoord in...',
            'change_password'           => 'Wijzig wachtwoord'
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'Mijn voorkeuren',
            'password'       => 'Wachtwoord veranderen',
            'verification'   => 'Verificatie instellen',
            'email'          => 'E-mailadres veranderen',
            'namechange'     =>  Config::site['shortname'] . 'naam veranderen',
            'shop_history'   => 'Aankoopgeschiedenis'
        ),
        'settings_email' => array (
            'title'           => 'E-mail veranderen',
            'email_title'     => 'E-mailadres',
            'email_label'     => 'Je e-mailadres is nodig om je account te herstellen voor het geval je de toegang verliest.',
            'password_title'  => 'Huidig wachtwoord',
            'fill_password'   => 'Vul je huidige wachtwoord in...',
            'save'            => 'Opslaan'
        ),
        'settings_namechange' => array (
            'warning'         => 'Attentie! Ontkoppeling voordat je je nickname verandert!',
            'title'           =>  Config::site['shortname'] . 'naam veranderen',
            'help_1'          => 'Wil jij je Asteroidnaam veranderen? Dat kan! Dit kost',
            'help_2'          => 'en zullen meteen na je verzoek afgeschreven worden. Wanneer je naam eenmaal is veranderd kunnen wij dit niet meer terugdraaien! Zorg dus dat je goed na denkt over je besluit!',
            'fill_username'   => 'Asteroidnaam...',
            'request'         => 'Aanvragen'
        ),
        'settings_password' => array (
            'title'                     => 'Wachtwoord veranderen',
            'password_title'            => 'Huidig wachtwoord',
            'fill_password'             => 'Vul je huidig wachtwoord in...',
            'newpassword_title'         => 'Nieuw wachtwoord',
            'fill_newpassword'          => 'Vul hier je nieuwe wachtwoord in...',
            'fill_newpassword_repeat'   => 'Herhaal je nieuwe wachtwoord...',
            'help'                      => 'Je wachtwoord moet minimaal 6 tekens lang zijn en letters en cijfers bevatten.',
            'save'                      => 'Opslaan'
        ),
        'settings_preferences' => array (
            'title'               => 'Mijn voorkeuren',
            'follow_title'        => 'Volgfunctie - wie mogen je volgen?' ,
            'follow_label'        => 'Ik wil dat '. Config::site['shortname'] . '\'s mij niet mogen volgen',
            'friends_title'       => 'Vriendenverzoeken',
            'friends_label'       => 'Vriendschap verzoeken toestaan?',
            'room_title'          => 'Kamer uitgenodigingen',
            'room_label'          => 'Ik wil niet uitgenodigd worden voor kamers',
            'hotelalerts_title'   => 'Hotel alerts',
            'hotelalerts_label'   => 'Ik wil geen hotelmeldingen ontvangen',
            'chat_title'          => 'Chat instellingen',
            'chat_label'          => 'Ik wil gebruik maken van de oude chat',
            'dark_mode'           => 'Wilt u de donkere modus gebruiken?',
            'language_title'      => 'Keuze van de taal'
        ),
        'settings_verification' => array (
            'title'                 => 'Beveilig jouw account',
            'help'                  => 'Deze controle verhoogt de beveiliging van uw account. Wanneer u inlogt, moet u, afhankelijk van uw voorkeuren, de beveiligingsvragen beantwoorden die u hebt gedefinieerd of een code invoeren die door uw toepassing is gegenereerd.',
            'password_title'            => 'Wachtwoord',
            'fill_password'             => 'Vul je huidig wachtwoord in...',
            'auth_title'            => 'Twee-staps verificatie',
            'auth_label'            => 'Beveilig je account met twee-staps verificatie',
            'method_title'          => 'Verificatie methode',
            'method_choose'         => 'Kies jouw verificatie middel...',
            'method_pincode'        => 'Ik wil een pincode instellen',
            'method_auth_app'       => 'Ik wil Google 2FA gebruiken',
            'pincode_title'         => 'Pincode beveiliging',
            'pincode_label'         => 'Zet een pincode op je account als extra beveiliging, hiermee zorg je voor een betere beveiliging van jouw account tegen hackers.',
            'fill_pincode'          => 'Vul je pincode in',
            'generate_auth'         => 'Code generen door 2FA',
            'generate_auth_label'   => 'Deze methode is het meest betrouwbaar. Het koppelt uw '. Config::site['shortname'] . '-account aan een authenticatietoepassing (Google Authenticator) op uw telefoon. Wanneer u zich aanmeldt, hoeft u alleen de code in te voeren die door uw app is gegenereerd.',
            'link_account'          => 'Koppel je account',
            'link_account_label'    => 'Om uw account te koppelen, moet u deze QR-code eenvoudig met uw toepassing scannen en vervolgens op opslaan klikken om deze wijziging te valideren.',
            'save'                  => 'Opslaan'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'Club voordelen',
            'club_buy'            => 'Koop '. Config::site['shortname'] . ' Club',
            'unlimited'           => 'Onbeperkt',
            'more_information'    => 'Meer informatie',
            'content_1'           => 'Heb je een vraag of probleem met een aankoop?',
            'content_2'           => 'Aarzel niet om contact op te nemen met de klantenservice via de',
            'help_tool'           =>  Config::site['shortname'] . ' Helpcentrum',
            'random_club_users'   => 'Willekeurige '. Config::site['shortname'] . ' Club leden',
            'desc'                => 'Hier kun je club kopen voor echt geld. Met club heb je voordelen en kun je exclusieve items kopen.',
            'days'                => 'DAGEN',

            'catalog'               => 'Nieuw in de catalogus',
            'catalog_desc'          => 'Toegang tot meer dan 60 nieuwe meubelcategorieën exclusief voor clubleden',
            'king'                  => 'Jij bent de koning.',
            'king_desc'             => 'Krijg een voorsmaakje van de nieuwste mobis die aan de catalogus zijn toegevoegd',
            'gift'                  => 'Het is een geschenk.',
            'gift_desc'             => 'Hier is een badge die uw status in het hotel laat zien',
            'build'                 => 'Je bouwvaardigheden zijn grenzeloos',
            'build_desc'            => 'Creëer tot 1000 appartementen in plaats van de maximum 150',
            'groups'                => 'Groepen zullen niet langer een geheim voor je zijn',
            'groups_desc'           => 'Maak tot 500 groepen aan in plaats van het maximum van 150',
            'rooms'                 => 'Er zal altijd plaats voor je zijn',
            'rooms_desc'            => 'U hoeft niet meer geweigerd te worden bij de ingang, u kunt de appartementen bezoeken, zelfs als ze vol zijn.',
            'flood'                 => 'Uw beurt om te spreken',
            'flood_desc'            => 'De duur van je overstroming is teruggebracht van 30 naar 10 seconden, je ziet de tijd niet verstrijken',
            'commands'              => 'Je kunt plezier hebben',
            'commands_desc'         => 'Profiteer van speciale bestellingen exclusief voor clubleden',
        ),
        'shop_history' => array (
            'more_information'    => 'Meer informatie',
            'buy_history'         => 'Aankoopgeschiedenis',
            'product'             => 'Product',
            'date'                => 'Datum',
            'buy_history_empty'   => 'Je hebt nog geen aankoopgeschiedenis.',
            'buy_club'            => 'Koop '. Config::site['shortname'] . ' Club',
            'content_1'           => 'Heb je een vraag of probleem met een aankoop?',
            'content_2'           => 'Aarzel niet om contact op te nemen met de klantenservice via de',
            'help_tool'           =>  Config::site['shortname'] . ' Helpcentrum',
            'title'               => 'Mijn aankoopgeschiedenis',
            'desc'                => 'Vind hier alle aankopen die je hebt gedaan in',
            'title_draw'          => 'Maak je badge',
            'draw_desc'           => 'Creeër je badge en koop hem voor punten!',
            'draw_tool'           => 'Tekengereedschap',
            'add_color'           => 'Voeg een kleur toe',
            'draw_reset'          => 'Terugzetten op nul',
            'buy_badge'           => 'Koop mijn badge',
            'buy_on'              => 'Gekocht op',
            'erase'               => 'Shift + Klik om te wissen'
        ),
        'shop_offers' => array (
            'back'              => 'Terug',
            'buymethods'        => 'Betaalmethodes',
            'for'               => 'voor',
            'or_lower'          => 'of lager',
            'loading_methods'   => 'De betaalmethodes worden geladen...'
        ),
        'shop' => array (
            'title'             => 'Kies een product',
            'country'           => 'Land:',
            'netherlands'       => 'Nederland',
            'belgium'           => 'België',
            'super_rare'        => 'Super zeldzaam',
            'more_information'  => 'Meer informatie',
            'content_1'         => 'Heb je een vraag of probleem met een aankoop?',
            'content_2'         => 'Aarzel niet om contact op te nemen met de klantenservice via de',
            'help_tool'         =>  Config::site['shortname'] . ' Helpcentrum',
            'not_logged'        => 'Oeps! Je bent niet ingelogd.',
            'have_to_login'     => 'Om de '. Config::site['shortname'] . ' Winkel te bezoeken moet je ingelogd zijn.',
            'click_here'        => 'Klik hier',
            'to_login'          => 'om in te loggen.',
            'desc'              => 'Hier kun je Bel-Credits kopen voor echt geld. Met Bel-Credits kun je exclusieve items kopen.',
            'store'             => 'Winkel',
            'get'               => 'Je krijgt',
            'shop_success'      => 'Uw diamanten zijn toegevoegd aan uw account. Als er iets misgaat, neem dan contact met ons op via ons helpcentrum.',
            'shop_error'        => 'Er is een fout opgetreden en de aankoop is geannuleerd. Kunt u uw aankoop niet afronden? Neem contact met ons op via ons helpcentrum.',
            'help'              => 'Helpcentrum',
            'back'              => 'Retour',
            'waiting'           => 'Bezig met laden...'
        ),
        'games_ranking' => array(
            'title'             => 'Ranglijsten',
            'desc'              => 'Bekijk hier onze spelers met de meeste punten of scores!',
            'achievements'      => 'Win-win',
            'online'            => 'Tijd online'
        ),
        'casino' => array (
            'normal_rules_title'    => 'Casino regels',
            'rules_title'       => 'Wat is het casino?',
            'rules_desc'        => 'Het casino is over het algemeen een plaats waar er weddenschappen zijn van extra\'s, ultras, LTD, verzamelaars of zelfs diamanten.',

            'rules_how_title'   => 'Hoe speel je in het casino?',
            'rules_how_1'       => 'Spelen in het casino is eenvoudig, gewoon inzetten bij een beschikbare dealer. Zodra de inzet gedaan is, moet u uw spel voorstellen.',
            'rules_how_2'       => 'Er zijn twee soorten spel: <b>13</b> of <b>21</b>.<br>U zult ook moeten zeggen hoeveel dobbelstenen u in uw spel wilt hebben. (Van 1 tot 5)',
            'rules_how_3'       => 'Als u in 13.3 of hoger bent, zal de dealer eerst twee dobbelstenen gooien. Als er 8 of meer 8\'s zijn, zal hij moeten wachten op uw "<b>+</b>" om de 3e dobbelsteen te draaien.',
            'rules_how_4'       => 'Als u tenminste 21.4 bent, zal de dealer eerst 3 dobbelstenen gooien. Als er 16 of meer dan 16 zijn zal hij moeten wachten op uw "<b>+</b>" om de 4e dobbelsteen te draaien.',
            'rules_how_5'       => 'Het doel is simpel, niet meer dan <b>13</b> of <b>21</b> afhankelijk van het spel dat u gekozen hebt.',

            'rules_more_title'  => 'Om meer te weten',
            'rules_more_1'      => 'Voor elk spel, is het zeer belangrijk om de dobbelstenen te sluiten alvorens verder te gaan.<br>De inzet moet geplaatst worden voordat het spel begint. (Behalve in het geval van de Bet-Remise, zie AV)',
            'rules_more_2'      => 'Bij een gelijke stand tussen de twee spelers, wordt het spel hervat met hetzelfde spel als bij de start.<br>En zo verder... tot er een winnaar is.',
            'rules_more_3'      => 'De regels zijn hetzelfde voor het spel in 21',

            'example_title'     => 'Voorbeeld',
            'example_J1'        => 'Speler 1',
            'example_J2'        => 'Speler 2',
            'example_part_1'    => 'Hij zet 5 extra\'s in voor speler 2<br>en koos zijn spel door te zeggen : "<b>13.5</b>"',
            'example_part_2'    => 'Hij moet kiezen tussen stoppen bij 8 of doorgaan met zijn spel door te zeggen "<b>+</b>"<br><b>Hij mag niet boven de 13 komen dus met 8 heeft hij kans op verlies op zijn spel</b><br>Hij kiest ervoor om te zeggen "<b>+</b>"',
            'example_part_3'    => 'Hij zei "<b>12.</b>"<br><b>De punt betekent dat de speler hier het spel wil stoppen</b>',
            'example_part_4'    => 'Hij zal dus 2 dobbelstenen gooien die 5 + 3 geven<br>Het zal de speler vragen 1 : "<b>8+?</b>"',
            'example_part_5'    => 'Hij zal een 3e dobbelsteen gooien die op 4 valt<br>Dit zal resulteren in 5 + 3 + 4 = 12<br>Het zal de speler vragen 1 : "<b>12+?</b>"',
            'example_part_6'    => 'Hij sluit de dobbelstenen en gooit zijn spel,<br>Hij gooit met 2 dobbelstenen, die uitkomen op 5 + 5<br>Hij gooit een 3de dobbelsteen en dat is 2<br>Dus 5 + 5 + 2 = 12',
            'example_same'      => 'GELIJKHEID'
        )
    ),
    'core' => array (
        'belcredits' => 'diamants',
        'hotelapi' => array (
            'disabled' => 'Kan vezoek niet verwerken omdat de hotelapi staat uitgeschakeld!'
        ),
        'dialog' => array (
            'logged_in'             => 'Oeps om deze pagina te bezoeken dien je ingelogd te zijn!',
            'not_logged_in'         => 'Om deze pagina te bezoeken dien je niet ingelogd te zijn!'
        ),
        'notification' => array (
            'message_placed'        => 'Je bericht is geplaatst!',
            'message_deleted'       => 'Je bericht is verwijderd!',
            'invisible'             => 'Dit is onzichtbaar gemaakt!',
            'profile_invisible'     => 'Deze '. Config::site['shortname'] . ' heeft zijn/haar profiel onzichtbaar gemaakt.',
            'profile_notfound'      => 'Helaas.. we hebben de '. Config::site['shortname'] . ' niet kunnen vinden!',
            'no_permissions'        => 'Je hebt geen toestemming.',
            'already_liked'         => 'Je vindt dit al leuk!',
            'liked'                 => 'Je vindt dit leuk!',
            'unliked'               => 'Succesvol unliked!',
            'banned_1'              => 'Je bent verbannen voor het overtreden van de '. Config::site['shortname'] . ' Regels:',
            'banned_2'              => 'Je ban verloopt over:',
            'something_wrong'       => 'Er is iets misgegaan, probeer het nogmaals.',
            'room_not_exists'       => 'Deze kamer bestaat niet!',
            'staff_received'        => 'Bedankt! De '. Config::site['shortname'] . ' Personeel heeft dit ontvangen!',
            'not_enough_belcredits' => 'Je hebt niet genoeg belcredits.',
			'not_enough_points'     => 'Je hebt helaas geen genoeg Diamanten!',
            'topic_closed'          => 'Je kunt niet reageren op een topic dat is gesloten!',
            'post_not_allowed'      => 'Je hebt geen rechten om te posten!',
            'draw_badge_uploaded'   => 'Je badge is ingediend en is klaar voor beoordeling!'
        ),
        'pattern' => array (
            'can_be'                => 'mag maximaal',
            'must_be'               => 'moet minimaal',
            'characters_long'       => 'karakters lang zijn.',
            'invalid'               => 'voldoet niet aan de eisen!',
            'invalid_characters'    => 'bevat ongeldige karakters!',
            'is_required'           => 'Vul alle velden in!',
            'not_same'              => 'komt niet overeen',
            'captcha'               => 'Recaptcha is foutief ingevoerd!',
            'numeric'               => 'moet numeriek zijn!',
            'email'                 => 'is niet geldig!'
        ),
        'title' => array (
            'home'              => 'Maak vrienden, speel games, maak kamers en val op!',
            'lost'              => 'Pagina niet gevonden!',
            'registration'      => 'Meld je gratis aan!',
            'hotel'             => 'Hotel',

            'casino'            => array (
                'rules'    => 'Casino regels',
            ),

            'password' => array (
                'claim'    => 'Wachtwoord kwijt?',
                'reset'    => 'Wachtwoord veranderen',
            ),
            'settings' => array (
                'index'         => 'Mijn voorkeuren',
                'password'      => 'Wachtwoord veranderen',
                'email'         => 'E-mail veranderen',
                'namechange'    =>  Config::site['shortname'] . 'naam veranderen'
            ),
            'community' => array (
                'index'     => 'Gemeenschap',
                'photos'    => 'Foto\'s',
                'staff'     =>  Config::site['shortname'] . ' Personeel',
                'team'      =>  Config::site['shortname'] . ' Team',
                'fansites'  => 'Fansites',
                'value'     => 'Ruilwaarde',
                'forum'     => 'Ons Forum'
            ),
            'games' => array (
                'ranking'   => 'Ranglijsten'
            ),
            'shop' => array (
                'index'     =>  'Winkel',
                'history'   => 'Aankoopgeschiedenis',
                'club'      =>  'VIP Club',
                'badge'     => 'Personaliseer uw badge'
            ),
            'help' => array (
                'index'     => 'Helpcentrum',
                'requests'  => 'Help Tickets',
                'new'       => 'Help Ticket openen'
            ),
            'jobs' => array (
                'index'     =>  Config::site['shortname'] . ' Vacatures',
                'apply'     => 'Reageren op vacature'
            )
        )
    ),
    'asn' => array(
        'login'                     => 'Inloggen met door jouw gekozen VPN is niet toegestaan!',
        'registered'                => 'Registeren met een verbannen VPN is niet toegestaan!'
    ),
    'login' => array (
        'invalid_password'          => 'Onjuist wachtwoord.',
        'invalid_pincode'           => 'Deze pincode komt niet overeen met die van deze '. Config::site['shortname'] . '!',
        'fill_in_pincode'           => 'Vul nu je pincode in om toegang te krijgen tot jouw account!'
    ),
    'register' => array (
        'username_invalid'          =>  Config::site['shortname'] . 'naam is in strijd met de '. Config::site['shortname'] . ' Regels.',
        'username_exists'           =>  Config::site['shortname'] . 'naam is al in gebruik :-(',
        'email_exists'              =>  'This e-mail address is already in use :-(',
        'too_many_accounts'         =>  'Er zijn teveel accounts geregistreerd op dit ip :-('
    ),
    'claim' => array (
        'invalid_email'             => 'Dit e-mailadres komt niet overeen met die van deze '. Config::site['shortname'] . ' ID.',
        'invalid_link'              => 'Deze link is verlopen. Vraag opnieuw je wachtwoord aan om je wachtwoord te veranderen.',
        'send_link'                 => 'We hebben zojuist een e-mail naar je gestuurd! Niks ontvangen? Controleer dan de map met ongewenste e-mail.',
        'password_changed'          => 'Je wachtwoord is veranderd. Je kunt nu weer inloggen!',

        'email'  => array (
            'title'                 => 'Verander je wachtwoord.'
        )
    ),
    'settings' => array (
        'email_saved'               => 'Je e-mailadres is veranderd.',
        'pincode_saved'             => 'Je pincode is opgeslagen, je zult opnieuw moeten inloggen. Tot zo! :)',
        'password_saved'            => 'Je wachtwoord is veranderd. Je zult nu opnieuw moeten inloggen. Tot zo! :)',
        'preferences_saved'         => 'Je voorkeuren zijn opgeslagen!',
        'current_password_invalid'  => 'Huidig wachtwoord komt niet overeen met die van je '. Config::site['shortname'] . ' ID.',
        'choose_new_username'       => 'Vul een nieuwe '. Config::site['shortname'] . 'naam in.',
        'choose_new_pincode'        => 'Vul een nieuwe pincode in.',
        'user_is_active'            => 'Deze '. Config::site['shortname'] . ' is mogelijk nog actief!',
        'user_not_exists'           => 'Deze '. Config::site['shortname'] . 'naam is beschikbaar en bestaat nog niet!',
        'name_change_saved'         => 'Je naam is gewijzigd! En er zijn 5 diamonden afgeschreven. Je moet nu opnieuw verbinden!',
        'invalid_secretcode'        => 'Google Authenticatie secretcode is onjuist.',
        'enabled_secretcode'        => 'Authenticatie methode gedefinieerd! Je moet opnieuw inloggen... tot ziens!',
        'disabled_secretcode'       => 'Authenticatie methode uitgeschakeld!'
    ),
    'rcon' => array (
        'exception'                 => 'RCON kan niet worden uitgevoerd omdat het hotel niet online is!'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'   => 'Transactie kon niet verwerkt worden!',
            'invalid_code'          => 'De door jouw ingevulde code is niet correct.',
            'success_1'             => 'Bedankt voor je aankoop! Je hebt',
            'success_2'             => 'diamanten.'
        ),
        'club' => array (
            'already_vip'           => 'Je bent al onbeperkt lid van de VIP Club.',
            'purchase_success'      => 'Jeuj! Je hebt een levenslange VIP-Club gekocht!'

        ),
        'marketplace' => array(
            'expired'               => 'Item die je probeert te kopen is niet meer te koop!',
            'purchased'             => 'Item is met succes gekocht en is toegevoegd aan je inventory!',
            'regards'               => 'Je gekochte item is gearriveerd! Met vriendelijke groet, ' . Config::site['shortname']
        ),
    ),
    'help' => array (
        'ticket_created'            => 'Jouw Help Ticket is aangemaakt. Bekijk je Help Tickets om het hulpverzoek te bekijken.',
        'ticket_received'           => 'Een '. Config::site['shortname'] . ' Personeel heeft gereageerd op je Helpcentrum ticket. Bezoek de Helpcentrum om de reactie te bekijken.',
        'already_open'              => 'Je hebt nog een openstaande ticket! Wanneer deze behandeld is kun je weer een ticket aanmaken.',
        'no_answer_yet'             => 'Je kunt pas reageren als een '. Config::site['shortname'] . ' Personeel je ticket heeft beantwoord.',
    ),
    'forum' => array (
        'is_sticky'                 => 'Sticky geüpdate!',
        'is_closed'                 => 'Topic status aangepast!'
    ),

    /*     Housekeeping     */
    'housekeeping' => array (
        'base' => array(
            'dashboard_header_title'    => 'Dashboard'
        ),
        'javascript' => array(
            'dashboard_table_username'  => 'Username'
        )
    )
);
?>
