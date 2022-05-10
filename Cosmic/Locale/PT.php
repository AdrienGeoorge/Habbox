<?php
use App\Config;

$GLOBALS['language'] = array (
    'website' => array (
        /*     App/View/base.html     */
        'base' => array(
            'nav_home'              => 'Início',

            'nav_community'         => 'Comunidade',
            'nav_news'              => 'Notícias',
            'nav_jobs'              => 'Empregos',
            'nav_photos'            => 'Fotos',
            'nav_staff'             => 'Equipa',
            'nav_team'              => 'Equipa secundária',
            'nav_exchange'          => 'Economia',

            'nav_shop'              => 'Loja',
            'nav_buy_points'        => 'Comprar diamantes',
            'nav_buy_club'          => 'Comprar o Club VIP',
            'nav_purchasehistory'   => 'As minhas últimas compras',
            'nav_changename'        => 'Mudar o meu apelido',
            'nav_drawyourbadge'     => 'Fazer o meu crachá',

            'nav_highscores'        => 'Classificações',

            'nav_forum'             => 'Os meus grupos',

            'nav_casino'            => 'Casino',

            'nav_helptool'          => 'Centro de Ajuda',
            'nav_helptickets'       => 'Os meus bilhetes',

            'nav_housekeeping'      => 'Administração',

            'close'                 => 'Fechar',
            'cookies'               => 'Habbox utiliza os seus próprios cookies a fim de lhe garantir o melhor serviço com o conteúdo mais apropriado. Se navegar no nosso sítio web, deve aceitar a nossa política de cookies.',
            'read_more'             => 'Leia mais',
            'thanks_for_playing'    => 'Obrigado por jogar em',
            'made_with_love'        => 'foi concebido com muito amor',
            'credits'               => 'Graças a Raizer e Metus',
            'and_all'               => 'E a todos os utilizadores Habbox',

            'login_title'           => 'Login',
            'login_name'            => 'Nome de utilizador',
            'login_password'        => 'Senha',
            'login_save_data'       => 'Lembra-te de mim',
            'login_lost_password'   => 'Esqueceu-se da sua palavra-passe?',

            'report_message'        => 'Relatar esta mensagem',
            'report_certainty'      => 'Está prestes a relatar esta mensagem. Tem a certeza de que quer mesmo reportar esta mensagem?',
            'report_inappropriate'  => 'Sim, penso que é inapropriado!',

            'user_to'               => 'Habbo Hôtel',
            'user_profile'          => 'O meu perfil',
            'user_settings'         => 'Definições',
            'user_stats'            => 'As minhas estatísticas',
            'user_logout'           => 'Sair',
            'user_hotel'            => 'Hotel',

            'build_tool'            => 'Ferramenta de construção',
            'build_height'          => 'Altura',
            'build_rotation'        => 'Rotação',
            'build_state'           => 'Estado',

            'header_slogan'         => 'Um mundo incrível está a abrir-se diante dos seus olhos!',
            'header_slogan2'        => 'Junte-se a nós e faça novos amigos!',
            'header_login'          => 'Iniciar sessão',
            'header_register'       => 'Registe-se',
            'header_to'             => 'Hotel',
            'search'                => 'Pesquisa...',

            'footer_helptool'       => 'Centro de Ajuda',
            'footer_rules'          => 'O regulamento de ' . Config::site['shortname'],
            'footer_terms'          => 'Condições de utilização',
            'footer_privacy'        => 'Carta de protecção de dados pessoais',
            'footer_cookies'        => 'Política de bolachas',
            'footer_guide'          => 'Guia dos pais',

            'maintenance'           => 'Manutenção de hotéis',
            'text_1'                => 'O nosso hotel está actualmente em manutenção enquanto fazemos actualizações. Não se preocupe, estaremos de volta muito em breve.',
            'text_2'                => 'Pode acompanhar o progresso do trabalho ou vir discutir connosco sobre a nossa discórdia comunitária.',
            'follow_discord'        => 'Junte-se à discórdia',
            'staff'                 => 'Espaço da equipa',

            'panel_articles'        => 'Artigos',
            'panel_jobs'            => 'Recrutamento',

            'panel_faq'             => 'Perguntas mais frequentes',
            'panel_tickets'         => 'Os meus bilhetes',

            'panel_ranking_wealth'  => 'Riqueza',
            'panel_ranking_games'   => 'Jogos',

            'panel_settings'        => 'As minhas preferências',
            'panel_password'        => 'A minha palavra-chave',
            'panel_verification'    => 'Autenticação segura',
            'panel_mail'            => 'Endereço de correio electrónico',
            'panel_username'        => 'Altere o seu nome de utilizador',
            'panel_history'         => 'As minhas compras',

            'panel_shop'            => 'Compra de diamantes',
            'panel_vip'             => 'VIP Club',
            'panel_badge'           => 'Criação de crachás',
        ),

        /*     public/assets/js/web     */
        'javascript' => array(
            'web_customforms_markedfields'                  => 'Todos os campos marcados com * são de preenchimento obrigatório.',
            'web_customforms_loadingform'                   => 'Carregamento do formulário...',
            'web_customforms_next'                          => 'Próximo',
            'web_customforms_close'                         => 'Fechar',
            'web_customforms_participation'                 => 'Obrigado pela sua participação!',
            'web_customforms_sent'                          => 'As suas respostas foram enviadas e serão analisadas por um dos membros da equipa que abriu o evento.',
            'web_customforms_answer'                        => 'As minhas respostas',

            'web_dialog_cancel'                             => 'Cancelar',
            'web_dialog_validate'                           => 'Validar',
            'web_dialog_confirm'                            => 'Confirmar a minha escolha',

            'web_hotel_backto'                              => 'Voltar ao ' . Config::site['shortname'] . ' Hotel',

            'web_fill_pincode'                              => 'Introduza o seu código PIN que especificou ao criar a sua conta na Habbox. Bem, e se se tiver esquecido do seu PIN? Por favor contacte o apoio através do ' . Config::site['shortname'] . ' Ajuda de apoio',
            'web_twostep'                                   => 'Autenticação em duas etapas',
            'web_login'                                     => 'Deve estar ligado para reportar esta mensagem!',
            'web_loggedout'                                 => 'Desconectado :(',

            'web_notifications_success'                     => 'Sucesso!',
            'web_notifications_error'                       => 'Erro!',
            'web_notifications_info'                        => 'Informação!',

            'web_page_article_login'                        => 'Deve estar ligado para comentar!',

            'web_page_community_photos_login'               => 'Tem de se estar ligado para gostar!',
            'web_page_community_photos_loggedout'           => 'Desconectado :(',

            'web_page_forum_change'                         => 'Alterar',
            'web_page_forum_cancel'                         => 'Desistir',
            'web_page_forum_oops'                           => 'Slim...',
            'web_page_forum_topic_closed'                   => 'Este tópico está encerrado e não pode responder neste momento.',
            'web_page_forum_login_toreact'                  => 'Tem de estar ligado para responder!',
            'web_page_forum_login_tolike'                   => 'Tem de estar ligado para gostar deste post!',
            'web_page_forum_loggedout'                      => 'Desconectado :(',

            'web_page_profile_login'                        => 'Tu dois être connecté pour aimer ces photos!',
            'web_page_profile_loggedout'                    => 'Desconectado :(',

            'web_page_settings_namechange_request'          => 'Pedido',
            'web_page_settings_namechange_not_available'    => 'Não disponível',
            'web_page_settings_namechange_choose_name'      => 'Escolha um apelido',

            'web_page_settings_verification_oops'           => 'Slim...',
            'web_page_settings_verification_fill_password'  => 'Introduza a sua palavra-passe!',
            'web_page_settings_verification_2fa_on'         => 'A autenticação Google está actualmente configurada na sua conta. Para utilizar outro método de verificação, deve primeiro remover o seu antigo método de verificação!',
            'web_page_settings_verification_2fa_secretkey'  => 'Digitalizou o seu código QR no seu telemóvel? Depois introduza a chave secreta para proteger a sua conta!',
            'web_page_settings_verification_2fa_authcode'   => 'Código de autenticação',
            'web_page_settings_verification_pincode_on'     => 'Tem actualmente um código PIN definido na sua conta. Para utilizar outro método de verificação, deve primeiro apagar a sua antiga verificação!',
            'web_page_settings_verification_2fa_off'        => 'Para desactivar a autenticação Google, deve introduzir o seu código secreto através do nosso gerador.',
            'web_page_settings_verification_pincode_off'    => 'Para desactivar o seu código PIN, deve introduzir o seu código PIN actual.',
            'web_page_settings_verification_pincode'        => 'O seu código PIN',
            'web_page_settings_verification_switch'         => 'Seleccione o botão de escolha de autenticação para escolher o método que prefere para proteger a sua conta!',

            'web_page_shop_offers_neosurf_name'             => 'Neosurf',
            'web_page_shop_offers_neosurf_description'      => 'Pague facilmente com Neosurf para comprar Diamantes, será então automaticamente creditado com pontos de Diamante de acordo com o montante que escolher.',
            'web_page_shop_offers_neosurf_dialog'           => 'Introduza o seu endereço de e-mail Neosurf abaixo para continuar.',
            'web_page_shop_offers_paypal_name'              => 'Paypal',
            'web_page_shop_offers_paypal_description'       => 'Pague facilmente com Paypal para comprar Diamantes, será então automaticamente creditado com Diamantes de acordo com o montante que escolheu.',
            'web_page_shop_offers_paypal_dialog'            => 'Introduza abaixo o seu endereço de correio electrónico Paypal para continuar.',
            'web_page_shop_offers_sms_name'                 => 'SMS',
            'web_page_shop_offers_sms_description'          => 'Escreva o código para receber os seus Diamantes.',
            'web_page_shop_offers_sms_dialog'               => 'Escreva o código recebido por mensagem de texto abaixo para receber os seus Diamantes.',
            'web_page_shop_offers_audiotel_name'            => 'Audiotel',
            'web_page_shop_offers_audiotel_description'     => 'Marque e ligue para este número uma ou mais vezes para receber os seus Diamantes na quantia que escolher.',
            'web_page_shop_offers_audiotel_dialog'          => 'Introduza o código que recebeu na sua chamada para receber os seus Diamantes.',
            'web_page_shop_offers_pay_with'                 => 'Pague com',
            'web_page_shop_offers_points_for'               => 'Diamantes para',
            'web_page_shop_offers_get_code'                 => 'Obtenha um código para obter Diamantes',
            'web_page_shop_offers_fill_code'                => 'Introduza o seu código para obter os Diamantes',
            'web_page_shop_offers_fill_code_desc'           => 'Introduza o seu código abaixo para receber os seus Diamantes imediatamente!',
            'web_page_shop_offers_submit'                   => 'Comprar',
            'web_page_shop_offers_success'                  => 'Compra bem sucedida!',
            'web_page_shop_offers_received'                 => 'Obrigado pela sua compra. Tem agora',
            'web_page_shop_offers_received2'                => 'Diamantes.',
            'web_page_shop_offers_close'                    => 'Fechar',
            'web_page_shop_offers_failed'                   => 'Compra falhada!',
            'web_page_shop_offers_failed_desc'              => 'A sua compra falhou. Por favor, tente novamente ou contacte-nos através da nossa equipa de apoio.',
            'web_page_shop_offers_back'                     => 'Voltar',
            'web_page_shop_offers_no_card'                  => 'Se não tiver um cartão pré-pago Neosurf, pode obter um no website Neosurf ou na tabacaria mais próxima!',
            'web_page_shop_offers_no_card2'                 => 'Pontos de venda',
            'web_page_shop_offers_to'                       => 'Para',
            'web_page_shop_offers_buy_code'                 => 'Comprar um código',
            'web_page_shop_offers_select'                   => 'Seleccione',
            'web_page_shop_offers_waiting'                  => 'Carregamento...',
            'web_page_hotel_loading'                        => 'está a ser carregado...',
            'web_page_hotel_sometinhg_wrong_1'              => 'Caramba, alguma coisa parece ter corrido mal!',
            'web_page_hotel_sometinhg_wrong_2'              => 'Actualizar a página',
            'web_page_hotel_sometinhg_wrong_3'              => 'Ou pode criar um bilhete através da Ajuda de Apoio',
            'web_page_hotel_welcome_at'                     => 'Bem-vindo a',
            'web_page_hotel_soon'                           => 'Tome uma bebida, o hotel está pronto para abrir diante dos seus olhos...',
            'web_hotel_active_flash_1'                      => 'Está quase lá ' . Config::site['shortname'] .'!',
            'web_hotel_active_flash_2'                      => 'Clique aqui',
            'web_hotel_active_flash_3'                      => 'depois clique no lado esquerdo para permitir a activação do flash player.',

            'web_save_clipboard'                            => 'Guardado para prancheta',
            'web_referral_copied'                           => 'Cópia feita'
        ),

        /*     App/View/Community     */
        'article' => array (
            'title'                     => 'Artigos',
            'reactions'                 => 'Comentários',
            'reactions_empty'           => 'Sem comentários no momento.',
            'reactions_fill'            => 'Digite aqui o seu comentário...',
            'reactions_post'            => 'Correio',
            'latest_news'               => 'Artigos mais recentes',
            'reaction_hidden_yes'       => 'Comentário invisível!',
            'reaction_hidden_no'        => 'Comentário visível novamente!',
            'forbidden_words'           => 'O seu comentário tem algumas palavras em falta!',
            'published_on'              => 'Publicado em'
        ),
        'forum' => array (
            /*  Forum/index.html  */
            'index_subject'             => 'Título do assunto',
            'index_topics'              => 'Tópicos',
            'index_latest_topic'        => 'Último tópico',
            'index_empty'               => 'Nenhum tópico',
            'index_latest_activities'   => 'Última actividade',
            'index_by'                  => 'por',

            /*  Forum/category.html  */
            'category_new_topic'        => 'Novo tema',
            'category_back'             => 'Voltar',
            'category_topics'           => 'Tópicos',
            'category_posts'            => 'Correios',
            'category_latest_reacts'    => 'Comentários mais recentes',
            'category_topic_by'         => 'Por',
            'category_no_reacts'        => 'Sem comentários',
            'category_latest_react_by'  => 'Último comentário escrito por',
            'category_create_topic'     => 'Criar um novo tópico',
            'category_subject'          => 'Tópico',
            'category_description'      => 'Descrição',
            'category_create_button'    => 'Criar um novo tópico',
            'category_or'               => 'ou',
            'category_cancel'           => 'voltar',

            /*  Forum/topic.html  */
            'topic_react'               => 'Reagir',
            'topic_close'               => 'Fechar',
            'topic_reopen'              => 'Reabertura',
            'topic_since'               => 'Desde:',
            'topic_posts'               => 'Posted on:',
            'topic_topic'               => 'Tópico:',
            'topic_reaction'            => 'Comentário escrito sobre:',
            'topic_closed'              => 'Atenção! Este assunto está encerrado, não está de acordo ? Depois contacte-nos através do',
            'topic_helptool'            => 'apoio',
            'topic_and'                 => 'e',
            'topic_likes_1'             => 'Outros jogadores como este!',
            'topic_likes_2'             => 'Adoro-o!',
            'topic_likes_3'             => 'Gosta!'
        ),

        /*     App/View/Community     */
        'community_photos' => array (
            'title'       => 'Fotos da comunidade',
            'by'          => 'Por',
            'photos_by'   => 'Fotos tiradas por',
            'photos_desc' => 'Ver as últimas fotografias tiradas por',
            'load_more'   => 'Ver mais fotos'
        ),
        'community_staff' => array (
            'title'       => 'Como tornar-se um membro da equipa em ' . Config::site['shortname'] . ' ?',
            'desc'        => 'A nossa equipa está à sua disposição para o ajudar e guiá-lo pelo hotel, se necessário, para lhe proporcionar a melhor experiência de jogo possível!',
            'content_1'   => 'Claro que toda a gente sonha em tornar-se um bastão, mas infelizmente não é para todos. Tornar-se um dia pessoal em ' . Config::site['shortname'] . '  terá de se candidatar na página de recrutamento do site.',
            'content_2'   => 'Isto será possível quando surgirem vagas, por isso, leia regularmente os nossos artigos para se manter a par do período de recrutamento.',
            'no_users'    => 'Não há ninguém nesta categoria'
        ),
        'community_value' => array (
            'title_header'      => 'Mercado de mobis de catálogo',
            'decs_header'       => 'Todos os mobis exclusivos a preços excepcionais que se podem comprar com créditos podem ser encontrados aqui!',
            'furni_name'        => 'Nome do mobi',
            'furni_type'        => 'Tipo',
            'furni_costs'       => 'Preço actual',
            'furni_amount'      => 'À venda',
            'furni_value'       => 'Preço antigo',
            'furni_rate'        => 'Taxa',
            'looking_for'       => 'Estou à procura de..',
            'seller'            => 'Vendido por',
            'price'             => 'Preço',
            'nav_my'            => 'O meu mercado',
            'nav_shop'          => 'O mercado mobis',
            'nav_catalogue'     => 'Catálogo',
            'marketplace_desc'  => 'Os vendedores de ' . Config::site['shortname'] . ' Hotel oferece-lhe a venda dos seus mobis exclusivos em troca de créditos. Talvez encontre aqui alguns mobis que não consegue encontrar no catálogo e que gostaria de comprar!'
        ),
        /*     App/View/Games     */
        'games_ranking' => array (
            'username' => 'name'
        ),

        /*     App/View/Help     */
        'help' => array (
            /*  Help/help.html  */
            'help_title'                => 'Perguntas mais frequentes',
            'help_label'                => 'Encontre aqui todas as respostas às suas perguntas!',
            'help_other_questions'      => 'Mais perguntas',
            'help_content_1'            => 'Não consegue encontrar uma resposta para a sua pergunta?',
            'help_contact'              => 'Contacte-nos em',
            'title'                     => 'Ajuda de apoio',
            'desc'                      => 'Pode encontrar aqui todas as respostas às suas perguntas. Se não encontrar uma resposta para a sua pergunta, não hesite em contactar-nos.',

            /*  Help/request.html  */
            'request_closed'            => 'FECHADO',
            'request_on'                => 'Aberto:',
            'request_ticket_amount'     => 'Número de bilhetes:',
            'request_react_on'          => 'Reagir em:',
            'request_react'             => 'Reagir agora',
            'request_responses'         => 'Resposta(ões) ao tema',
            'request_description'       => 'Descrição',
            'request_react_on_ticket'   => 'Responder ao bilhete',
            'request_contact'           => 'Contacto ' . Config::site['shortname'],
            'request_contact_help'      => 'Pode contactar-nos abrindo um novo bilhete.',
            'request_new_ticket'        => 'Novo bilhete',
            'request_subject'           => 'Assunto',
            'request_type'              => 'Tipo',
            'request_status'            => 'Bilhete aberto em',
            'request_in_treatment'      => 'Em processo',
            'request_open'              => 'Aberto',
            'request_closed'            => 'Fechado',
        ),
        'help_new' => array (
            'title'         => 'Novo bilhete',
            'subject'       => 'Assunto',
            'description'   => 'Descrição',
            'open_ticket'   => 'Abrir um bilhete',
            'request_desc'  => 'Uma vez aberto o seu bilhete, responderemos o mais rapidamente possível. Note-se que algumas respostas podem demorar mais tempo a processar.'
        ),

        /*     App/View/Home     */
        'index' => array (
            'connection'              => 'Login',
            'hook'                    => 'Junte-se à nossa comunidade e crie o seu próprio avatar, faça amigos, converse, crie os seus próprios apartamentos e participe nos nossos eventos!',
            'register'                => 'Registe-se',
            'login'                   => 'Login'
        ),
        'home' => array (
            'to'                      => 'Entrada no hotel',
            'friends_online'          => 'Amigos em linha',
            'now_in'                  => 'Actualmente em',
            'latest_news'             => 'Artigos mais recentes',
            'latest_facts'            => 'As últimas notícias sobre ' . Config::site['shortname'] . '!',
            'popular_rooms'           => 'Apartamentos populares',
            'popular_rooms_label'     => 'Os apartamentos mais badalados em '. Config::site['shortname'] . '!',
            'popular_no_rooms'        => 'De momento, não há ninguém dentro do hotel!',
            'goto_room'               => 'Junte-se ao apartamento',
            'popular_groups'          => 'Grupos populares',
            'popular_groups_label'    => 'A que grupo se quer juntar?',
            'popular_no_groups'       => 'Ainda não foi criado nenhum grupo!',
            'load_news'               => 'Leia mais',
            'user_of_the_week'        =>  Config::site['shortname'] . ' membro eleito da semana',
            'user_of_the_week_label'  => 'Membro da semana',
            'copy_referal'            => 'Cópia',
            'referral'                => 'Indique um amigo',
            'referral_desc'           => 'Envie um convite aos seus amigos e se eles criarem uma conta, receberá um pequeno presente.',
            'badges'                  => 'Novos crachás',
            'items'                   => 'Novos mobis',
            'event'                   => 'Está em curso um evento sobre Habbox',
        ),
        'lost' => array (
            'page_not_found'          => 'Página não encontrada!',
            'page_content_1'          => 'Desculpe, mas a página que procura não existe.',
            'page_content_2'          => 'Verifique novamente se está no URL correcto. Se voltar aqui (Bem-vindo de volta!). Depois volte para onde veio com o botão voltar, se quiser!',
            'sidebar_title'           => 'Talvez esteja à procura de...',
            'sidebar_stats'           => 'O lugar do seu amigo?',
            'sidebar_stats_label_1'   => 'Talvez este já esteja no',
            'sidebar_stats_label_2'   => 'Classificações',
            'sidebar_rooms'           => 'Apartamentos populares?',
            'sidebar_rooms_label_1'   => 'Explore-o',
            'sidebar_rooms_label_2'   => 'Navegador',
            'sidebar_else'            => 'Perdi os meus chinelos!',
            'sidebar_else_label'      => 'Tem mesmo de procurar mais! :-)'
        ),
        'profile' => array (
            'overlay_search'        => 'Quem procura?',
            'since'                 => 'Membro desde',
            'currently'             => 'Actualmente',
            'never_online'          => 'Não em linha',
            'last_visit'            => 'Última visita',
            'guestbook_title'       => 'Livro de visitas',
            'guestbook_label'       => 'Esqueceu-se de alguma coisa?',
            'guestbook_input'       => 'O que está a fazer?',
            'guestbook_input_1'     => 'O que é que pretende?',
            'guestbook_input_2'     => 'Neste momento?',
            'guestbook_load_more'   => 'Ler mais mensagens',
            'badges_title'          => 'Crachás',
            'badges_label'          => 'Crachás aleatórios que posso usar',
            'badges_empty'          => 'Ainda não tem um crachá',
            'friends_title'         => 'Amigos',
            'friends_label'         => 'Amigos aleatórios que estão na minha lista de amigos',
            'friends_empty'         => 'Ainda não tem amigos',
            'groups_title'          => 'Grupos',
            'groups_label'          => 'Grupos dos quais sou membro',
            'groups_empty'          => 'Nenhum grupo ainda',
            'rooms_title'           => 'Apartamentos',
            'rooms_label'           => 'Os meus últimos apartamentos criados',
            'rooms_empty'           => 'Ainda não criei nenhum aparelho',
            'photos_title'          => 'Fotos',
            'photos_label'          => 'Gostaria de tirar uma fotografia comigo?',
            'photos_empty'          => 'Não tirou nenhuma fotografia',
            'title'                 => 'Perfil'
        ),
        'registration' => array (
            'title'                 => 'Primeiro precisamos de alguma informação!',
            'email'                 => 'Endereço de correio electrónico',
            'email_fill'            => 'Introduza aqui o seu endereço de correio electrónico...',
            'email_help'            => 'Precisaremos desta informação para restaurar a sua conta se perder o acesso.',
            'password'              => 'A sua palavra-passe',
            'password_fill'         => 'A sua palavra-passe...',
            'password_repeat'       => 'Repetir palavra-passe',
            'password_repeat_fill'  => 'Repetir palavra-passe...',
            'password_help_1'       => 'A sua palavra-chave deve conter pelo menos seis caracteres, bem como letras e números.',
            'password_help_2'       => 'A sua palavra-chave deve ter pelo menos 6 caracteres e conter letras e números. Certifique-se de que a sua palavra-passe é diferente das palavras-passe de outros websites que visita!',
            'birthdate'             => 'Data de nascimento',
            'day'                   => 'Dia',
            'month'                 => 'Mês',
            'year'                  => 'Ano',
            'birthdate_help'        => 'Precisaremos desta informação para restaurar a sua conta caso perca o acesso.',
            'found'                 => 'Como encontrou ' . Config::site['shortname'] . ' Hotel?',
            'found_choose'          => 'Faça uma escolha...',
            'found_choose_1'        => 'Através do Google',
            'found_choose_2'        => 'Através de um amigo',
            'found_choose_3'        => 'Através de outro jogo',
            'found_choose_4'        => 'Através do Facebook',
            'found_choose_5'        => 'Outros',
            'create_user'           => 'Crie o seu avatar ' . Config::site['shortname'] . '!',
            'username'              => 'Nome de utilizador Habbox',
            'username_fill'         => 'Nome de utilizador...',
            'username_help'         => 'O seu apelido único em ' . Config::site['shortname'] . ' Hotel.',
            'sex'                   => 'Género',
            'male'                  => 'Homem',
            'female'                => 'Feminino',
            'register'              => 'Inscrever-se',
            'header_slogan2'        => 'Junte-se a nós e faça novos amigos!',
            'referral'              => 'O seu patrocínio',
            'login'                 => 'Iniciar sessão'
        ),
        'stats' => array(
            'title'                 => 'As minhas estatísticas',
            'winwin'                => 'Pontuação win-win',
            'respects_received'     => 'Respeitos recebidos',
            'respects_given'        => 'Respeitos enviados',
            'friends'               => 'Número de amigos',
            'messages'              => 'Mensagens enviadas',
            'rooms_visited'         => 'Apartamentos visitados',
            'rooms'                 => 'Número de apartamentos',
            'items_purchased'       => 'Mobis comprado',
            'items_posed'           => 'Mobis instalado',
            'AllTimeHotelPresence'  => 'Tempo em linha',
            'GiftReceiver'          => 'Presentes recebidos',
            'GiftGiver'             => 'Presentes enviados'
        ),

        /*     App/View/Jobs     */
        'apply' => array (
            'title'               => 'Candidate-se agora!',
            'content_1'           => 'Obrigado pelo seu interesse em ' . Config::site['shortname'] . ' Hotel, dar-lhe-emos uma resposta o mais rapidamente possível.',
            'content_2'           => 'Tente responder às perguntas da forma mais verdadeira possível.',
            'description'         => 'Descrição do trabalho',
            'question_name'       => 'Qual é o seu nome?',
            'question_age'        => 'Qual é a sua idade?',
            'question_why'        => 'Porquê você e não outra pessoa?',
            'question_time'       => 'Quanto tempo está online?',
            'question_time_help'  => 'Informe-nos quando estiver disponível em ' . Config::site['shortname'] . ' Hotel.',
            'monday'              => 'Segunda-feira',
            'tuesday'             => 'Terça-feira',
            'wednesday'           => 'Quarta-feira',
            'thursday'            => 'Quinta-feira',
            'friday'              => 'Sexta-feira',
            'saturday'            => 'Sábado',
            'sunday'              => 'Domingo',
            'time_to_time'        => 'De X a Y horas',
            'send'                => 'Enviar a minha candidatura'
        ),
        'jobs' => array (
            'title'                   => 'Lista de aplicações',
            'applications'            => 'As minhas aplicações',
            'my_applications'         => 'Nenhuma aplicação ainda',
            'available_applications'  => 'Vagas',
            'buildteam'               => 'Arquitectos',
            'buildteam_desc'          => 'Eles são responsáveis pela construção dos apartamentos oficiais do hotel.',
            'react'                   => 'Candidate-se agora!',
            'success'                 => 'Aplicado com sucesso',
            'closed'                  => 'Fechado'
        ),

        /*     App/View/Password     */
        'password_claim' => array (
            'title'                 => 'Esqueceu-se da sua palavra-passe?',
            'content_1'             => 'Introduza o seu nome de utilizador ' . Config::site['shortname'] . ' e o seu endereço electrónico abaixo.',
            'content_2'             => 'Receberá um e-mail com um link de confirmação para que possa alterar a sua palavra-passe.',
            'username'              => 'O meu nome de utilizador',
            'email'                 => 'Endereço postal',
            'send'                  => 'Enviar um e-mail',
            'wrong_page'            => 'Falso alarme !',
            'wrong_page_content_1'  => 'Se se lembrar da sua palavra-passe ou se tiver acidentalmente solicitado uma palavra-passe esquecida, pode utilizar o link abaixo para voltar à página inicial.',
            'back_to_home'          => 'Voltar para a página inicial'
        ),
        'password_reset' => array (
            'title'                     => 'Altere a sua palavra-passe',
            'new_password'              => 'Nova palavra-passe',
            'new_password_fill'         => 'Introduza a minha nova palavra-chave...',
            'new_password_repeat_fill'  => 'Por favor, reescreva a sua palavra-passe...',
            'change_password'           => 'Alterar a minha palavra-chave'
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'As minhas preferências',
            'password'       => 'Altere a sua palavra-passe',
            'verification'   => 'Set verification',
            'email'          => 'Altere o seu endereço de correio electrónico',
            'namechange'     => 'Mude o seu apelido',
            'shop_history'   => 'Histórico de compras'
        ),
        'settings_email' => array (
            'title'           => 'Alterar o meu endereço de correio electrónico',
            'email_title'     => 'Endereço de correio electrónico actual',
            'email_label'     => 'O seu endereço de correio electrónico é necessário para restaurar a sua conta se perder o acesso.',
            'password_title'  => 'Senha actual',
            'fill_password'   => 'Introduza a sua palavra-passe...',
            'save'            => 'Guardar'
        ),
        'settings_namechange' => array (
            'warning'         => 'Atenção! Saia do hotel antes de mudar o seu apelido!',
            'title'           => 'Mudar o meu apelido',
            'help_1'          => 'Quer mudar o seu apelido para outro? Vai custar-lhe ',
            'help_2'          => 'que será debitado imediatamente após o seu pedido. Por favor pense cuidadosamente sobre o seu futuro apelido.',
            'fill_username'   => 'Introduza o seu novo nome de utilizador...',
            'request'         => 'Pedido'
        ),
        'settings_password' => array (
            'title'                     => 'Alterar a minha palavra-chave',
            'password_title'            => 'Senha actual',
            'fill_password'             => 'Introduza a sua palavra-passe actual...',
            'newpassword_title'         => 'Nova palavra-passe',
            'fill_newpassword'          => 'Introduza aqui a sua nova palavra-passe...',
            'fill_newpassword_repeat'   => 'Digite novamente a sua nova palavra-passe...',
            'help'                      => 'A sua palavra-chave deve conter pelo menos seis caracteres com letras e números.',
            'save'                      => 'Guardar'
        ),
        'settings_preferences' => array (
            'title'               => 'As minhas preferências',
            'follow_title'        => 'Definições de rastreio - Quem me pode rastrear?' ,
            'follow_label'        => 'Não quero ser seguido em ' . Config::site['shortname'],
            'friends_title'       => 'Pedido dos amigos',
            'friends_label'       => 'Permitir que outros membros se tornem meus amigos?',
            'room_title'          => 'Convite para um apartamento',
            'room_label'          => 'Não quero ser convidado para outros apartamentos',
            'hotelalerts_title'   => 'Alerta no hotel',
            'hotelalerts_label'   => 'Não quero receber notificações',
            'chat_title'          => 'Definições de conversação',
            'chat_label'          => 'Quero usar a velha conversat',
            'dark_mode'           => 'Quer usar o modo escuro?',
            'language_title'      => 'Escolha da língua'
        ),
        'settings_verification' => array (
            'title'                 => 'Proteger a minha conta',
            'help'                  => 'Esta verificação aumenta a segurança da sua conta. Quando iniciar sessão, terá de responder às perguntas de segurança com as suas respostas predefinidas ou introduzir o código gerado pela aplicação Google, dependendo das suas preferências.',
            'password_title'        => 'Palavra-passe',
            'fill_password'         => 'Introduza a sua palavra-passe actual...',
            'auth_title'            => 'Verificação em duas etapas',
            'auth_label'            => 'Proteja a sua conta com o método de verificação em duas etapas',
            'method_title'          => 'Método de verificação',
            'method_choose'         => 'Escolha o seu método de verificação...',
            'method_pincode'        => 'Quero introduzir um código PIN.',
            'method_auth_app'       => 'Quero utilizar a autenticação através do Google 2FA',
            'pincode_title'         => 'Segurança do código PIN',
            'pincode_label'         => 'Introduza o código PIN da sua escolha para proteger a sua conta, isto assegurará uma melhor protecção contra pessoas maliciosas.',
            'fill_pincode'          => 'Introduza aqui o seu novo código PIN',
            'generate_auth'         => 'Segurança através de autenticação Google 2FA',
            'generate_auth_label'   => 'Este método é mais fiável. Liga a sua conta ' . Config::site['shortname'] . ' para uma aplicação de autenticação chamada (Google Authenticator) no seu smartphone. Quando precisa de se registar, tudo o que tem de fazer é introduzir o código gerado pelo Google que recebe no seu smartphone através da aplicação Google.',
            'link_account'          => 'Link para a sua conta',
            'link_account_label'    => 'Ligar a sua conta é fácil! Basta digitalizar o seu código QR através da sua aplicação Google e clicar em guardar para validar as suas alterações.',
            'save'                  => 'Guardar'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'As vantagens do Clube VIP',
            'club_buy'            => 'Comprar o Clube VIP',
            'unlimited'           => 'Ilimitado',
            'more_information'    => 'Mais informações',
            'content_1'           => 'Tem uma pergunta ou um problema com uma compra?',
            'content_2'           => 'Não hesite em contactar o serviço ao cliente através de ',
            'help_tool'           => 'Ajuda de apoio',
            'random_club_users'   => Config::site['shortname'] . ' que é membro do clube',
            'desc'                => 'Aqui pode juntar-se ao VIP Club com diamantes para comprar mobis exclusivos e muito mais...',
            'days'                => 'DIAS',

            'catalog'               => 'Novidades no catálogo',
            'catalog_desc'          => 'Acesso a mais de 60 novas categorias de mobiliário exclusivas para membros do clube',
            'king'                  => 'Tu és o rei',
            'king_desc'             => 'Desfrute de uma prévia dos últimos mobis adicionados ao catálogo',
            'gift'                  => 'C\'est cadeau',
            'gift_desc'             => 'Aqui está um crachá que mostrará o seu estatuto dentro do hotel',
            'build'                 => 'As suas competências de construção são ilimitadas',
            'build_desc'            => 'Criar até 1000 apartamentos em vez do máximo de 150',
            'groups'                => 'Os grupos já não serão um segredo para si',
            'groups_desc'           => 'Criar até 500 grupos em vez do máximo de 150',
            'rooms'                 => 'Haverá sempre lugar para si',
            'rooms_desc'            => 'Não se pode voltar atrás na entrada, pode-se visitar os apartamentos mesmo quando estão cheios',
            'flood'                 => 'É a sua vez de falar',
            'flood_desc'            => 'A duração da sua inundação é reduzida de 30 para 10 segundos, não verá o tempo passar',
            'commands'              => 'Poderá divertir-se',
            'commands_desc'         => 'Tirar partido de encomendas especiais exclusivas para membros do clube',
        ),
        'shop_history' => array (
            'more_information'    => 'Mais informações',
            'buy_history'         => 'As minhas compras',
            'product'             => 'Produtos',
            'date'                => 'Data',
            'buy_history_empty'   => 'Neste momento, não tem histórico de compras.',
            'buy_club'            => 'Compra do VIP Club',
            'content_1'           => 'Tem alguma questão ou preocupação em comprar algo na loja?',
            'content_2'           => 'Não hesite em contactar o serviço ao cliente através de',
            'help_tool'           => 'Ajuda de apoio',
            'title'               => 'Os meus últimos pagamentos',
            'desc'                => 'Encontre aqui uma história de todas as compras que fez.',
            'title_draw'          => 'Personalize o seu crachá',
            'draw_desc'           => 'Personalize o seu distintivo em troca dos seus diamantes.',
            'draw_tool'           => 'Ferramentas de desenho',
            'add_color'           => 'Acrescentar uma cor',
            'draw_reset'          => 'Repor a zero',
            'buy_badge'           => 'Comprar o meu crachá',
            'buy_on'              => 'Comprado em',
            'erase'               => 'Shift + Clique para apagar'
        ),
        'shop_offers' => array (
            'back'              => 'Voltar',
            'buymethods'        => 'Forma de pagamento',
            'for'               => 'para',
            'or_lower'          => 'ou menos',
            'loading_methods'   => 'Os métodos de pagamento estão actualmente a ser carregados...',
            'store'             => 'Loja'
        ),
        'shop' => array (
            'title'             => 'Seleccione um produto',
            'country'           => 'País:',
            'netherlands'       => 'Países Baixos',
            'belgium'           => 'Bélgica',
            'super_rare'        => 'Super raro',
            'more_information'  => 'Mais informações',
            'content_1'         => 'Tem alguma questão ou problema com uma compra?',
            'content_2'         => 'Não hesite em contactar o serviço ao cliente através de',
            'help_tool'         => 'Ajuda de apoio',
            'not_logged'        => 'Maldição! Não está ligado.',
            'have_to_login'     => 'Tem de estar ligado para aceder à loja ' . Config::site['shortname'] . '.',
            'click_here'        => 'Clique aqui',
            'to_login'          => 'Iniciar Sessão.',
            'store'             => 'Loja',
            'desc'              => 'Aqui pode comprar diamantes, com dinheiro real, a fim de comprar mobis exclusivos do catálogo.',
            'get'               => 'Ganha-se',
            'shop_success'      => 'Os seus diamantes foram adicionados à sua conta. Se algo correr mal, por favor contacte-nos através do nosso centro de ajuda',
            'shop_error'        => 'Ocorreu um erro e a compra foi cancelada. Não consegue completar a sua compra? Por favor contacte-nos através do nosso centro de ajuda.',
            'help'              => 'Ajuda de apoio',
            'back'              => 'Voltar',
            'waiting'           => 'Carregamento em progresso...'
        ),
        'games_ranking' => array(
            'title'             => 'Classificações',
            'desc'              => 'Aqui encontrará as melhores pontuações dos nossos jogadores!',
            'achievements'      => 'Win-win',
            'online'            => 'Tempo online'
        ),
        'casino' => array (
            'rules_title'       => 'O que é o casino?',
            'rules_desc'        => 'O casino é geralmente um local onde há apostas de extras, ultra-sons, LTDs, coleccionadores ou diamantes.',

            'rules_how_title'   => 'Como jogar no casino?',
            'rules_how_1'       => 'Jogar no casino é fácil, basta apostar para um dealer disponível. Uma vez feita a aposta, terá de propor o seu jogo.',
            'rules_how_2'       => 'Há dois tipos de jogo: <b>13</b> ou <b>21</b>.<br>Terá também de dizer quantos dados quer no seu jogo. (De 1 a 5)',
            'rules_how_3'       => 'Se houver pelo menos 13.3, o vendedor lançará dois dados primeiro. Se houver 8 ou mais 8\'s, ele terá de esperar pelo seu "<b>+</b>" para fazer girar o 3º dado.',
            'rules_how_4'       => 'Se houver pelo menos 21.4, o vendedor lançará primeiro três dados. Se houver 16 ou mais, ele terá de esperar pelo seu "<b>+</b>" para transformar o 4º dado.',
            'rules_how_5'       => 'O objectivo é simples: não exceder <b>13</b> ou <b>21</b> dependendo do jogo que tenha escolhido.',

            'rules_more_title'  => 'Para saber mais',
            'rules_more_1'      => 'Antes de cada jogo, é muito importante fechar os dados antes de seguir em frente.<br>A aposta deve ser feita antes do início do jogo. (Excepto no caso do Bet-Remise, ver GTC)',
            'rules_more_2'      => 'No caso de um empate entre os dois jogadores, o jogo é reiniciado com o mesmo jogo que no início.<br>E assim por diante... até haver um vencedor.',
            'rules_more_3'      => 'As regras são as mesmas para o jogo em 21',

            'example_title'     => 'Exemplo',
            'example_J1'        => 'Jogador 1',
            'example_J2'        => 'Jogador 2',
            'example_part_1'    => 'Ele aposta 5 extras para o jogador 2<br>e escolheu o seu jogo, dizendo : "<b>13.5</b>"',
            'example_part_2'    => 'Ele deve escolher entre parar aos 8 ou continuar o seu jogo, dizendo "<b>+</b>"<br><b>Não deve exceder 13, pelo que aos 8 anos tem uma hipótese de perder no seu jogo</b><br>Ele opta por dizer "<b>+</b>"',
            'example_part_3'    => 'Ele disse "<b>12.</b>"<br><b>O ponto significa que o jogador quer parar o jogo aqui</b>',
            'example_part_4'    => 'Ele lançará, portanto, 2 dados que dão 5 + 3<br>Ele irá perguntar ao jogador 1 : "<b>8+?</b>"',
            'example_part_5'    => 'Ele irá lançar um 3º dado que cai no 4<br>Isto resultará em 5 + 3 + 4 = 12<br>Ele irá perguntar ao jogador 1 : "<b>12+?</b>"',
            'example_part_6'    => 'Ele fecha os dados e lança o seu jogo,<br>Ele lança 2 dados, que saem 5 + 5<br>Ele rola um 3º dado que é 2<br>Por isso 5 + 5 + 2 = 12',
            'example_same'      => 'IGUALDADE'
        )
    ),
    'core' => array (
        'belcredits' => 'diamantes',
        'hotelapi' => array (
            'disabled' => 'Incapaz de processar o pedido, uma vez que esta funcionalidade está actualmente desactivada!'
        ),
        'dialog' => array (
            'logged_in'             => 'Raios, para chegar a esta página tem de estar ligado!',
            'not_logged_in'         => 'Não precisa de estar ligado para chegar a esta página!'
        ),
        'notification' => array (
            'message_placed'        => 'A sua mensagem foi afixada!',
            'message_deleted'       => 'A sua mensagem foi apagada!',
            'invisible'             => 'Isto é agora invisível!',
            'profile_invisible'     => 'O jogador em ' . Config::site['shortname'] . ' tornou o seu perfil invisível.',
            'profile_notfound'      => 'Infelizmente... não foi possível encontrar o ' . Config::site['shortname'] . '!',
            'no_permissions'        => 'Não tem autorização para o fazer.',
            'already_liked'         => 'Já gostou disto!',
            'liked'                 => 'Gosta disto!',
            'unliked'               => 'Gosto de apagar com sucesso!',
            'banned_1'              => 'Foi banido por infringir as regras de ' . Config::site['shortname'] . ':',
            'banned_2'              => 'A sua exclusão terminará:',
            'something_wrong'       => 'Algo parece ter corrido mal, por favor tente novamente.',
            'room_not_exists'       => 'Este apartamento não existe!',
            'staff_received'        => 'Obrigado! O sítio web de ' . Config::site['shortname'] . ' par les membres de l\'équipe des staffs!',
            'not_enough_belcredits' => 'Não tem pontos GAMERS suficientes.',
            'not_enough_points'     => 'Não tem diamantes suficientes.',
            'topic_closed'          => 'Não se pode responder a um tópico fechado!',
            'post_not_allowed'      => 'Não tem permissão para criar uma mensagem neste fórum!',
            'draw_badge_uploaded'   => 'O seu crachá foi enviado com sucesso e está pronto para ser revisto!'
        ),
        'pattern' => array (
            'can_be'                => 'Máximo até',
            'must_be'               => 'Mínimo de',
            'characters_long'       => 'demasiados caracteres.',
            'invalid'               => 'Não cumpre os requisitos!',
            'invalid_characters'    => 'Contém caracteres inválidos!',
            'is_required'           => 'Preenchido em todos os campos!',
            'not_same'              => 'não correspondem',
            'captcha'               => 'Recaptcha introduzida incorrectamente!',
            'numeric'               => 'Deve conter números!',
            'email'                 => 'é inválido!'
        ),
        'title' => array (
            'home'              => 'Fazer amigos, divertir-se, conhecer-se melhor',
            'lost'              => 'Página não encontrada!',
            'registration'      => 'Registe-se gratuitamente!',
            'hotel'             => 'Hotel',

            'casino'            => array (
                'rules'    => 'Regras do casino',
            ),

            'password' => array (
                'claim'    => 'Esqueceu-se da sua palavra-passe??',
                'reset'    => 'Alterar palavra-passe',
            ),
            'settings' => array (
                'index'         => 'As minhas preferências',
                'password'      => 'Alterar a minha palavra-passe',
                'email'         => 'Alterar o meu endereço de correio electrónico',
                'namechange'    => 'Alterar o meu nome de utilizador ' . Config::site['shortname'] . '.'
            ),
            'community' => array (
                'index'     => 'Comunidade',
                'photos'    => 'Fotos',
                'staff'     => 'Equipa',
                'team'      => 'Equipas',
                'fansites'  => 'Sítio do ventilador',
                'value'     => 'Catálogo de Mercado',
                'forum'     => 'Os meus grupos'
            ),
            'games' => array (
                'ranking'   => 'Classificações'
            ),
            'shop' => array (
                'index'     => 'Loja',
                'history'   => 'Histórico de compras',
                'club'      => 'VIP Club',
                'badge'     => 'Personalize o seu crachá'
            ),
            'help' => array (
                'index'     => 'Ajuda de apoio',
                'requests'  => 'Bilhete de ajuda',
                'new'       => 'Abrir um novo bilhete'
            ),
            'jobs' => array (
                'index'     => 'Recrutamento',
                'apply'     => 'Resposta às candidaturas'
            )
        )
    ),
    'asn' => array(
        'login'                     => 'A ligação com uma VPN não é permitida!',
        'registerd'                 => 'Não se pode registar utilizando uma VPN!'
    ),
    'login' => array (
        'invalid_password'          => 'Palavra-passe inválida.',
        'invalid_pincode'           => 'Este código PIN não corresponde aos dados anteriores.',
        'fill_in_pincode'           => 'Introduza o seu código PIN para aceder à sua conta !'
    ),
    'register' => array (
        'username_invalid'          =>  'Este apelido não respeita o formato das regras.',
        'username_exists'           =>  'Este apelido já está em uso :-(',
        'email_exists'              =>  'Este endereço de e-mail já está a ser utilizado :-(',
        'too_many_accounts'         => 'Demasiadas contas registadas sob este endereço IP :-('
    ),
    'claim' => array (
        'invalid_email'             => 'Este endereço de correio electrónico não corresponde a ' . Config::site['shortname'] . ' ID.',
        'invalid_link'              => 'Esta ligação expirou. Por favor, solicite novamente uma nova palavra-passe.',
        'send_link'                 => 'Acabámos de lhe enviar um link de confirmação por e-mail! Não recebeu nada? Por favor verifique e actualize o seu e-mail.',
        'password_changed'          => 'A sua palavra-passe foi alterada com sucesso. Agora pode voltar a entrar no sistema!',

        'email'  => array (
            'title'                 => 'Altere a sua palavra-passe.'
        )
    ),
    'settings' => array (
        'email_saved'               => 'O seu endereço de e-mail foi alterado com sucesso.',
        'pincode_saved'             => 'O seu novo código PIN foi registado, tem agora de voltar a entrar no sistema. Até breve! :)',
        'password_saved'            => 'A sua palavra-passe foi alterada. Tem agora de voltar a iniciar sessão. Até breve ! :)',
        'preferences_saved'         => 'As suas preferências foram salvas!',
        'current_password_invalid'  => 'A palavra-chave que introduziu não corresponde aos dados da sua conta ' . Config::site['shortname'] . ' ID.',
        'choose_new_username'       => 'Introduzir um novo nome de utilizador.',
        'choose_new_pincode'        => 'Introduzir um novo código PIN.',
        'user_is_active'            => 'Este nome de utilizador ' . Config::site['shortname'] . ' pode ainda estar activo!',
        'user_not_exists'           => 'Este nome de utilizador ' . Config::site['shortname'] . ' está disponível e ainda não existe!',
        'name_change_saved'         => 'O seu nome de utilizador foi alterado, 5 diamantes acabam de ser debitados da sua conta. Tem agora de iniciar sessão novamente!',
        'invalid_secretcode'        => 'A autenticação Google através do código SECRET está incorrecta.',
        'enabled_secretcode'        => 'Conjunto de métodos de autenticação! Precisa de voltar a entrar... até breve!',
        'disabled_secretcode'       => 'Método de autenticação desactivado!'
    ),
    'rcon' => array (
        'exception'                 => 'RCON não pode prosseguir porque o emulador está desligado.'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'   => 'A transacção falhou!',
            'invalid_code'          => 'O código introduzido é incorrecto.',
            'success_1'             => 'Obrigado pela sua compra! Tu viens de recevoir',
            'success_2'             => 'diamantes.'
        ),
        'club' => array (
            'already_vip'           => 'É um membro permanente da ' . Config::site['shortname'] . ' VIP Club.',
            'purchase_success'      => 'Parabéns! É agora um membro do ' . Config::site['shortname'] . ' VIP Club pour 31 jours.',
        ),
        'marketplace' => array(
            'expired'               => 'A venda desta mobi expirou, é impossível de comprar esta mobi neste momento!',
            'purchased'             => 'Este mobi foi comprado com sucesso e está agora no seu inventário.',
            'regards'               => 'A sua mobi foi tida em conta! Atenciosamente, ' . Config::site['shortname']
        )
    ),
    'help' => array (
        'ticket_created'            => 'O seu bilhete foi processado. Mostrar a lista dos meus bilhetes relativos aos meus pedidos de ajuda.',
        'ticket_received'           => 'Um membro do pessoal respondeu ao seu bilhete. Por favor, vá à sua lista de bilhetes para ver a resposta.',
        'already_open'              => 'Ainda tem um bilhete aberto! Quando o seu bilhete estiver fechado, pode criar um novo bilhete.',
        'no_answer_yet'             => 'Só se pode responder uma vez ' . Config::site['shortname'] . ' pessoal terá respondido.',
    ),
    'forum' => array (
        'is_sticky'                 => 'Autocolante actualizado!',
        'is_closed'                 => 'Actualização do estado do tópico!'
    ),

    /*     Housekeeping     */
    'housekeeping' => array (
        'base' => array(
            'dashboard_header_title'    => 'Painel de instrumentos'
        ),
        'javascript' => array(
            'dashboard_table_username'  => 'Pseudo'
        )
    )
);